import aedes from 'aedes';
import { createServer } from 'net';
import { createServer as createHttpServer } from 'http';
import { WebSocketServer } from 'ws';
import { Duplex } from 'stream';

const mqttPort = 1883;
const wsPort = 9001;

const broker = aedes();

// MQTT via TCP
const mqttServer = createServer(broker.handle);
mqttServer.listen(mqttPort, () => {
  console.log('MQTT broker is running on port', mqttPort);
});

// Create a custom WebSocket to Stream bridge
function createWebSocketStream(ws) {
  const stream = new Duplex({
    objectMode: false,
    write(chunk, encoding, callback) {
      if (ws.readyState === ws.OPEN) {
        ws.send(chunk, callback);
      } else {
        callback(new Error('WebSocket is not open'));
      }
    },
    read() {
      // This will be handled by the 'message' event
    }
  });

  // Forward WebSocket messages to the stream
  ws.on('message', function(data) {
    stream.push(data);
  });

  // Handle WebSocket close
  ws.on('close', function() {
    stream.push(null); // End the stream
  });

  // Handle WebSocket errors
  ws.on('error', function(error) {
    stream.destroy(error);
  });

  // Handle stream close
  stream.on('close', function() {
    if (ws.readyState === ws.OPEN) {
      ws.close();
    }
  });

  return stream;
}

// MQTT via WebSocket
const httpServer = createHttpServer();
const wss = new WebSocketServer({ server: httpServer });

wss.on('connection', function connection(ws) {
  console.log('WebSocket client connected');
  
  try {
    const stream = createWebSocketStream(ws);
    broker.handle(stream);
  } catch (error) {
    console.error('Error handling WebSocket connection:', error);
    ws.close();
  }
});

httpServer.listen(wsPort, () => {
  console.log('WebSocket MQTT broker is running on port', wsPort);
});

// Optional: log message
broker.on('publish', (packet, client) => {
  if (packet.topic === 'building/temperature') {
    console.log(`Pesan diterima: ${packet.payload.toString()}`);
  }
});

// Handle broker events
broker.on('clientConnect', (client) => {
  console.log(`Client ${client.id} connected`);
});

broker.on('clientDisconnect', (client) => {
  console.log(`Client ${client.id} disconnected`);
});

broker.on('subscribe', (subscriptions, client) => {
  console.log(`Client ${client.id} subscribed to topics: ${subscriptions.map(s => s.topic).join(', ')}`);
});

// Handle process termination
process.on('SIGINT', () => {
  console.log('\nShutting down MQTT broker...');
  mqttServer.close();
  httpServer.close();
  process.exit(0);
});
// MQTT subscriber with ES modules
import mqtt from 'mqtt';

const client = mqtt.connect('mqtt://localhost:1883');
const topic = 'building/temperature';

client.on('message', (topic, message) => {
    console.log('Pesan dari ESP32:', message.toString());
    
    // Parse JSON data
    try {
        const data = JSON.parse(message.toString());
        console.log(`Suhu: ${data.suhu}°C, Kelembaban: ${data.kelembaban}%`);
    } catch (error) {
        console.log('Format pesan tidak valid:', error.message);
    }
});

client.on('connect', () => {
    client.subscribe(topic);
    console.log('Berlangganan ke topik:', topic);
});

client.on('error', (error) => {
    console.log('MQTT Error:', error);
});

client.on('close', () => {
    console.log('MQTT connection closed');
});

// Graceful shutdown
process.on('SIGINT', () => {
    console.log('\nShutting down...');
    client.end();
    process.exit(0);
});
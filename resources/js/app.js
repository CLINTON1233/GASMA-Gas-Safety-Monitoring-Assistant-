import Chart from 'chart.js/auto';

// Grafik Performance
const ctx = document.getElementById('performanceChart').getContext('2d');
new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        datasets: [
            {
                label: 'Product A',
                data: [200, 300, 400, 300, 500, 700],
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1,
            },
            {
                label: 'Product B',
                data: [100, 200, 300, 400, 300, 500],
                borderColor: 'rgb(255, 99, 132)',
                tension: 0.1,
            },
        ],
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
        },
    },
});

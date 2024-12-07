import Chart from 'chart.js/auto';

// Data Revenue Chart
const ctxRevenue = document.getElementById('revenueChart').getContext('2d');
new Chart(ctxRevenue, {
    type: 'line',
    data: {
        labels: JSON.parse(ctxRevenue.dataset.labels), // Pastikan ini diisi dengan benar di blade
        datasets: [{
            label: 'Total Revenue',
            data: JSON.parse(ctxRevenue.dataset.data),
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 2,
            fill: false
        }]
    },
    options: {
        responsive: true
    }
});

// Data Profit Chart
const ctxProfit = document.getElementById('profitChart').getContext('2d');
new Chart(ctxProfit, {
    type: 'bar',
    data: {
        labels: JSON.parse(ctxProfit.dataset.labels),
        datasets: [
            {
                label: 'Sales',
                data: JSON.parse(ctxProfit.dataset.sales),
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            },
            {
                label: 'Revenue',
                data: JSON.parse(ctxProfit.dataset.revenue),
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }
        ]
    },
    options: {
        responsive: true
    }
});

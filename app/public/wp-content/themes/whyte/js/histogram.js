const ctx = document.getElementById('myChart');

new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange', 'Red', 'Blue', 'Yellow', 'Green'],
    datasets: [{
        label: 'Votes',
      data: [12, 19, 13, 15, 12, 13, 12, 19, 13, 15],
      backgroundColor: [
        '#40FF8D',
        '#4B09B2',
        '#4B09B2',
        '#40FF8D',
        '#4B09B2',
        '#4B09B2',
        '#40FF8D',
        '#40FF8D',
        '#4B09B2',
        '#4B09B2'
      ],
      borderWidth: 5,
      borderColor: '#fff0',
      borderRadius: 20,
      borderSkipped: 10
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});
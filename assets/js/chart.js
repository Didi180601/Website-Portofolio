const myChart = document.getElementById('myChart');

  new Chart(myChart, {
    type: 'bar',
    data: {
      labels: ['PBO', 'IMK', 'Kewarganegaraan', 'Basdat I', 'TBO', 'RPL', 'Komunikasi Data'],
      datasets: [{
        label: '# Nilai Mata Kuliah',
        data: [4, 3.5, 4, 2.5, 3.5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
        responsive: true,
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  })

  const mychart = document.getElementById('mychart');

  new Chart(mychart, {
    type: 'line',
    data: {
      labels: ['PBO', 'IMK', 'Kewarganegaraan', 'Basdat I', 'TBO', 'RPL', 'Komunikasi Data'],
      datasets: [{
        label: '# Nilai Mata Kuliah',
        data: [4, 3.5, 4, 2.5, 3.5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
        responsive: true,
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });//
  
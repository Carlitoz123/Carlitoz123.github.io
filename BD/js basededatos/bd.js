const ctx = document.getElementById('chartIngresos');

new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octumbre', 'Noviembre', 'Diciembre'],
    datasets: [{
      label: 'Ingresos Por Mes',
      data: [30000, 20000, 45000, 10000, 5000, 70000, 10000, 100, 30000, 50000, 24000, 1000],
      borderWidth: 1
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

const ctx1 = document.getElementById('chartCategorias');

  new Chart(ctx1, {
    type: 'pie',
    data: {
      labels: ['Desayuno', 'Comidas', 'Cenas', 'Snacks'],
      datasets: [{
        label: '# of Votes',
        data: [10, 15, 5, 8,],
        borderWidth: 0
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

 
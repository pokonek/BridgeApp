const loadData = () => {
  const userId = document.querySelector('.profile_graph').dataset.userid;

  console.log('run2')

  return fetch(`./results/${userId}.json`)
  .then(res => res.json())
}

const drawChart = (data) => {
  var chart = new Chart('chart-canvas', {
    type: 'line',
    responsive: true,
    data: {
      labels: Object.keys(data),
      datasets: [{
        label: 'Turnieje',
        data: Object.values(data),
        fill: false,
        borderColor: 'rgb(75, 192, 192)',
        tension: 0.1,
        spanGaps: true,
      }]
    }
  }); 
}

const setupChart = async () => {
  const data = await loadData()

  drawChart(data)

}


setupChart()
//C3
var chart = c3.generate({
	bindto: '#chart1',
    data: {
        x: 'x',
//        xFormat: '%Y%m%d', // 'xFormat' can be used as custom format of 'x'
        columns: [
        ['x', '2008', '2009', '2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018'],
        ['MDE', 8.3, 8.1, 8.0, 8.2, 9.1, 10.7, 11.4, 12.5, 12.8, 13.3, 14.4],
        ['MDE with Severe Impairment', 6.0, 5.8, 5.7, 5.7, 6.3, 7.7, 8.2, 8.8, 9.0, 9.4, 10.0]
      ]
    },
    axis: {
    //    x: {
    //        type: 'timeseries',
    //        tick: {
	//			format:'%Y-%m-%d'
    //           // format: '%Y-%m-%d'
    //        }    
    //    },
        y: {
            label: {
                text: 'Percent in past year',
                position: 'outer-top'
            }
        }
    }
});


//ChartJS
var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['2008', '2009', '2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018'],
        datasets: [{
            label: 'Major Depressive Episode in the Past Year among Adults Aged 18 to 25: 2008-2018',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [8.4, 8.0, 8.3, 8.3, 8.9, 8.7, 9.3, 10.3, 10.9, 13.1, 13.8]
        }]
    },

    // Configuration options go here
    
    options: {
        scales: {
            yAxes: [{
                // https://www.chartjs.org/docs/latest/axes/cartesian/linear.html
                ticks: {
                    min: 6, // setting y-axis to show minimum value of 6
                    max: 15 // setting y-axis to show maximum value of 15
                    // beginAtZero: true  (setting y-axis to begin value at 0
                },
                //https://www.chartjs.org/docs/latest/axes/labelling.html
                scaleLabel: {
                    display: true,
                    labelString: 'Percent in past year'
                }
            }]
        }
    }
});


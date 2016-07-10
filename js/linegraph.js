$(document).ready(function(){
	$.ajax({
		url : "http://localhost/gahirai/followersdata.php",
		type : "GET",
		success : function(data){
			console.log(data);

			var userid = [];
			var Temp = [];
			var Humid = [];
			var Water = [];

			// for(var i in data) {
				for(var i=1;i<=10;i++){
				userid.push(data[i].Time);
				Temp.push(data[i].temperature);
				Humid.push(data[i].Humidity);
				Water.push(data[i].Depth);
			}

			var chartdata = {
				labels: userid,
				datasets: [
					{
						label: "Temperature",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(59, 89, 152, 0.1)",
						borderColor: "rgba(59, 89, 152, 1)",
						pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
						pointHoverBorderColor: "rgba(59, 89, 152, 1)",
						pointRadius: 0,
						data: Temp
					},
					{
						label: "Humidity",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(211, 72, 54, 0.5)",
						borderColor: "rgba(211, 72, 54, 1)",
						pointHoverBackgroundColor: "rgba(29, 202, 255, 1)",
						pointHoverBorderColor: "rgba(29, 202, 255, 1)",
						pointRadius: 0,
						data: Humid
					},
					{
						label: "Water Level",
						// fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(29, 202, 255, 0.5)",
						borderColor: "rgba(29, 202, 255, 1)",
						pointHoverBackgroundColor: "rgba(211, 72, 54, 1)",
						pointHoverBorderColor: "rgba(211, 72, 54, 1)",
						pointRadius: 0,
						data: Water
					}
				]
			};

			var ctx = $("#mycanvas");

			var LineGraph = new Chart(ctx, {
				type: 'line',
				data: chartdata,

				options: {
        scales: {
            // yAxes: [{
            //     ticks: {
            //         max: 100,
            //         min: 0,
            //         stepSize: 10,
            //         suggestedMax: 5
            //     }
           	// }],
           	xAxes:[{
           		display: true
           	}]
        }
    }
			});



//
if ($(window).width() < 500) {
  LineGraph.options.scales.xAxes.display = false;
  LineGraph.update();
} else {
  LineGraph.options.scales.xAxes.display = true;
  LineGraph.update();
}
$(window).resize(function(e) {
  if ($(this).width() < 500) {
    LineGraph.options.scales.xAxes.display = false;
    LineGraph.update();
  } else {
    LineGraph.options.scales.xAxes.display = true;
    LineGraph.update();
  }
});


setInterval(function(e) {
console.log(LineGraph.chartdata.datasets[0]);
  LineGraph.chartdata.datasets[0].data.push(15);
  LineGraph.update();
}, 1000);









			
		},
		error : function(data) {

		}
	});
});
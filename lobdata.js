$(document).ready(function(){
	$.ajax({
		url: "getLoBData.php",
		method: "GET",
		success: function(data) {
			console.log(data);
//			var industry = [];
//			var totalRTI = [];
//
//			for(var i in data) {
//				industry.push(data[i].Industry);
//				totalRTI.push(data[i].Total);
//			}
//			console.log(totalRTI);

			var chartdata = {
				datasets : [
					{
						backgroundColor: 'rgba(200, 200, 200, 0.75)',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: data
					}
				]
			};

			var ctx = $("#lobchart");

			var barGraph = new Chart(ctx, {
				type: 'pie',
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});
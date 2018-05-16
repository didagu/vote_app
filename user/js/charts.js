$(document).ready(function(){
    var id = $('#policy_id').val();
	$.ajax({
		url:"events/fetchChartData.php?id="+id,
		method:"GET",		
		success: function(data){
            data=JSON.parse(data);
			console.log(data);
			var policy=[];
			var ratings=[];

			for (var i in data){
				policy.push(data[i][0]);
				ratings.push(data[i][1]);
			}

			var chartdata={
				labels:policy,
				datasets: [
					{
						label: 'ratings',
						backgroundColor: 'rgba(234, 7, 33,0.5)',
						borderColor:'rgb(234, 7, 33)',
						borderWidth:'0',
						fill:false,
						data: ratings
					}
				]
			};

			var ctx= $("#myChart");

			var lineGraph= new Chart(ctx, {
				type: 'line',
				data: chartdata,
				responsive:true,
				options: {
		           elements: { 
		              point: { 
		                radius: 0,
		                hitRadius: 10, 
		                hoverRadius: 5,
		              } 
		            },
		            scales: {
		            xAxes: [{
		                        gridLines: {
		                            display:false
		                        }
		                    }],
		            yAxes: [{
		                        gridLines: {
		                            display:false
		                        }   
		                    }]
		            },

		        }
			});

		},
		error: function(data){
			console.log(data);
		}
	});
});

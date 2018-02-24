<style type="text/css">
			#chart-container {
				width: 80%;
				height: auto;
			}
</style>

<body>
	<div id="chart-container">
			<canvas id="mycanvas"></canvas>
		</div>
</body>


<script type="text/javascript">


		$(document).ready(function(id){
			$.ajax({
			        type: 'POST',
			        url: 'ajax_list',
			        data:{id: id},
				        success: function(data) {
				        	var obj = JSON.parse(data);
				        	console.log(obj.sales2);

				        	var date = [];
				        	var total_cost = [];


				        	for(var i in obj.sales2){
				        		date.push("Date " + obj.sales2[i].date);
				        		total_cost.push(obj.sales2[i].total_cost);
				        	}

				        	var chartdata = {
								labels: date,
								datasets : [
									{
										label: 'Date Cost',
										backgroundColor: 'black',
										borderColor: 'rgba(200, 200, 200, 0.75)',
										hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
										hoverBorderColor: 'rgba(200, 200, 200, 1)',
										data: total_cost
									}
								]
							};

							var ctx = $("#mycanvas");

							var barGraph = new Chart(ctx, {
								type: 'bar',
								data: chartdata
							});   

				        }
				    });



			})


</script>
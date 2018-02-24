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

				        	var visitdate = [];
				        	var visit_cost = [];


				        	for(var i in obj.sales2){
				        		date.push("Date " + obj.sales2[i].date);
				        		total_cost.push(obj.sales2[i].total_cost);
				        	}

				        	for(var i in obj.sales1){
				        		visitdate.push("Date " + obj.sales1[i].visitdate);
				        		visit_cost.push(obj.sales1[i].visit_cost);
				        	}

				        	var chartdata = {
								labels: date,
								datasets : [
									{
										label: 'ITEMS',
										backgroundColor: 'blue',
										borderColor: 'lightblue',
										hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
										hoverBorderColor: 'rgba(200, 200, 200, 1)',
										fill : false,
										lineTension : 0,
										pointRadius : 5,
										data: total_cost
									},
									{
										label: 'VISIT',
										backgroundColor: 'green',
										borderColor: 'lightgreen',
										hoverBackgroundColor: 'rgba(200, 600, 200, 1)',
										hoverBorderColor: 'rgba(200, 200, 200, 1)',
										fill : false,
										lineTension : 0,
										pointRadius : 5,
										data: visit_cost
									}

								]
							};

							var options = {
							title : {
								display : true,
								position : "top",
								text : "Sales Chart",
								fontSize : 50,
								fontColor : "#111"
							},
							legend : {
								display : true,
								position : "bottom",
								labels: {
					                // This more specific font property overrides the global property
					                fontSize : 25
					            }
							}
						};

							var ctx = $("#mycanvas");

							var barGraph = new Chart(ctx, {
								type: 'line',
								data: chartdata,
								options: options
							});   

				        }
				    });



			})


</script>
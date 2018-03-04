<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>

<style type="text/css">
			#chart-container {
				width: 80%;
				height: auto;	
			}
</style>

<body>

	<div id="chart-container" style="margin-bottom:130px;">
			<canvas id="mycanvas"></canvas>
	</div>
		<!-- <form method="POST" action="<?php echo base_url('vetclinic/sales');?>" > -->
		<div id="chart-date" class="row salesDate" >
            <div class="col-md-1 col-sm-1"></div>
            <div class="col-md-4 col-sm-4">
				<label>Start date:</label><input type="text" class="form-control" id="startdate" name="startdate" />
            </div>
            <div class="col-md-4 col-sm-4">
				<label>End date:</label><input type="text" class="form-control" id="enddate" name="enddate" />
            </div>
            
            <div class="col-md-2 col-sm-2">
                <br />
                  <button type="reset" class="btn btn-default">Cancel</button>
                  <button type="button" onclick="realTimeSalesChart()" class="btn btn-primary">Save</button>
            </div>
            <div class="col-md-1 col-sm-1"></div>
		</div>

<!--     </form> -->
</body>


<script type="text/javascript">

		$(document).ready(function(){
			
		
		    $( "#startdate").datepicker(
		    	{
		    		dateFormat: 'yy-mm-dd',
		    		beforeShow: function(){
					    $("#startdate").datepicker("option", {
					      maxDate: $("#enddate").datepicker('getDate')
					    });
					  }
		    	}
		    );

		    $("#enddate").datepicker(
		    	{
				  dateFormat: 'yy-mm-dd',
				  beforeShow: function(){
				    $("#enddate").datepicker("option", {
				      minDate: $("#startdate").datepicker('getDate')
				    });
				  }
			});
			
		    realTimeSalesChart();
  		} );

function realTimeSalesChart(){
	$.ajax({
			        type: 'POST',
			        url: 'filter_date',
			        data:{startDate :$("#startdate").val(),endDate:$("#enddate").val()},
				        success: function(data) {
				        	var obj = JSON.parse(data);
				        	console.log(obj);

				        	var date = [];
				        	var total_cost = [];

				        	var visitdate = [];
				        	var visit_cost = [];


				        	/*for(var i in obj.sales2){
				        		date.push("Date " + obj.sales2[i].date);
				        		total_cost.push(obj.sales2[i].total_cost);
				        	}

				        	for(var i in obj.sales1){
				        		visitdate.push("Date " + obj.sales1[i].visitdate);
				        		visit_cost.push(obj.sales1[i].visit_cost);
							}*/
							
							for(var i in obj.dates){
								date.push("Date: " + obj.dates[i]);
								visitdate.push("Date: " + obj.dates[i]);
							}

							for(var n in obj.sales1){
								visit_cost.push(obj.sales1[n]);
								total_cost.push(obj.sales2[n]);
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
								fontSize : 45,
                                fontFamily : "Vollkorn Black",
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
}
</script>	
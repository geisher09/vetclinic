<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<script type="text/javascript" src="<?php echo base_url('bootstrap/js/jquery.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>

	<link href="<?php echo base_url('assets/fullcalendar.min.css'); ?>" rel='stylesheet' />
	<link href="<?php echo base_url('assets/fullcalendar.print.min.css'); ?>" rel='stylesheet' media='print' />
	<link href="<?php echo base_url('assets/jquery-ui.css'); ?>" rel='stylesheet' />
	<script src="<?php echo base_url('assets/moment.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/fullcalendar.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/theme-chooser.js'); ?>"></script>
	
	
	<script>
	 var base_url="<?php echo base_url();?>"
	</script>
	<style>
        body {
            margin: 0;
            padding: 0;
            font-size: 14px;
        }
        #top,
        #calendar.fc-unthemed {
            font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
        }
        #top {
            background: #eee;
            border-bottom: 1px solid #ddd;
            padding: 0 10px;
            line-height: 40px;
            font-size: 12px;
            color: #000;
        }
        #top .selector {
            display: inline-block;
            margin-right: 10px;
        }
        #top select {
            font: inherit; /* mock what Boostrap does, don't compete  */
        }

        .left { float: left }
        .right { float: right }
        .clear { clear: both }

        #calendar {
            margin-top: 50px;
			margin-left: 12%;
			max-width: 1000px;
        }
		
		.btn-default {background-color: #AED6F1; color: #000; border-color: #2980B9;}
		.btn-default:hover {background-color: #D6EAF8; color: #000; border-color: #2980B9;}
		.btn-default:focus {background-color: #D6EAF8; color: #000; border-color: #2980B9;}
		.btn-default.active {background-color: #3498DB; color: white;}
		.btn-default.active:hover {background-color: #3498DB; color: white;}
		.btn-default.active:focus {background-color: #3498DB; color: white;}
		.fc-center {font-size:50px !important; font-family: Arvo; color: #2980B9;}
		.fc-day-header {color:#2980B9; background-color: #F2F4F4;}
		th.fc-week-number {color:#2980B9; background-color: #F2F4F4;}
		.fc-day-top {font-weight: bold;}
		
    </style>
	

	
	
</head>
<body style=""> <!--
	<div id='top'>

		<div class='left'>

			<div id='theme-system-selector' class='selector'>
				Theme System:

				<select>
					<option value='jquery-ui'>jQuery UI</option>
				</select>
			</div>


			<div data-theme-system="jquery-ui" class='selector' style='display:none'>
				Theme Name:

				<select>
					<option value='redmond' selected>Redmond</option>
					<option value='dot-luv'>Dot Luv</option>
					<option value='black-tie'>Black Tie</option>
					<option value='blitzer'>Blitzer</option>
					<option value='cupertino'>Cupertino</option>
					<option value='dark-hive'>Dark Hive</option>
					<option value='eggplant'>Eggplant</option>
					<option value='excite-bike'>Excite Bike</option>
					<option value='flick'>Flick</option>
					<option value='hot-sneaks'>Hot Sneaks</option>
					<option value='humanity'>Humanity</option>
					<option value='le-frog'>Le Frog</option>
					<option value='mint-choc'>Mint Choc</option>
					<option value='overcast'>Overcast</option>
					<option value='pepper-grinder'>Pepper Grinder</option>
					<option value='smoothness'>Smoothness</option>
					<option value='south-street'>South Street</option>
					<option value='start'>Start</option>
					<option value='sunny'>Sunny</option>
					<option value='swanky-purse'>Swanky Purse</option>
					<option value='trontastic'>Trontastic</option>
					<option value='ui-darkness'>UI Darkness</option>
					<option value='ui-lightness'>UI Lightness</option>
					<option value='vader'>Vader</option>
				</select>
			</div>

			<span id='loading' style='display:none'>loading theme...</span>

		</div>

		<div class='clear'></div>
	</div> -->

	<div id='calendar'></div>

	<!-- edit modal -->
	<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
	    	<div class="modal-content">
	      		<div class="modal-header" style="background-color:rgba(128, 191, 255,0.9);">
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        		<h4 class="modal-title text-center" id="myModalLabel" style="font-size:25px; font-weight:bold;">View/Update Calendar Event</h4>
	      		</div>
	      		<div class="modal-body">
	      			<?php echo form_open(site_url("vetclinic/edit_event"), array("class" => "form-horizontal")) ?>
	      			<div class="form-group">
	                	<label for="p-in" class="col-md-4 label-heading">Title</label>
	                	<div class="col-md-8 ui-front">
	                    	<input type="text" class="form-control" name="name" value="" id="name" >
	                	</div>
	        		</div>
	        		<div class="form-group">
	                	<label for="p-in" class="col-md-4 label-heading">Description</label>
	                	<div class="col-md-8 ui-front">
	                    	<input type="text" class="form-control" name="description" id="description">
	                	</div>
	        		</div>
	        		<div class="form-group ">
			                <label for="p-in" class="col-md-4 label-heading">Start Date</label>
			                <div class="col-md-8">
			                    <input type="text " class="form-control" name="start_date" id="start_date" disabled>
			                </div>
			        </div>
			        <div class="form-group">
			                <label for="p-in" class="col-md-4 label-heading">End Date</label>
			                <div class="col-md-8">
			                    <input type="text" class="form-control" name="end_date" id="end_date" disabled>
			                </div>
			        </div>
	        		<div class="form-group">
	                    <label for="p-in" class="col-md-4 label-heading">Delete Event</label>
	                    <div class="col-md-8">
	                        <input type="checkbox" name="delete" value="1">
	                    </div>
	            	</div>
	            	<input type="hidden" name="eventid" id="event_id" value="0" />
	      		</div>
	      		<div class="modal-footer">
	        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        		<input type="submit" class="btn btn-primary" value="Update Event">
	        		<?php echo form_close() ?>
	      		</div>
	    	</div>
	  	</div>
	</div>

	<!-- add event modal -->

	<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
	    	<div class="modal-content">
	      		<div class="modal-header edit" style="background-color:rgba(128, 191, 255,0.9);">
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        		<h3 class="modal-title text-center" id="myModalLabel" style="font-size:25px; font-weight:bold;">ADD EVENT</h3>
	      		</div>
	      		<div class="modal-body">
	      			<?php echo form_open(site_url("vetclinic/add_event"), array("class" => "form-horizontal")) ?>
	      			<div class="form-group">
	                	<label for="p-in" class="col-md-4 label-heading">Event Title:</label>
	                	<div class="col-md-8 ui-front">
	                    	<input type="text" class="form-control" name="name" value="" id="name">
	                	</div>
	        		</div>
	        		<div class="form-group">
	                	<label for="p-in" class="col-md-4 label-heading">Description:</label>
	                	<div class="col-md-8 ui-front">
	                    	<input type="text" class="form-control" name="description" id="description">
	                	</div>
	        		</div>
	            	<input type="hidden" name="eventid" id="event_id" value="0" />
	            	<input type="hidden" name="start" id="start"  />
	            	<input type="hidden" name="end" id="end"  />
	      		</div>
	      		<div class="modal-footer">
	        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        		<input type="submit" class="btn btn-primary" value="Update Event">
	        		<?php echo form_close() ?>
	      		</div>
	    	</div>
	  	</div>
	</div>

<script>

		$(document).ready(function() {

			initThemeChooser({

				init: function(themeSystem) {
					$('#calendar').fullCalendar({
						themeSystem: 'bootstrap3',
						header: {
							left: 'prev,next today',
							center: 'title',
							right: 'month,agendaWeek,agendaDay,listWeek'
						},
						views: {
							listDay: { buttonText: 'list day' },
							listWeek: { buttonText: 'list week' }
						},
						weekNumbers: true,
						navLinks: true, // can click day/week names to navigate views
						editable: true,
						droppable: true,
						eventLimit: true, // allow "more" link when too many events
						eventSources: [
					    {
					        events: function(start, end, timezone, callback) {
					            $.ajax({
					                url: '<?php echo base_url() ?>vetclinic/get_events',
					                dataType: 'json',
					                data: {                
					                    start: start.unix(),
					                    end: end.unix()
					                },
					                success: function(msg) {
					                    var events = msg.events;
					                    callback(events);
					                }
					            });
					       }
					    },
					    ],//end of eventSources
					    eventClick: function(event, jsEvent, view) {
					          $('#name').val(event.title);
					          $('#description').val(event.description);
					          $('#start_date').val(moment(event.start).format('YYYY/MM/DD HH:mm'));
					          if(event.end) {
					            $('#end_date').val(moment(event.end).format('YYYY/MM/DD HH:mm'));
					          } else {
					            $('#end_date').val(moment(event.start).format('YYYY/MM/DD HH:mm'));
					          }
					          $('#event_id').val(event.id);
					          $('#editModal').modal();
					    },
					    dayClick: function(date, jsEvent, view) {
					        var start = date.format();
					        var view = view.name;
					        /*alert(start);*/
					        $('#start').val(start);
					        $('#end').val(start);
					        $('#addModal').modal();

					    },
					    eventResize: function(event, delta, revertFunc) {
							console.log(event);
							var title = event.title;
							var end = event.end.format();
							var start = event.start.format();
					        $.ajax({
								url: '<?php echo base_url() ?>vetclinic/resetdate',
								// data: 'type=resetdate&title='+title+'&start='+start+'&end='+end+'&eventid='+event.id,
								type: 'POST',
								dataType: 'json',
								data:{
									title:title,
									start:start,
									end:end,
									eventid:event.id
								},
								success: function(response){
									if(response.status != 'success')		    				
									revertFunc();
								},
								error: function(e){		    			
									revertFunc();
									alert('Error processing your request: '+e.responseText);
								}
							});
					    },
					    eventDrop: function(event, delta, revertFunc) {
					    	var title = event.title;
					        var start = event.start.format();
					        var end = (event.end == null) ? start : event.end.format();
					        $.ajax({
					        	url: '<?php echo base_url() ?>vetclinic/drop',
					        	type:'POST',
					        	dataType:'json',
					        	data:{
					        		title:title,
					        		start:start,
					        		end:end,
					        		eventid:event.id
					        	},
					        	success: function(response){
									if(response.status != 'success')		    				
									revertFunc();
								},
								error: function(e){		    			
									revertFunc();
									alert('Error processing your request: '+e.responseText);
								}
								        	
					        			
							});//end of ajax in eventDrop


					    },//end of event drop function

					    //event resize

					    

					});//end of calendar
				},//end of init function

				change: function(themeSystem) {
					$('#calendar').fullCalendar('option', 'themeSystem', themeSystem);
				}

			});

		});

	</script>
</body>
</html>



<!-- if(new String(view).valueOf() == new String("month").valueOf()){
					        	$('#start').val(moment(start).format('Y-m-d'));
					        	$('#end').val(moment(start).format('Y-m-d'));
					        	$('#end').attr('type','hidden');
					        	$('label[id="endlabel"]').hide()
					        	$('#start').attr('type','hidden');
					        	$('label[id="startlabel"]').hide();
					        	$(".edit h4").text("Add  an ALL DAY event for "+start);
					        }
					        else{
					        	$('#start').val(moment(start).format('YYYY/MM/DD HH:mm'));
					        	$('#end').val(moment(start).format('YYYY/MM/DD HH:mm'));
					        	$('#end').attr('type','text');
					        	$('label[id="endlabel"]').show();
					        	$('#start').attr('type','text');
					        	$('label[id="startlabel"]').show();
					        	$(".edit h4").text("Add an event for " +date.format("YYYY/MM/DD"));
					        } -->
<html>
<head>
<title><?php echo $title; ?></title>
    
	<meta name="viewport" content="width=device-width; initial-scale=1.0"/>
	<link href="<?php echo base_url('assets/images/logo.png'); ?>" rel="icon" type="image/png"  />
	<link href="<?php echo base_url('assets/css/overallcss.css'); ?>" rel="stylesheet" type="text/css"  />
	<link href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css"  />
	<link href="<?php echo base_url('bootstrap/css/bootstrap-theme.min.css'); ?>" rel="stylesheet" type="text/css"  />
	<link href="<?php echo base_url('bootstrap/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets/css/default.css'); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets/css/calendarview.css'); ?>" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
	<script src="<?php echo base_url("assets/js/jquery-3.2.1.min.js"); ?>"></script>
  	<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
  	<script src="<?php echo base_url("assets/js/canvasjs.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/search.js"); ?>" ></script>

<!--    for calendar widget-->
    <style type="text/css">
        div.calendar {
            max-width: 250px;
            margin-left: auto;
            margin-right: auto;
          }
        div.calendar table {
            width: 100%;
          }
        div.dateField {
            width: 140px;
            padding: 6px;
            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            color: #555;
            background-color: white;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
          }
    </style>
	<script type="text/javascript" src="<?php /*echo base_url("assets/js/prototype.js");*/ ?>" ></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/calendarview.js"); ?>" ></script>
    <script>
          function setupCalendars() {
            // Calendar
            Calendar.setup(
              {
                dateField: 'embeddedDateField',
                parentElement: 'embeddedCalendar'
              }
            )
          }

          Event.observe(window, 'load', function() { setupCalendars() })
    </script>
<!--    end of calendar widget-->
	
</head>
<body>

<div class="container-fluid">
<nav class="navbar">
	<div class="row">
		<ul class="nav navbar-nav" id="menu">
				<li id="title">
					<img src="<?php echo base_url('assets/images/logo.png');?>" alt="Deloso Veterinary Clinic" class="logo" /> </li>
				<li class="search">
					<input type="text" name="q" onkeyup="search()"  id="search"/>
					<button type="submit" class="btn btnmod"><span class="glyphicon glyphicon-search"></span></button>
				</li>
				<li style="float:right;"><a href="<?php echo base_url('vetclinic/services'); ?>"><!--<span class="glyphicon glyphicon-tasks"></span>-->&nbsp;Services</a></li>
				<li style="float:right;"><a href="<?php echo base_url('vetclinic/inventory'); ?>"><!--<span class="glyphicon glyphicon-list-alt"></span>-->&nbsp;Inventory</a></li>
				<li style="float:right;"><a href="<?php echo base_url('vetclinic/sales'); ?>"><!--<span class="glyphicon glyphicon-stats"></span>-->&nbsp;Sales</a></li>
				<li style="float:right;"><a href="<?php echo base_url('vetclinic/sched'); ?>"><!--<span class="glyphicon glyphicon-calendar"></span>-->&nbsp;Schedule</a></li>
				<li style="float:right;"><a href="<?php echo base_url('vetclinic'); ?>"><!--<span class="glyphicon glyphicon-plus-sign"></span>-->&nbsp;Records</a></li>
		</ul>
	</div>
</nav>


<div style="width:20%;height:580px;position:fixed;right:0;padding:10px;background-color:rgba(194,194,194,0.4);">
<!--        calendar widget-->
            <div id="embeddedExample" style="">
              <div id="embeddedCalendar" style="">
              </div>
              <h4>Reminders:</h4>
                <p>'la pang calendar... awww... :'( huhubels...</p>
              <div id="embeddedDateField" class="dateField">
                Select Date
              </div>
              <br />
            </div>
<!--    end of calendar widget-->
</div>
<html>
<head>
<title><?php echo $title; ?></title>
    
	<meta name="viewport" content="width=device-width; initial-scale=1.0"/>
	<link href="<?php echo base_url('assets/images/logo.png'); ?>" rel="icon" type="image/png"  />
	<link href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css"  />
	<link href="<?php echo base_url('bootstrap/css/bootstrap-theme.min.css'); ?>" rel="stylesheet" type="text/css"  />
	<link href="<?php echo base_url('bootstrap/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets/css/overallcss.css'); ?>" rel="stylesheet" type="text/css"  />
	
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
	<script src="<?php echo base_url("assets/js/jquery-3.2.1.min.js"); ?>"></script>
	<script src="<?php echo base_url("assets/js/chart.min.js"); ?>"></script>
  	<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
  	<script src="<?php echo base_url("assets/js/canvasjs.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/myjs.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/search.js"); ?>" ></script>
    <script type="text/javascript">// js for active link
        $(document).ready(function() {
            var url = window.location.protocol + "//" + window.location.host + window.location.pathname;
//            alert(url);
            $('#menu li a[href="'+ url +'"]').addClass('activeLink');
        })
    </script>
	
</head>
<body>

<div class="container-fluid">
<nav class="navbar">
	<div class="row">
		<ul class="nav navbar-nav" id="menu">
				<li> <img src="<?php echo base_url('assets/images/logo.png');?>" alt="Deloso Veterinary Clinic" class="logo" /> </li>
				<li style="float:right;"><a href="<?php echo base_url('vetclinic/services'); ?>">&nbsp;Services</a></li>
				<li style="float:right;" class="dropdown" >
					<a href="#" >Inventory &nbsp;<?=($notif!=0?'<span class="badge" style="background-color: red;">'.$notif.'</span>':'')?></a>
					<ul style="border:0px;" class="dropdown-menu">
						<a href="<?php echo base_url('vetclinic/inventory'); ?>" style="border-top: 0px;"> Stocks &nbsp;<?=($notif!=0?'<span class="badge" style="background-color: red;">'.$notif.'</span>':'')?></a>
						<a href="<?php echo base_url('vetclinic/history'); ?>" style="border-top: 0px;"> History</a>
					</ul>
				</li>
				
				<li style="float:right;"><a href="<?php echo base_url('vetclinic/sales'); ?>">&nbsp;Sales</a></li>
				<li style="float:right;"><a href="<?php echo base_url('vetclinic/sched'); ?>">&nbsp;Schedule</a></li>
				<li style="float:right;"><a href="<?php echo base_url('vetclinic'); ?>">&nbsp;Records</a></li>
				<li style="float:right;" class="search">
					<input type="text" name="q" onkeyup="search()"  id="search"/>
					<button type="submit" class="btn btnmod"><span class="glyphicon glyphicon-search"></span></button>
				</li>
		</ul>
	</div>
</nav>

<div class="reminder"><!--REMINDER DIV-->
    <?php 
        date_default_timezone_set('Asia/Manila');
        $date=date('M. d, Y');
        $time=date('h:i a');
    ?>
    <div class="reminderdatetime">
            <!--<p><?php /*echo $time;*/ ?></p>-->
            <p><?php echo $date; ?></p>
    </div>
    <h4>Reminders:&nbsp;<span class="badge">3</span></h4>
        <div class="event">
            <span><?php echo $date; ?> 01:01:01</span><!--time and date-->
            <p>Event 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p><!--event-->
        </div>
        <div class="event">
            <span><?php echo $date; ?> 01:01:01</span><!--time and date-->
            <p>Event 2 Cras viverra lorem eget le egestas, ut venenatis lectus dignissim. Aenean eget blandit dui, et pretium est</p><!--event-->
        </div>
        <div class="event">
            <span><?php echo $date; ?> 01:01:01</span><!--time and date-->
            <p>Event 3 whatever</p><!--event-->
        </div>
</div><!--END OF REMINDER DIV-->
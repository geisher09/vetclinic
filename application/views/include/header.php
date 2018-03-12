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
<!--    <script type="text/javascript">
        $(document).ready(function() {
            var url = window.location.protocol + "//" + window.location.host + window.location.pathname;
            $('#menu li a[href="'+ url +'"]').addClass('active');
        })
    </script>-->
	
</head>
<body>

<div class="container-fluid">
<nav class="navbar">
	<div class="row">
		<ul class="nav navbar-nav" id="menu">
				<li> <img src="<?php echo base_url('assets/images/logo.png');?>" alt="Deloso Veterinary Clinic" class="logo" /> </li>
            <li style="float:right;"><a href="<?php echo base_url('vetclinic/services'); ?>"  class="<?=$title=='Services Offered'?'activeLink':''?>">&nbsp;<span class="<?=$title=='Services Offered'?'active':''?>">Services</span></a></li>
				<li style="float:right;" class="dropdown" >
                    <a href="#" id="invent" data-toggle="dropdown" class="<?=$title=='Inventory'?'activeLink':''?>" ><span class="<?=$title=='Inventory'?'active':''?>">Inventory </span>&nbsp;</a>
					<ul style="border:0px;" class="dropdown-menu nd">
						<a href="<?php echo base_url('vetclinic/inventory'); ?>" style="border-top: 0px;"><span class="glyphicon glyphicon-list-alt"></span>&nbsp; Stocks &nbsp;</a>
						<a href="<?php echo base_url('vetclinic/history'); ?>" style="border-top: 0px;"><span class="glyphicon glyphicon-hourglass"></span>&nbsp; History</a>
					</ul>
				</li>
				
            <li style="float:right;"><a  href="<?php echo base_url('vetclinic/sales'); ?>" class="<?=$title=='Sales'?'activeLink':''?>" >&nbsp;<span class="<?=$title=='Sales'?'active':''?>">Sales</span></a></li>
				<li style="float:right;"><a href="<?php echo base_url('vetclinic/sched'); ?>" class="<?=$title=='Schedule'?'activeLink':''?>">&nbsp;<span class="<?=$title=='Schedule'?'active':''?>">Schedule</span></a></li>
				<li style="float:right;"><a  href="<?php echo base_url('vetclinic'); ?>" class="<?=$title=='Records'?'activeLink':''?>">&nbsp;<span class="<?=$title=='Records'?'active':''?>">Records</span></a></li>
				<li style="float:right;" class="dropdown"  >
					<a href="" class="dropdown-toggle" id="bellBut" >
						<i class="glyphicon glyphicon-bell"  style="margin-top:5px;"> </i> 
						
						<?=($notif!=0?'<span class="badge1" data-badge="'.$notif.'" style="background-color: red;"></span>':'')?>
						
						
						<ul style="border:0px;" class="dropdown-menu md">
							
								<?php
								if($notif!=0){
									if(isset($events)){
										$i=1;
										foreach($events as $e){
											echo '	
													<a href="/veterinary/vetclinic/sched">
													Event no.'.$i.': '.$e['title'].', Desc:'.$e['description'].'
													</a>
												';
											$i++;
										}
									}

									if(isset($items)){
										foreach($items as $item){
											echo '	
													<a href="/veterinary/vetclinic/inventory" >
													Item #'.$item['itemid'].': '.$item['item_desc'].' has 0 quantity left!
													</a>
												';

										}
									}
								}


									else {





											echo	'<a href="" id="nolink">No new notification</a>


											';
									}

								?>						
					</a>
					</ul>
				</li>
				<?=$title!='Records'?'':'<li style="float:right;" class="search">
					<input type="text" name="q" onkeyup="search()"  id="search"/>
					<button type="submit" class="btn btnmod"><span class="glyphicon glyphicon-search"></span></button>
				</li>'?>
		</ul>
	</div>
</nav>
<script type="text/javascript">

		$(document).ready(function(){
			
			$("#bellBut").click(function(e){
				e.preventDefault();
				$(".md").toggleClass("bellShow");
				$(".nonotif").toggleClass("nonotifShow");
			});
			
			$("#invent").click(function(e){
				e.preventDefault();
				$(".nd").toggleClass("bellShow");
			});
			$("#nolink").click(function(e){
						e.preventDefault();
		


			});


		});

</script>
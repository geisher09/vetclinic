<!-- 
PS: ginawa ko munang comment to kasi nakakaapekto sa calendar... ewan ko kung bakit. ayusin na lang minsan. -carlo

<style type="text/css">
    .beta thead, .beta tbody, .beta tr, .beta td, .beta th { display: block; }

    .beta tr:after {
        content: ' ';
        display: block;
        visibility: hidden;
        clear: both;
    }

    .beta thead th {
        height: 30px;
        /*text-align: left;*/
    }

    .beta tbody {
        height: 1000px;
    /*    width: 1068px;*/
        overflow-y: hidden;
    }

    .beta thead {
        /* fallback */
    }


    .beta tbody td, thead th {
        width: 25%;
        float: left;
    }
</style> -->
<style>
	#mytable thead th {
		width:10%;
	}
	#mytable tbody td {
		width:10%;
	}
</style>
<div id="container">

	<div  style="overflow-x:hidden;" class="table-responsive">
		<table class=" beta table-list-search" id="mytable">
			<thead>
				<tr class="th1">
					<th style="font-size: 23px; padding-top: 15px; padding-bottom: 15px;">SALES</th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
				<tr class="th2">
					<th>Service Type</th>
					<th>Description</th>
					<th>Cost</th>
					<th style="text-align:center;">Date & Time</th>
				</tr>
			</thead>
			<tbody>
							<?php if(count($sal) > 0){ ?>
							<?php foreach ($sal as $sale){ ?>
								<tr>
									<td><?php echo $sale['case_type']; ?></td>
									<td><?php echo $sale['desc']; ?></td>
									<td><?php echo $sale['visit_cost'];?></td>
									<td style="text-align:center;"><?php echo $sale['visitdate']; ?></td>
<!--
									<td style="text-align:center;">				
									</td>
-->
								</tr>
							<?php } ?>
							<?php } ?>

							<?php if(count($sal2) > 0){ ?>
							<?php foreach ($sal2 as $sale){ ?>
									<tr>
									<td><?php echo $sale['action']; ?></td>
									<td><?php echo $sale['item_desc']; ?></td>
									<td><?php echo $sale['total_cost'];?></td>
									<td style="text-align:center;"><?php echo $sale['date']; ?></td>
<!--
									<td style="text-align:center;">				
									</td>
-->
								</tr>
							<?php } ?>
							<?php } ?>  
							
			</tbody>
		</table>
	</div>
</div>
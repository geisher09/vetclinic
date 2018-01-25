<div id="container">

	<div  style="float:right;">
		<div style="height: 600px; width: 1000px; overflow: auto">
		<h1 style="text-align:center; font-size:70px;">Sales:</h1>
		<table class="beta table-list-search" id="mytable">
			<thead>
				<tr>
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
									<td style="text-align:center;">				
									</td>
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
									<td style="text-align:center;">				
									</td>
								</tr>
							<?php } ?>
							<?php } ?>  
							

				
			</tbody>
		</table>
		</div>
	</div>
</div>
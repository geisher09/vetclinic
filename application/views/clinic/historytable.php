<div id="container">
		
	
				<div  style="float:right;">
	<button type="button" class="btn btn-success btn-md" id="addbtn"  data-toggle="modal" data-target="#myModalHistory">
	<span class="glyphicon glyphicon-plus"></span> Update History</button>
</div>
<h2>History</h2>
				
<div style="height: 250px; width: 1055px; overflow: auto">
<table class="table" id="mytable">
	<thead>
		<tr>
			<th>Item ID.</th>
			<th>Quantity Used</th>
			<th>Date Used</th>
			<th style="text-align:center;">Action</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
						foreach($history as $r){
							echo '	<tr>	
									<td>'.$r['itemid'].'</td>
									<td>'.$r['date_used'].'</td>
									<td>'.$r['qty_used'].'</td>
									<td>'.$r['total_cost'].'</td>
						</tr>
						';
				}
				?>
	</tbody>
	</div>
</table>
	</div>
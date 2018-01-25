<div id="container">

<div  style="float:right;">
	<button type="button" class="btn btn-success btn-md" id="addbtn"  data-toggle="modal" data-target="#myModalNorm">
	<span class="glyphicon glyphicon-plus"></span> Add Item</button>
</div>
<h2>Stock</h2>
<div style="height: 500px; width: 1055px; overflow: auto">
<table class="table" id="mytable">
	<thead>
		<tr>
			<th style="text-align:center;">Item ID.</th>
			<th style="text-align:center;">Description</th>
			<th style="text-align:center;">Price</th>
			<th style="text-align:center;" >Stocks Left</th>
			<th style="text-align:center; width:0.5px;">Add Stock</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
						foreach($stock as $s){
							echo '	<tr>	
									<td style="text-align:center;">'.$s['itemid'].'</td>
									<td style="text-align:center;">'.$s['item_desc'].'</td>
									<td style="text-align:center;">'.$s['item_cost'].'</td>
									<td style="text-align:center; ">'.$s['qty_left'].'</td>
								<td style="text-align:center; width:0.5px;">
								<form method="POST" action= "">
									<input type="number" class="form-control" id="add_stock" name="add_stock"/>
									<input type="hidden" class="form-control" id="itemid" name="itemid" value="'.$s['itemid'].'"/>
									<button name="addstock" type="submit" class="btn btn-primary">Add Stock</button>
									</form>
									
							</td>
						</tr>
						';
				}
				?>
	</tbody>
	</div>
</table>
</div>

<!-- Add Product Modal + Add Stock Modal & Update History + View Full History Moda -->
	
		
	
	<div  style="float:right;">
	<button type="button" class="btn btn-warning btn-md" id="addbtn"  data-toggle="modal" data-target="#myModalHistory">
	<span class="glyphicon glyphicon-plus"></span>Sold an Item</button>
	</div>
<h2>HISTORY</h2>
				
<div style=" height: 500px; width: 1055px; overflow: auto">
<table class="table" id="mytable">
	<thead>
		<tr>
			<th>Item ID.</th>
			<th>Action</th>
			<th style="text-align:center;" >Description</th>
			<th style="text-align:center;"  >Date</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
						foreach($itemhistory as $r){
							echo '	<tr>	
									<td style="text-align:center;">'.$r['itemid'].'</td>
									<td>'.$r['action'].'</td>
									<td>'.$r['description'].'</td>
									<td style="text-align:center;">'.$r['date'].'</td>
						</tr>
						';
				}
				?>
	</tbody>
	</table>
</div>



<?php
	include "addstockmodal.php";
	include "updatehistory.php";
	
?>
<script type="text/javascript">
	function stock(addstock){
		$(document).ready(function() {
			var val=$('#add_stock').val();
			 alert(val);
			alert(addstock);
		
		});
	}
</script>
		


		
	
	
	
	
	


	 
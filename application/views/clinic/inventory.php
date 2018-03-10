<div id="container" >

<!--<div style="width:100%; overflow:hidden;">-->
<!--div for stocks-->
<!--<div style="float:right; margin-top:20px;">
	<button type="button" class="btn btn-success btn-md" id="addbtn"  data-toggle="modal" data-target="#myModalNorm">
	<span class="glyphicon glyphicon-plus"></span> Add an Item</button>
</div> -->

<table class="table" id="mytable" style="width:90%; margin-left:5%;">
	<thead>
		<tr class="th1">
                <th colspan="3">AVAILABLE STOCKS</th>
                <th></th>
                <th >
                    <div>
                        <button type="button" class="btn btn-md" id="addbutn"  data-toggle="modal" data-target="#myModalNorm">
                            <span class="glyphicon glyphicon-plus">
                            <span class="tooltiptext">Add an item</span>
                            </span>
                        </button>
                    </div> 
                </th>
        </tr>
		<tr class="th2">
			<th style="text-align:center;width:100px;">Item ID.</th>
			<th style="text-align:center;">Description</th>
			<th style="text-align:center;">Price</th>
			<th style="text-align:center;" >Stocks Left</th>
			<th style="text-align:center;">Add Stock</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
						foreach($stock as $s){
							echo '<tr  style="height:20px;padding:-10px;" class="'.($s['qty_left']==0?'redrow':'').'">	
									<td style="text-align:center;width:100px;">'.$s['itemid'].'</td>
									<td style="text-align:center;"  >'.$s['item_desc'].'</td>
									<td style="text-align:center;">'.$s['item_cost'].'</td>
									<td style="text-align:center; ">'.$s['qty_left'].'</td>
								<td style="width:200px;">
								<form method="POST" action="">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="number" class="form-control minqty " id="add_stock" name="add_stock" min="1"/>
                                            <input type="hidden" class="form-control" id="itemid" name="itemid" value="'.$s['itemid'].'"/>
                                        </div>
                                        <div class="class="col-sm-6">
                                            <button name="addstock" type="submit" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span>&nbsp;Add</button>
                                        </div>
                                    </div>
								</form>
							</td>
						</tr>
						';
				}
				?>
	</tbody>
</table>
<!--</div>--><!--end of div for stocks-->


<!-- Add Product Modal + Add Stock Modal & Update History + View Full History Moda -->
	
<!--<div style="width:100%; overflow:hidden;">-->
<!--div for transactions-->
<!--<div  style="float:right;margin-top:20px;">
    <button type="button" class="btn btn-warning btn-md" id="addbtn"  data-toggle="modal" data-target="#myModalHistory">
    <span class="glyphicon glyphicon-plus"></span>&nbsp;Sell an Item</button>
</div> -->
    <table class="table" id="mytable" style="width:90%; margin-left:5%;">
        <thead>
			<tr class="th1">
                <th colspan="3">TRANSACTIONS</th>
                <th >
                    <div>
                        <button type="button" class="btn btn-md" id="addbutn"  data-toggle="modal" data-target="#myModalHistory">
                            <span class="glyphicon glyphicon-plus">
                            <span class="tooltiptext">Sold an item</span>
                            </span>
                        </button>
                    </div> 
                </th>
            </tr>
            <tr class="th2">
                <th style="width:100px;">Item ID.</th>
                <th  >Action</th>
                <th >Description</th>
                <th  >Date</th>
            </tr>
        </thead>

        <tbody>

            <?php
                            foreach($itemhistory as $r){
                                echo '	<tr>	
                                        <td style="text-align:center;">'.$r['itemid'].'</td>
                                        <td style="text-align:left;">'.$r['action'].'</td>
                                        <td style="text-align:left;">'.$r['description'].'</td>
                                        <td style="text-align:left;">'.$r['date'].'</td>
                            </tr>
                            ';
                    }
                    ?>
        </tbody>
    </table>
<!--</div>--><!--end of div for transactions-->


</div>
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
	
	
	
	


	 
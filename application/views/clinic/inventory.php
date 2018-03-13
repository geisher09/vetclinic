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
                <th colspan="5">AVAILABLE STOCKS</th>
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
			<th style="text-align:center;width:100px;">#</th>
			<th style="text-align:center;">Description</th>
			<th style="text-align:center;">Price</th>
			<th style="text-align:center;" >Stocks Left</th>
			<th style="text-align:center;" colspan="3">Action </th>
		</tr>
	</thead>
	<tbody>
		
		<?php
            $i=1;
						foreach($stock as $s){
                      
							echo '<tr  style="height:20px;padding:-10px;" class="'.($s['qty_left']==0?'redrow':'').'">	
									<td style="text-align:center;width:100px;">'.$i.'</td>
									<td style="text-align:center;"  >'.$s['item_desc'].'</td>
									<td style="text-align:center;">'.$s['item_cost'].'</td>
									<td style="text-align:center; ">'.$s['qty_left'].'</td>
								<td style="width:200px;">
								<form method="POST" action="">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="number" class="form-control minqty" id="add_stock" name="add_stock" min="1"/>
                                            <input type="hidden" class="form-control" id="itemid" name="itemid" value="'.$s['itemid'].'"/>
                                        </div>
                                        <div class="class="col-sm-6">
                                            <button name="addstock" type="submit" class="btn btn-info" style="font-weight:300;font-size:15px;"><span class="glyphicon glyphicon-plus"></span>&nbsp;Add</button>
										</div>
                                    </div>
								</form>
							</td>
                                
								<td >
                              <div class="row">
                                 <div class="class="col-sm-6">
                                     <button type="button" data-toggle="modal" id="'.$s['itemid'].'" data-target="#editStock" onclick="populate(this.id)" class="btn btn-success" style="font-weight:300;font-size:15px;"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Edit</button>
                                  </div>
                              </div>
                            </td>
							
							<td>
									<form method="GET" action="">
										<div class="row">
                                        
											<div>
												<a href="'.base_url('vetclinic/delete').'?itemid='.$s['itemid'].'" name="addstock" type="submit" class="btn btn-danger" style="font-weight:300;font-size:15px;"><span class="glyphicon glyphicon-trash"></span>&nbsp;Delete</a>
                                            </div>
										</div>
									</form>
								</td>
						</tr>
						';
			 $i++;
                }
				?>
	</tbody>
</table>
<!--</div>--><!--end of div for stocks-->


</div>
<?php
	include "addstockmodal.php";

	
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
	
	
	
	


	 
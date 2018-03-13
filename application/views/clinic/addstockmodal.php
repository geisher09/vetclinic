<!-- Modal -->

<div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->

            <div class="modal-header" style="background-color:rgba(128, 191, 255,0.9);">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title text-center" id="myModalLabel" style="font-size:25px; font-weight:bold;">
                    ADD AN ITEM
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
            <?php echo form_open("vetclinic/inventory/",['id'=>'addInventory']) ?>
            <form action="" method="POST">
				  <div class="form-group" >
                    <div id="descerror">
					<label for="item_desc">Description:</label>
					<input type="text" class="form-control" id="item_desc" name="item_desc" />
                    <p id="descerror1" class="valerror"></p>
				    </div>
                    <div id="costerror">
					<label for="item_cost">Price:</label>
					<input type="number" step=0.01 class="form-control globalDisable" id="item_cost" name="item_cost" />
                      <p id="costerror1" class="valerror"></p>
				    </div>
				    <div id="qtyerror">
					<label for="qty_left">Quantity:</label>
					<input type="number" class="form-control globalDisable" id="qty_left" class="globalDisable" name="qty_left" />
                    <p id="qtyerror1" class="valerror"></p>
                     </div>
		  
               </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button name="additem" id="sbmtItem" value="" type="submit" class="btn btn-primary">Add Product</button>
      
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>

		</div>
		</div>
		
		<div class="modal fade" id="AddStock" tabindex="-1" role="dialog" 
     aria-labelledby="myAddStock" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-sm">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Add Stock
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
				
                <form role="form">
                  <div class="form-group">
                    <label for="qty">Quantity</label>
                      <input type="number" class="form-control" id="qty" name="qty" placeholder= "" />
					  <input type="hidden" name="id" value= "" /> 
                  </div>
                </form>
                
                
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                
                <button type="submit" class="btn btn-primary">
						Update
					</button>
				
				<button type="button" class="btn btn-default"
                        data-dismiss="modal">
                            Cancel
                </button>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->

<div class="modal fade" id="editStock" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->

            <div class="modal-header" style="background-color:rgba(128, 191, 255,0.9);">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title text-center" id="myModalLabel" style="font-size:25px; font-weight:bold;">
                    Update Item
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
            <?php echo form_open("vetclinic/updateItem/",['id'=>'editItem']) ?>
            <form action="" method="POST">
          <div class="form-group" >
                    <div id="descerror">
          <label for="item_desc">Description:</label>
          <input type="text" class="form-control" id="update_desc" name="update_desc" />
                    <p id="descerror1" class="valerror"></p>
            </div>
                    <div id="costerror">
          <label for="item_cost">Price:</label>
          <input type="number" step=0.01 class="form-control globalDisable" id="update_cost" name="update_cost" />
                      <p id="costerror1" class="valerror"></p>
            </div>
          
               <input type="hidden" name="updateid" id="updateid" value= "" /> 
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button name="additem" id="sbmtItem" value="" type="submit" class="btn btn-primary">Add Product</button>
      
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>

    </div>
    </div>
    
    <div class="modal fade" id="AddStock" tabindex="-1" role="dialog" 
     aria-labelledby="myAddStock" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-sm">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Add Stock
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
        
                <form role="form">
                  <div class="form-group">
                    <label for="qty">Quantity</label>
                      <input type="number" class="form-control" id="qty" name="qty" placeholder= "" />
            <input type="hidden" name="id" value= "" /> 
                  </div>
                </form>
                
                
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                
                <button type="submit" class="btn btn-primary">
            Update
          </button>
        
        <button type="button" class="btn btn-default"
                        data-dismiss="modal">
                            Cancel
                </button>
            </div>
        </div>
    </div>
</div>

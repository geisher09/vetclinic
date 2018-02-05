<!-- Modal -->
<div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    ADD AN ITEM
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
            <?php echo form_open(site_url("vetclinic/inventory/")) ?>
            <form action="" method="POST">
				  <div class="form-group">
					<label for="item_desc">Description:</label>
					<input type="text" class="form-control" id="item_desc" name="item_desc" />
				
					<label for="item_cost">Price:</label>
					<input type="number" step=0.01 class="form-control" id="item_cost" name="item_cost" />
				
				
					<label for="qty_left">Quantity:</label>
					<input type="number" class="form-control" id="qty_left" name="qty_left" />
                    
				</div>
               </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button name="additem" type="submit" class="btn btn-primary">Add Product</button>
                </form>
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
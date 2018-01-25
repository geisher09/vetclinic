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
				 <?php echo form_open(site_url("vetclinic/inventory/")) ?>
            <form action="" method="POST">
                  <div class="form-group">
                    <label for="qty">Quantity</label>
                      <input type="number" class="form-control" id="qty" name="qty" />
					  <input type="hidden" name="itemid" id="itemid" value= "1" /> 
                  </div>    
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                
                <button name="addstock" type="submit" class="btn btn-primary">
						Update
					</button>
				<button type="button" class="btn btn-default"
                        data-dismiss="modal">
                            Cancel
                </button></form><?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>
<!-- Update History Modal -->
			<div class="modal fade" id="myModalHistory" tabindex="-1" role="dialog" 
				 aria-labelledby="LabelHistory" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<!-- Modal Header -->
						<div class="modal-header">
							<button type="button" class="close" 
							   data-dismiss="modal">
								   <span aria-hidden="true">&times;</span>
								   <span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title" id="LabelHistory">
							   UPDATE ITEM USAGE
							</h4>
						</div>
				
            <!-- Modal Body -->
            <div class="modal-body">
                 <?php echo form_open(site_url("vetclinic/inventory/")) ?>
            	<form action="" method="POST"><div class="form-group">
										<label>Item</label>
										<select class="form-control" id="itemid" name="itemid">
											<?php
											foreach($stock as $s){
												echo '<option value="'.$s['itemid'].'">'.$s['itemid'].'-'.$s['item_desc'].'</option>';
											}
											?>
										</select>
                    <label for="qty_used">Quantity</label>
                      <input type="number" class="form-control" id="qty_used" name="qty_used" placeholder="Quantity"/>
               
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">
                            Cancel
                </button>
                <button type="submit" class="btn btn-primary" name="itemuse">
                    Update
                </button>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>
		
	
	
	

	
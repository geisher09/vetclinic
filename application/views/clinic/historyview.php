
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
                                echo '  <tr>    
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
    <!-- Update History Modal -->
            <div class="modal fade" id="myModalHistory" tabindex="-1" role="dialog" 
                 aria-labelledby="LabelHistory" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header" style="background-color:rgba(128, 191, 255,0.9);">
                            <button type="button" class="close" 
                               data-dismiss="modal">
                                   <span aria-hidden="true">&times;</span>
                                   <span class="sr-only">Close</span>
                            </button>
                            <h4 class="modal-title text-center" id="LabelHistory" style="font-size:25px; font-weight:bold;">
                               UPDATE ITEM USAGE
                            </h4>
                        </div>
                
            <!-- Modal Body -->
            <div class="modal-body">
                 <?php echo form_open(site_url("vetclinic/history/")) ?>
                <form action="" method="POST"><div class="form-group">
                    <span  id="ins" class="valerror"></span>
                                        <label>Item</label>
                                        <select class="form-control" id="itemid" name="itemid">
                                            <?php
                                            foreach($stock as $s){
                                                echo '<option value="'.$s['itemid'].'">'.$s['itemid'].'-'.$s['item_desc'].'</option>';
                                            }
                                            ?>
                                        </select> <br />
                    <label for="qty_used">Quantity</label>
                      <input type="number" class="form-control globalDisable" id="qty_used" name="qty_used" placeholder="Quantity"/>

               
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">
                            Cancel
                </button>
                <button type="submit" id="sbmtMyItem" class="btn btn-primary" name="itemuse" onclick="">
                    Update
                </button>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>
        
    <script>
function myFunction() {
    location.reload();
    alert('hi');
}
</script>
    
    

    
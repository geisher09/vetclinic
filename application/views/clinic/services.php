<div id="container">
<br/>
	<div class="container-fluid box">
	
		<div id="servtitle"> Services Offered</div>
        <div id="addserv">
            <button type="button" class="btn btn-md" data-toggle="modal" data-target="#addservicemodal">
			<span class="glyphicon glyphicon-plus"></span> Add Service</button>
        </div>
<!--
<table class="table" id="mytable">
	<thead>
		<tr>
			<th>Service ID</th>
			<th>Description</th>
			<th style="text-align:center;">Action</th>
		</tr>
	</thead>
	<tbody> 
		<tr> 
			<td style="width:400px;"><b>Grooming Services</b></td>
			<td></td><td></td><td></td>
		</tr>-->
			<?php 
			foreach($grooming as $s){
				echo '
				<div class="col-lg-3 col-md-3 col-sm-3 boxed">
					<ul> Grooming </ul> <hr />
					<li> '.$s['desc'].' </li>
					<li> '.$s['id'].' </li> <hr />
					<li> <p>
						<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#updateservicemodal" onclick="data('.$s['id'].')">Edit</button>
						<a href="'.base_url('vetclinic/services/?id='.$s['id']).'" role="button" class="btn btn-danger btn-md" >Delete</a></p>
					</li>
				</div>
				
				
				 ';}
			?>
		<!--<tr>
			<td><b>Treatment Services</b></td>
			<td></td><td></td><td></td>
		</tr> -->
				<?php 
			foreach($treatment as $s){
				echo '
				<div class="col-lg-3 col-md-3 col-sm-3 boxed2">
					<ul> Treatment </ul> <hr>
					<li> '.$s['desc'].' </li>
					<li> '.$s['id'].' </li> <hr>
					<li> <p>
						<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#updateservicemodal" onclick="data('.$s['id'].')">Edit</button>
						<a href="'.base_url('vetclinic/services/?id='.$s['id']).'" role="button" class="btn btn-danger btn-md" >Delete</a></p>
					</li>
				</div>
				 ';}
			?>
		
		</div>
<!--
	</tbody>
</table>-->

	<!--  Add Service Modal -->
	  <div class="modal fade" id="addservicemodal" role="dialog">
		<div class="modal-dialog modal-lg">
		
		  <!-- Modal content -->
		  <div class="modal-content" id="registermodal">
			<div class="modal-header" style="background-color:rgba(128, 191, 255,0.9);">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h3 class="modal-title text-center" style="font-size:25px; font-weight:bold;">ADD SERVICE</h3>
			</div>
			<div class="modal-body" style="padding:10px;padding-top:0px;">
					<br/>
				  <form class="form-horizontal" action="" method="post">
					
					<br />
					<div class="row form-group">
                        <div class="col-sm-1 col-md-1"></div>
					  <label class=" col-sm-2 col-md-2 " for="desc">Description:</label>
					  <div class="col-sm-8 col-md-8">
						<input type="text" class="form-control" id="desc"  name="desc">
					  </div>
                        <div class="col-sm-1 col-md-1"></div>
					</div>
					<div class="row form-group">
                        <div class="col-sm-1 col-md-1"></div>
					  <label class=" col-sm-3 col-md-3" for="serv_type">Type of Service:</label>
					  <div class="col-sm-7 col-md-7">          
							<select class="form-control" id="serv_type" name="serv_type">
								<option >Grooming</option>
								<option >Treatment</option>							
							</select>
					  </div>
                        <div class="col-sm-1 col-md-1"></div>
					</div>
					<br/>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			  <button type="submit" class="btn btn-primary" name="add">Save</button>
				  </form>
			</div>
		  </div>
		  
		</div>
	  </div><!-- End of Add Service Modal
	  
	  
	  	<!-- Update Service Modal -->
	  <div class="modal fade" id="updateservicemodal" role="dialog">
		<div class="modal-dialog modal-lg">
		
		  <!-- Modal content-->
		  <div class="modal-content" id="registermodal">
			<div class="modal-header" style="background-color:rgba(128, 191, 255,0.9);">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h3 class="modal-title text-center" style="font-size:25px; font-weight:bold;">UPDATE SERVICE</h3>
			</div>
			<div class="modal-body" style="padding:50px;padding-top:0px;">
					<br/>
					<br/>
				  <form class="form-horizontal" action="" method="post">
					<div class="row form-group">
                        <div class="col-sm-1 col-md-1"></div>
					  <label class=" col-sm-2 col-md-2" >Service ID:</label>
					  <div class="col-sm-8 col-md-8">
						<input type="text" class="form-control" id="serviceid"  name="serviceid" value="" readonly="readonly" >
					  </div>
                        <div class="col-sm-1 col-md-1"></div>
					</div>
					<br />
					<div class="form-group">
                        <div class="col-sm-1"></div>
					  <label class=" col-sm-2" for="desc">Description:</label>
					  <div class="col-sm-8">
						<input type="text" class="form-control" id="desc"  name="desc">
					  </div>
                        <div class="col-sm-1"></div>
					</div>

					<div class="form-group">
                        <div class="col-sm-1 col-md-1"></div>
					  <label class=" col-sm-3 col-md-3" for="serv_type">Type of Service:</label>
					  <div class="col-sm-7 col-md-7">          
							<select class="form-control" id="serv_type" name="serv_type">
								<option >Grooming</option>
								<option >Treatment</option>
							</select>
					  </div>
                        <div class="col-sm-1 col-md-1"></div>
					</div>

			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  <button type="submit" class="btn btn-primary" name="update">Save</button>
				  </form>
			</div>
		  </div>
		  
		</div>
	  </div><!-- End of Update Service Modal -->


</div>

<script type="text/javascript">
	function data(dataid){
		$(document).ready(function() {
			$('#serviceid').val(dataid);
		});
	}
</script>
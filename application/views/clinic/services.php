<div id="container">

	<div  style="float:right;">
		<button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#addservicemodal">
	<span class="glyphicon glyphicon-plus"></span> Add service</button>
	</div>
	<h2>Services offered:</h2>
<table class="table" id="mytable">
	<thead>
		<tr>
			<th>Service ID</th>
			<th>Description</th>
			<th style="text-align:center;">Action</th>
		</tr>
	</thead>
	<tbody> <!-- -  hey! suggest ko sana na hati yung services by classifications tulad nung nasa picture na kuha dun sa clinic, suggestion lang... :D --->
		<tr> 
			<td style="width:400px;"><b>Grooming Services</b></td>  <!-- classification ng service, dummy data lang ung nasa baba  -->
			<td></td><td></td><td></td>
		</tr>
			<?php 
			foreach($grooming as $s){
				echo '
				<tr>
					<td>'.$s['id'].'</td>
					<td>'.$s['desc'].'</td>
					<td style="text-align:center;"><p>
						<button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#updateservicemodal" onclick="data('.$s['id'].')">Edit</button>
						<a href="'.base_url('vetclinic/services/?id='.$s['id']).'" role="button" class="btn btn-danger btn-md" >Delete</a></p>
					</td>
				</tr> ';}
			?>
		<tr>
			<td><b>Treatment Services</b></td> <!--  classification ng service, dummy data lang ung nasa baba -->
			<td></td><td></td><td></td>
		</tr> 
				<?php 
			foreach($treatment as $s){
				echo '
				<tr>
					<td>'.$s['id'].'</td>
					<td>'.$s['desc'].'</td>
					<td style="text-align:center;"><p>
						<button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#updateservicemodal" onclick="data('.$s['id'].')">Edit</button>
						<button type="submit" class="btn btn-danger btn-md" )">Delete</button></p>
					</td>
				</tr> ';}
			?>
		
	</tbody>
</table>

	<!--  Add Service Modal -->
	  <div class="modal fade" id="addservicemodal" role="dialog">
		<div class="modal-dialog modal-lg">
		
		  <!-- Modal content -->
		  <div class="modal-content" id="registermodal">
			<div class="modal-header" style="background-color:rgba(128, 191, 255,0.9);">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h2 class="modal-title">Add Service</h2>
			</div>
			<div class="modal-body" style="padding:50px;padding-top:0px;">
					<br/>
					<br/>
				  <form class="form-horizontal" action="" method="post">
					
					<br />
					<div class="form-group">
					  <label class=" col-sm-3" for="desc">Description:</label>
					  <div class="col-sm-8">
						<input type="text" class="form-control" id="desc"  name="desc">
					  </div>
					</div>
					<div class="form-group">
					  <label class=" col-sm-3" for="serv_type">Type of Service:</label>
					  <div class="col-sm-8">          
							<select class="form-control" id="serv_type" name="serv_type">
								<option >Grooming</option>
								<option >Treatment</option>							
							</select>
					  </div>
					</div>
					
			</div>
			<div class="modal-footer">
			  <button type="submit" class="btn btn-default" name="add">Save</button>
				  </form>
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
			  <h2 class="modal-title">Update Service</h2>
			</div>
			<div class="modal-body" style="padding:50px;padding-top:0px;">
					<br/>
					<br/>
				  <form class="form-horizontal" action="" method="post">
					<div class="form-group">
					  <label class=" col-sm-3" >Service ID:</label>
					  <div class="col-sm-8">
						<input type="text" class="form-control" id="serviceid"  name="serviceid" value="" readonly="readonly" >
					  </div>
					</div>
					<br />
					<div class="form-group">
					  <label class=" col-sm-3" for="desc">Description:</label>
					  <div class="col-sm-8">
						<input type="text" class="form-control" id="desc"  name="desc">
					  </div>
					</div>
					<div class="form-group">
					  <label class=" col-sm-3" for="serv_type">Type of Service:</label>
					  <div class="col-sm-8">          
							<select class="form-control" id="serv_type" name="serv_type">
								<option >Grooming</option>
								<option >Treatment</option>
							</select>
					  </div>
					</div>
					
			</div>
			<div class="modal-footer">
			  <button type="submit" class="btn btn-default" name="update">Save</button>
				  </form>
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
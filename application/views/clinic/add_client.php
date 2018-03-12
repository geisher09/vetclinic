  <div class="modal show" id="addclientmodal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content" id="registermodal">
        <div class="modal-header" style="background-color:white"><!--background-color:rgba(128, 191, 255,0.9)-->
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">New Client Form</h2>
        </div>
        <div class="modal-body" style="padding:60px;padding-top:0px;">
				<br/>
			  <form class="form-horizontal" action="">
				<div class="form-group">
				  <label class=" col-sm-3" >Client ID:</label>
				  <div class="col-sm-8">
					<input type="text" class="form-control" id="clientid"  name="clientid" value="" disabled>
				  </div>
				</div>
				<br />
			  <h3 class="text-center"><b>Owner's Info</b></h3>
				<div class="form-group">
				  <label class=" col-sm-3" for="name">Name:</label>
				  <div class="col-sm-8">
					<input type="text" class="form-control" id="name"  name="clientname">
				  </div>
				</div>
				<div class="form-group">
				  <label class=" col-sm-3" for="address">Address:</label>
				  <div class="col-sm-8">          
					<input type="text" class="form-control" id="address"  name="address">
				  </div>
				</div>
				<div class="form-group">
				  <label class=" col-sm-3" for="contact">Contact no.:</label>
				  <div class="col-sm-8">          
					<input type="text" class="form-control" id="contact"  name="contact">
				  </div>
				</div>
				<div class="form-group">
				  <label class=" col-sm-3" for="email">Email Add.:</label>
				  <div class="col-sm-8">          
					<input type="text" class="form-control" id="email"  name="email">
				  </div>
				</div>
			  <h3 class="text-center"><b>Pet's Info</b></h3>
				<div class="form-group">
				  <label class=" col-sm-3" for="petname">Name:</label>
				  <div class="col-sm-8">
					<input type="text" class="form-control" id="petname"  name="petname">
				  </div>
				</div>
				<div class="form-group">
				  <label class=" col-sm-3" for="petbreed">Breed:</label>
				  <div class="col-sm-8">
					<input type="text" class="form-control" id="petbreed"  name="petbreed">
				  </div>
				</div>
				<div class="form-group">
				  <label class=" col-sm-3" for="petcolor">Color/Markings:</label>
				  <div class="col-sm-8">
					<input type="text" class="form-control" id="petcolor"  name="petcolor">
				  </div>
				</div>
				<div class="form-group">
				  <label class=" col-sm-3" for="petsex">Sex:</label>
				  <div class="col-sm-8">
					<label class="radio-inline">
					  <input type="radio" name="optradio" value="male">Male
					</label>
					<label class="radio-inline">
					  <input type="radio" name="optradio" value="female">Female
					</label>
				  </div>
				</div>
				<div class="form-group">
				  <label class=" col-sm-3" for="problem">Problems:</label>
				  <div class="col-sm-8">
					<input type="text" class="form-control" id="problem"  name="problem">
				  </div>
				</div>
				<div class="form-group">
				  <label class=" col-sm-3" for="servicetype">Service:</label>
				  <div class="col-sm-8">
					<label class="radio-inline">
					  <input type="radio" name="optradio" value="grooming">For Grooming
					</label>
					<label class="radio-inline">
					  <input type="radio" name="optradio" value="treatment">For Treatment
					</label>
				  </div>
				</div>
				
        </div>
        <div class="modal-footer">
          <button type="submit" id="sbmtClient" class="btn btn-primary">Saves</button>
			  </form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
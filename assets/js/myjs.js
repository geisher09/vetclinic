$(document).ready(function(){
	//edit infoo 
	$("#custcontactno1").hide();
	$("#custemail1").hide();
	$("#custaddress1").hide();
	$("#custname1").hide();
$("#editClient").click(function(e){
	e.preventDefault();
    var base_url = window.location.origin;
	var number = $("#custcontactno1").val();
	var email = $("#custemail1").val();
	var address = $("#custaddress1").val();
	var id = $("#clientno1").val();
	var name = $("#custname1").val();
	$("#custcontactno1").toggle();
	$("#custemail1").toggle();
	$("#custaddress1").toggle();
	$("#custcontactno").toggle();
	$("#custemail").toggle();
	$("#custaddress").toggle();

	var $this = $(this);
		$this.toggleClass('EDIT');
		if($this.hasClass('EDIT')){
			$this.text('SAVE');	

		} else {
			$this.text('EDIT');
		

					 $.ajax({
					    type: "POST",
					    url: base_url+"/veterinary/vetclinic/upClient",
					     data: {name:name,id:id,cnum:number,email:email,addr:address},
					    success: function(msg){
					 	
					

					$("#custcontactno").text(number);				
					$("#custemail").text(email);
					$("#custaddress").text(address);
					alert('UPDATED!');
					         
							  }
	});
  		

		}



});
/// end here





//modal open and close 

});
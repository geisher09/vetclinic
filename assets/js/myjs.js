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
//end







});


// computatiom
$(document).ready(function(){
				var add =0;
			
				$(document).on('change','.addtm',function(){
					var base_url = window.location.origin;
					var id = "";
					var x=$(this).closest('tr').find(':selected').val();
					var prc=$(this).val();
				  	// $(".prd").val('hi');	
  					var y= $(this);		
			       
					var sum = 0;

					$.ajax({
			   				type: "POST",
						    url: base_url+"/veterinary/vetclinic/ItemPrice",
						     data: {id:x},
						    success: function(msg){
							console.log(msg);
									var price = JSON.parse(msg);
									
									// console.log(price[0].qty_left);
									// alert(price.item_cost)
									if(parseInt(price[0].qty_left)<prc){

										alert("Item out of stock, "+price[0].qty_left+" left");
										//alert(price[0].qty_left);
										
									}
									else{
									add=price[0].item_cost*prc;
										
									$(y).closest('tr').find('.prd').val(add);
									 $(".prd").each(function(){
								        sum += +$(this).val();
								   });

									 $("#TotalSum").text("₱ "+sum.toLocaleString("en"));
									 $("#hiddenSum").val(sum);
									}
								  }
					});

				});	
				//disable negative
				$(document).ready(function(){
						$(document).on('keyup','.addtm',function(){
								 var num = this.value.match(/^\d+$/);
									  if (num === null) {	
	      							 this.value = "";
	   								 }
						});

				});
				//query for changing item
					$(document).on('change','.Vitems',function(){
					var base_url = window.location.origin;
					var id = "";
					var x=$(this).closest('tr').find(':selected').val();
					var prc=$(this).closest('tr').find('input').val();
  					var y= $(this);		
					var sum = 0.0;
					
					if(prc!=0){
					
					$.ajax({
			   				type: "POST",
						    url: base_url+"/veterinary/vetclinic/ItemPrice",
						     data: {id:x},
						    success: function(msg){
							console.log(msg);
									var price = JSON.parse(msg);
									console.log(msg);
									// alert(price.item_cost)
							
									add=price[0].item_cost*prc;
	
									$(y).closest('tr').find('.prd').val(add);
									 $(".prd").each(function(){
								        sum += +$(this).val();
								    });
								 $("#TotalSum").text("₱ "+sum.toLocaleString("en"));
								 $("#hiddenSum").val(sum);
								  }





					});
				}

				});	
						//clear modal on close 
							$('#clientModal').on('hidden.bs.modal', function () {
								 location.reload();
							 	});
							});
				//revent submit if form not complete


				$("document").ready(function(e){
							$("#sbmtbtn").click(function(e){

								e.preventDefault();
								var base_url = window.location.origin;
								var x=0;
								var y=0;
								var a= $("#VpetsOwned").val();
								$('.addtm').each(function(){
										 x=$(this).closest('tr').find(':selected').val();
										 y= $(this).val();
									
									
										 	$.ajax({
												type: "POST",
						  						  url: base_url+"/veterinary/vetclinic/itemUsed",
						   						  data: {id:x,item:y,pet:a},
						   						 success: function(msg){
						   						 	$("#hstryform").submit();
														   $('#clientModal').modal('hide');
														   alert('Record added successfully');		

								 				 }

									});
										 	
								});
							
								

							});


				});

		






		
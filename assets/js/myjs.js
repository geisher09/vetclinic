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
					    url: base_url+"/veterinary/vetclinic/validate",
					     data: {name:name,id:id,cnum:number,email:email,addr:address},
					    success: function(msg){
					    	if(msg=='true'){
					 	
					 $.ajax({
					    type: "POST",
					    url: base_url+"/veterinary/vetclinic/upClient",
					     data: {name:name,id:id,cnum:number,email:email,addr:address},
					    success: function(msg){
					    	
								$("#conerror").text('');	
								$("#cnume").removeClass("has-error has-feedback");
								$("#addrerror").text('');	
								$("#addre").removeClass("has-error has-feedback");
								$("#emailerror").text('');	
								$("#emaile").removeClass("has-error has-feedback");
								$("#custcontactno").text(number);				
								$("#custemail").text(email);
								$("#custaddress").text(address);
							
								alert('Record updated successfully');
						




							}
							
						});//end	
							}

							else{
					$("#custcontactno1").show();
					$("#custemail1").toggle();
					$("#custaddress1").toggle();
					$("#custcontactno").toggle();
					$("#custemail").toggle();
					$("#custaddress").toggle();
					$this.toggleClass('EDIT');
		if($this.hasClass('EDIT')){
			$this.text('SAVE');	}
			else{
					$this.text('EDIT');
			}
	
							var obj = JSON.parse(msg);
							if(obj.cnum!=null){
								$("#conerror").html(obj.cnum);	
								$("#cnume").addClass("has-error has-feedback");
								// $("#cnume").append("<span id='cnume1' class='glyphicon glyphicon-remove form-control-feedback'></span>");

							}
							else{
								$("#conerror").remove(obj.cnum);	
								$("#cnume").removeClass("has-error has-feedback");
								// $("#cnume1").remove();

							}
							if(obj.addr!=null){
					         	$("#addrerror").html(obj.addr);	
								$("#addre").addClass("has-error has-feedback");
								// $("#addre").append("<span id='addre1' class='glyphicon glyphicon-remove form-control-feedback'></span>");
							  }
							  else{
								$("#addrerror").remove(obj.addr);	
								$("#addre").removeClass("has-error has-feedback");
								// $("#addre1").remove();

							}
							 if(obj.email!=null){
							 	$("#emailerror").html(obj.email);	
								$("#emaile").addClass("has-error has-feedback");
								// $("#emaile").append("<span id='emaile1' class='glyphicon glyphicon-remove form-control-feedback'></span>");
							 }
							 else{
								$("#emailerror").remove(obj.email);	
								$("#emaile").removeClass("has-error has-feedback");
								// $("#emaile1").remove();

							}
							}
						}
						});//end
  		

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
									y.val('');
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
						$(document).on('keyup','.minqty',function(){
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
					var z=$(this).closest('tr').find('input');
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
							
									if(parseInt(price[0].qty_left)<prc){
										alert("Item out of stock, "+price[0].qty_left+" left");
									//alert(price[0].qty_left);	
										z.val('');
									add=price[0].item_cost*prc;
								

									$(y).closest('tr').find('.prd').val(add);
									 $(".prd").each(function(){
								        sum += +$(this).val();
								   });
									  $("#TotalSum").text("₱ "+sum.toLocaleString("en"));
									 $("#hiddenSum").val(sum);
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
								if($("#btn_get").val()=='')
								{

									alert('Please select Service type');

									$(".srvcss").css("color","red");
								}
								else {
								
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
						   						 
														   $('#clientModal').modal('hide');
														 	
								 				 }
												});
							



										 	
								});
								  alert('Record save successfully');	
									$("#hstryform").submit();

										 	
								}

							});



							// radio button


							$(".srvcs").click(function(){
								newp($(this).val());
								$("#btn_get").val($(this).val());
							});
							//validation
						 $("#custcontactno1").keyup(function(){



						 });
						

							
				});



				$(document).ready(function(){

						$('#sbmtPet').click(function(e){
		var base_url = window.location.origin;
							e.preventDefault();
							var pname=$('#Mypetname').val();
							var ptype=$('#addpetype').val();
							var pbreed=$('#addpetbreed').val();
							var pbday=$('#addpetbday').val();
							var pmark=$('#addpetmarkings').val();
							
							$.ajax({
													type: "POST",
						  						  url: base_url+"/veterinary/vetclinic/validatePet",
						   						  data: {name:pname,type:ptype,breed:pbreed,bday:pbday,mark:pmark},
						   						 success: function(msg){
						   						 	console.log(msg);
						   						 	if(msg=='true'){
						   					// 	 		$("#Peterror").text('');	
														// $("#Perror").removeClass("has-error has-feedback");
														// $("#addrerror").text('');	
														// $("#addre").removeClass("has-error has-feedback");
														// $("#emailerror").text('');	
														// $("#emaile").removeClass("has-error has-feedback");
														// $("#custcontactno").text(number);				
														// $("#custemail").text(email);
														// $("#custaddress").text(address);
						   						 $('#addPetForm').submit();



						   						 	}
						   						 	else{

						   						var obj = JSON.parse(msg);

												if(obj.name!=null){
													$("#Peterror").html(obj.name);	
													$("#Perror").addClass("has-error has-feedback");
													// $("#cnume").append("<span id='cnume1' class='glyphicon glyphicon-remove form-control-feedback'></span>");

												}
												else{
													$("#Peterror").remove(obj.name);	
													$("#Perror").removeClass("has-error has-feedback");
													// $("#cnume1").remove();

												}
												if(obj.type!=null){
										         	$("#Typeerror").html(obj.type);	
													$("#Terror").addClass("has-error has-feedback");
													// $("#addre").append("<span id='addre1' class='glyphicon glyphicon-remove form-control-feedback'></span>");
												  }
												  else{
													$("#Typeerror").remove(obj.type);	
													$("#Terror").removeClass("has-error has-feedback");
													// $("#addre1").remove();

												}
												 if(obj.breed!=null){
												 	$("#Breerror").html(obj.breed);	
													$("#Berror").addClass("has-error has-feedback");
													// $("#emaile").append("<span id='emaile1' class='glyphicon glyphicon-remove form-control-feedback'></span>");
												 }
												 else{
													$("#Breerror").remove(obj.breed);	
													$("#Berror").removeClass("has-error has-feedback");
													// $("#emaile1").remove();

													}
												 if(obj.bday!=null){
												 	$("#Bdayerror").html(obj.bday);	
													$("#Derror").addClass("has-error has-feedback");
													// $("#emaile").append("<span id='emaile1' class='glyphicon glyphicon-remove form-control-feedback'></span>");
												 }
												 else{
													$("#Bdayerror").remove(obj.bday);	
													$("#Derror").removeClass("has-error has-feedback");
													// $("#emaile1").remove();

													}
											     if(obj.mark!=null){
												 	$("#Markerror").html(obj.mark);	
													$("#Merror").addClass("has-error has-feedback");
													// $("#emaile").append("<span id='emaile1' class='glyphicon glyphicon-remove form-control-feedback'></span>");
												 }
												 else{
													$("#Markerror").remove(obj.mark);	
													$("#Merror").removeClass("has-error has-feedback");
													// $("#emaile1").remove();

													}



						   						 	}

						   						


						   						 }



							});


						});

				});
			
				//add item validation

				$(document).ready(function(){

					$('#sbmtItem').click(function(e){
						e.preventDefault();
						var base_url = window.location.origin;
						var desc =$('#item_desc').val();
						var cost =$('#item_cost').val();
						var qty =$('#qty_left').val();

						$.ajax({
												type: "POST",
						  						  url: base_url+"/veterinary/vetclinic/validateItem",
						   						  data: {desc:desc,cost:cost,qty:qty},
						   						 success: function(msg){

						   						 	console.log(msg);
						   						var obj = JSON.parse(msg);

						   						if(msg=='true'){
						   							$('#addInventory').submit();
						   								alert('hi');				   						}
						   					else{
												if(obj.desc!=null){
													$("#descerror1").html(obj.desc);	
													$("#descerror").addClass("has-error has-feedback");
													// $("#cnume").append("<span id='cnume1' class='glyphicon glyphicon-remove form-control-feedback'></span>");

												}
												else{
													$("#descerror1").remove(obj.desc);	
													$("#descerror").removeClass("has-error has-feedback");
													// $("#cnume1").remove();

												}
												if(obj.cost!=null){
										         	$("#costerror1").html(obj.cost);	
													$("#costerror").addClass("has-error has-feedback");
													// $("#addre").append("<span id='addre1' class='glyphicon glyphicon-remove form-control-feedback'></span>");
												  }
												  else{
													$("#costerror1").remove(obj.cost);	
													$("#costerror").removeClass("has-error has-feedback");
													// $("#addre1").remove();

												}
												 if(obj.qty!=null){
												 	$("#qtyerror1").html(obj.qty);	
													$("#qtyerror").addClass("has-error has-feedback");
													// $("#emaile").append("<span id='emaile1' class='glyphicon glyphicon-remove form-control-feedback'></span>");
												 }
												 else{
													$("#qtyerror1").remove(obj.qty);	
													$("#qtyerror").removeClass("has-error has-feedback");
													// $("#emaile1").remove();

													}


						   						 }
						   						}






						});


					});
				});



		
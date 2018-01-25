
    $(document).ready(function(){
      var e=1;
     $("#add_row").click(function(){
      $('#addr'+e).html("<td class='text-center'>"+ (e+1) +"</td><td><input name='itemName"+e+"' type='text' placeholder='Item' class='form-control input-md'  /> </td><td><input name='qty"+e+"' type='number' placeholder='Qty'  class='form-control input-md'></td>");

      $('#tab_logic').append('<tr id="addr'+(e+1)+'"></tr>');
      ++; 
  });
     $("#delete_row").click(function(){
    	 if(e>1){
		 $("#addr"+(e-1)).html('');
		 e--;
		 }
	 });
});
$('#btnEmpty').click(function(){
	if($('#formEmpty').smkValidate()){

	$.smkAlert({text:'Validate!',type:'success'});
     return true;
     } else
     { return false;} });
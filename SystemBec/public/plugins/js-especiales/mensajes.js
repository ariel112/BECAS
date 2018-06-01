$('#btnWarning').click(function(e)
	{e.preventDefault();$.smkAlert({text:'Alert type "warning"',type:'warning',});});
$('#btnSuccess').click(function(e)
	{e.preventDefault();$.smkAlert({text:'Alert type "success"',type:'success',position:'top-left',time:4});});
$('#btnDanger').click(function(e)
	{e.preventDefault();$.smkAlert({text:'Alert type "danger" time 10 seconds',type:'danger',position:'top-center',time:10});});

$('#btnInfo1').click(function()
	{   
		$.smkAlert({
		text:'El empleado a sido asignado con exito',
		type:'info',
		position:'bottom-right',
		icon:'glyphicon-time', 
		permanent:true}); });



$('#btnProgressbar').click(
	function(e){e.preventDefault();
		$.smkProgressBar({
			element:'body',
			status:'start',
			bgColor:'#000',
			barColor:'#fff',
			content:'Loading...'});
		setTimeout(function(){
			$.smkProgressBar({status:'end'});},1000);});


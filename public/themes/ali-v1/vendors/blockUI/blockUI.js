if(typeof $.blockUI !== 'undefined')
{
	let htmlBlock =  '<div class="preloader-wrapper big active">'+
	'<div class="spinner-layer spinner-blue-only spinner-pmpr">'+
	'<div class="circle-clipper left">'+
	'<div class="circle"></div></div>'+
	'<div class="gap-patch">'+
	'<div class="circle"></div></div>'+
	'<div class="circle-clipper right">'+
	'<div class="circle"></div></div></div></div>';

	$.blockUI.defaults.message  			= htmlBlock;
	$.blockUI.defaults.baseZ    			= 2000;
	$.blockUI.defaults.ignoreIfBlocked    	= true;
	$.blockUI.defaults.css    	= { 
		padding:        0, 
		margin:         0, 
		width:          '30%', 
		top:            '40%', 
		left:           '35%', 
		textAlign:      'center', 
		color:          '#000', 
		border:         'none', 
		backgroundColor:'unset', 
		cursor:         'wait' 
	};

	$(window).on("beforeunload", function(e)
	{
		$.blockUI();
	});
}
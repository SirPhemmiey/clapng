
$(document).ready(function(){
	
	$('input[type="text"], input[type="password"], input[type="number"], input[type="email"] ').each(function() {
		$(this).val( $(this).attr('placeholder') );
    });
	
});
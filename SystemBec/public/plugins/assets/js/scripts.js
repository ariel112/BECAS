
jQuery(document).ready(function() {
	
    /*
        Fullscreen background
    */
    $.backstretch([
                    
                    "{{asset('images/login/2.jpg')}}"
	              , "{{asset('images/login/3.jpg')}}"
	              , "{{asset('images/login/1.jpg')}}"
	             ], {duration: 3000, fade: 750});
    
    /*  {{asset('images/solidario.jpg')}}
        Form validation
    */
    $('.login-form input[type="text"], .login-form input[type="password"], .login-form textarea').on('focus', function() {
    	$(this).removeClass('input-error');
    });
    
    $('.login-form').on('submit', function(e) {
    	
    	$(this).find('input[type="text"], input[type="password"], textarea').each(function(){
    		if( $(this).val() == "" ) {
    			e.preventDefault();
    			$(this).addClass('input-error');
    		}
    		else {
    			$(this).removeClass('input-error');
    		}
    	});
    	
    });
    
    
});

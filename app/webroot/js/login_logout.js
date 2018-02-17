jQuery(document).ready(function() {    
     /*
        Form
    */
    $('.form input[type="password"], .form input[type="email"]').on('focus', function() {
        $(this).removeClass('input-error');
    });
    
    $('.form .submit').on('click', function(event) {
        var div = $(this).parents('div');
        // fields validation
        div.find('input[type="password"], input[type="email"]').each(function() {
            if( $(this).val() == "" ) {
                $(this).addClass('input-error');
                event.preventDefault();
            }
               else {
                $(this).removeClass('input-error');
            }
            var password = $('#password').val();
            var password_confirm = $('#password_confirm').val();
            if(password != password_confirm){
                $(this).addClass('input-error');
                $('#passwords').show('slow');
                event.preventDefault();
            }
            else{
                $(this).removeClass('input-error');
                $('#passwords').hide('fast');
            }
            // Validating the email
                var regex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
                 var email = $('input[type="email"]');
                var is_email=regex.test(email.val());
                if(is_email){
                email.removeClass("input-error");
            }
            else {
                email.addClass("input-error");
                 event.preventDefault();
                }
        });
          });
    // submit
    $('.form').on('submit', function(e) {
        
        // fields validation
        $(this).find('input[type="password"], input[type="email"]').each(function() {
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
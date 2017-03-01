/* -------------------------------------------------------- LOGIN REGISTER FORM FUNKTION index.php ---------------------------------------------------- */


function showRegisterForm(){
    $('.loginBox').fadeOut('fast',function(){
        $('.registerBox').fadeIn('fast');
        $('.login-footer').fadeOut('fast',function(){
            $('.register-footer').fadeIn('fast');
        });
        $('.modal-title').html('Registrieren mit');
    }); 
    $('.error').removeClass('alert alert-danger').html('');
       
}
function showLoginForm(){
    $('#loginModal .registerBox').fadeOut('fast',function(){
        $('.loginBox').fadeIn('fast');
        $('.register-footer').fadeOut('fast',function(){
            $('.login-footer').fadeIn('fast');    
        });
        
        $('.modal-title').html('Einloggen mit');
    });       
     $('.error').removeClass('alert alert-danger').html(''); 
}

function openLoginModal(){
    showLoginForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}
function openRegisterModal(){
    showRegisterForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}

/* -------------------------------------------------------- NOTIFICATION FUNKTION user.php ---------------------------------------------------- */
type = ['','info','success','warning','danger'];
    	

not = {
    initPickColor: function(){
        $('.pick-class-label').click(function(){
            var new_class = $(this).attr('new-class');  
            var old_class = $('#display-buttons').attr('data-class');
            var display_div = $('#display-buttons');
            if(display_div.length) {
            var display_buttons = display_div.find('.btn');
            display_buttons.removeClass(old_class);
            display_buttons.addClass(new_class);
            display_div.attr('data-class', new_class);
            }
        });
    }, 
    
	showNotification: function(from, align){
    	color = 2;
    	
    	$.notify({
        	message: "Der Film - <b> Filmname maybe </b> - wurde erfolgreich gespeichert!"
        	
        },{
            type: type[color],
            timer: 8000,
            placement: {
                from: from,
                align: align
            }
        });
	}

    
}
/* -------------------------------------------------------- NOTIFICATION FUNKTION user.php ---------------------------------------------------- */
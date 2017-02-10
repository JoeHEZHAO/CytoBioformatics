// changes activity and appearance of input and textarea fields
$('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
  var $this = $(this),
    label = $this.prev('label');

	if (e.type === 'keyup') {
      if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
    	if( $this.val() === '' ) {
    		label.removeClass('active highlight'); 
			} else {
		    label.removeClass('highlight');   
			}   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
    		label.removeClass('highlight'); 
			} 
      else if( $this.val() !== '' ) {
		    label.addClass('highlight');
			}
    }

});

// changes active tab styles
$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});


$('#reset_password_email').submit(function() {
    
    var email =  $("input[name='email']").val();
    $.ajax({
        method: "POST",
        url: $('#reset_password_email').attr('action') + '/Email/password_reset',
        data: { email : email },
        success: function (response) {
//            console.log(response);
            if (response == 'email_not_exist') {
                $("#error_reset").text("Email not found. Please try another.");
                $("#error_reset").css("color", "red");
            } else if (response == 'failed_to_send') {
                $("#error_reset").text("The email failed to send.");
                $("#error_reset").css("color", "red");
            } else if (response == 'generate_token_failed') {
                $("#error_reset").text("Failed to generate temporary token. Please contact us.");
                $("#error_reset").css("color", "red");
            } else if (response == 'success') {
                $("#error_reset").text("An email has been sent. Please check your inbox.");
                $("#error_reset").css("color", "white");
            } else {
                $("#error_reset").text("An unknown error occurred.");
                $("#error_reset").css("color", "red");
            }

        },
        error: function(xhr, textStatus, errorThrown){
            alert('Request failed.\n\n' + errorThrown);
        }
    })
    return false; // keep page from refreshing
});


$('#reset_password').submit(function() {
    
    var email =  $("input[name='email']").val();
    var pwd = $("input[name='password']").val();
    var pwd_c = $("input[name='password_c']").val();
    
    // check that password is at least 8 characters
    if (pwd.length >= 8) {
        // check that passwords match
        if (pwd===pwd_c) {
            $.ajax({
                method: "POST",
                url: $('#reset_password').attr('action') + '/Register/reset_password',
                data: { email: email, password: pwd },
                success: function (response) {
//                    console.log(response);
                    if (response == 'success') {
                        $("#error_reset").text("Your password has been updated!");
                        $("#error_reset").css("color", "white");
                        $(".field-wrap").css("display", "none");
                        $(".button").css("display", "none");
                        $("#return-button").css("display", "block");
                        
                    } else if (response == 'failed_to_update') {
                        $("#error_reset").text("Failed to update database. Please contact us.");
                        $("#error_reset").css("color", "red");
                    } else {
                        $("#error_reset").text("An unknown error occurred.");
                        $("#error_reset").css("color", "red");
                    }
                },
                error: function(xhr, textStatus, errorThrown){
                    alert('Request failed.\n\n' + errorThrown);
                }
            })
        } else {
            $("#error_reset").text("Passwords do not match. Please try again.");
            $("#error_reset").css("color", "red");
        }
    } else {
        $("#error_reset").text("Password must be at least 8 characters.");
        $("#error_reset").css("color", "red");
    }

    return false; // keep page from refreshing
});

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


$('#userlogin').submit(function() {

    var email =  $("input[name='email_login']").val(); 
    var pwd = $("input[name='password_login']").val();

    $.ajax({
        method: "POST",
        url: $('#userlogin').attr('action') + '/Login/index',
        data: { email: email, password: pwd },
        success: function (response) {
            
            if (response == 'failed') {

                $("#error_login").text("Wrong email or password. Please try again.");
                $("#error_login").css("display", "block");

            } else {
                window.location.replace($('#userlogin').attr('action') + '/Cyto/index');
//                alert(response);
            }

        },
        error: function(xhr, textStatus, errorThrown){
            alert('Request failed.\n\n' + errorThrown);
        }
    })

    return false; // keep page from refreshing

});

$('#register').submit(function() {

    var email =  $("input[name='email']").val(); 
    var pwd = $("input[name='password']").val();
    var pwd_c = $("input[name='password_c']").val();
    var firstname = $("input[name='FirstName']").val(); 
    var lastname = $("input[name='LastName']").val();
    var organization = $("input[name='organization']").val(); 
    var phone = $("input[name='phone']").val(); 

    // check that password is at least 8 characters
    if (pwd.length >= 8) {
        // check that passwords match
        if (pwd===pwd_c) {
            $.ajax({
                method: "POST",
                url: $('#register').attr('action') + '/Register/index',
                data: { email: email, password: pwd, FirstName : firstname, LastName : lastname, organization : organization, phone : phone },
                success: function (response) {
//                    alert(response);
                    if (response == 'Email address already exists.') {
                        $("#error_signup").text("Duplicate email address. Please try another.");
                        $("#error_signup").css("display", "block");
                    } else if (response == 'activate_email_failed') {
                        $("#error_signup").text("Error sending confirmation email. Please try again or contact us.");
                        $("#error_signup").css("display", "block");
                    } else if (response == 'account_pending') {
                        $("#error_signup").text("A confirmation email has already been sent. Please check your inbox.");
                        $("#error_signup").css("display", "block");
                        $("#register").css("display", "none");
                        $(".button").css("display", "none");
                    } else {
                        $("#error_signup").text("A confirmation email has been sent. Please check your inbox.");
                        $("#error_signup").css("display", "block");
                        $("#error_signup").css("color", "white");
                        $("#register").css("display", "none");
                        $(".button").css("display", "none");
                        
//                        $(".resend_activate").css("display", "block");
                        
//                        window.location.replace($('#register').attr('action') + '/Cyto/index');
        //                alert(response);
                    }

                },
                error: function(xhr, textStatus, errorThrown){
                    alert('Request failed.\n\n' + errorThrown);
                }
            })
        } else {
            $("#error_signup").text("Passwords do not match. Please try again.");
            $("#error_signup").css("display", "block");
        }
    } else {
        $("#error_signup").text("Password must be at least 8 characters.");
        $("#error_signup").css("display", "block");
    }

    return false; // keep page from refreshing

});

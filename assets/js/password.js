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


$('#reset_password').submit(function() {
    
    var email =  $("input[name='email']").val();
    $.ajax({
        method: "POST",
        url: $('#reset_password').attr('action') + '/Email/password_reset',
        data: { email : email },
        success: function (response) {
//            console.log(response);
            if (response == 'email_not_exist') {
                $("#error_reset").text("Email not found. Please try another.");
                $("#error_reset").css("color", "red");
            } else if (response == 'failed_to_send') {
                $("#error_reset").text("The email failed to send.");
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

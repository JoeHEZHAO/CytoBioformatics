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


$('#submitquote').submit(function() {

    var firstname = $("input[name='FirstName']").val(); 
    var lastname = $("input[name='LastName']").val(); 
    var email = $("input[name='email']").val(); 
    var organization = $("input[name='organization']").val(); 
    var phone = $("input[name='phone']").val(); 
    var subject = $("input[name='subject']").val(); 
    var message = $("textarea[name='message']").val(); 
    var filename0 = _checkFile("input[name='filename0']");
    var filename1 = _checkFile("input[name='filename1']");
    var filename2 = _checkFile("input[name='filename2']");
    
    // console.log(firstname);
    // console.log(lastname);
    // console.log(email);
    // console.log(organization);
    // console.log(phone);
    // console.log(message);
    // console.log(filename0);
    // console.log(filename1);
    // console.log(filename2);
    
    var myFormData = new FormData(this);
    $.ajax({
        method: "POST",
        url: $('#submitquote').attr('action') + '/Submitquote/upload_formdata',
        data: myFormData,
        processData: false,
        contentType: false,
        success: function (response) {
                    
            if (response == 'failed_database') {
                $("#error_quote").text("There was a database error submitting your quote. Please try again.");
                $("#error_quote").css("display", "block");
            }
            else{
                window.location.replace($('#submitquote').attr('action') + '/Submitquote/quote_success');
//                alert(response);
            }
            
        },
        error: function(xhr, textStatus, errorThrown){
            alert('There was an error processing your request. Please try again.\n\n' + errorThrown);
        }
    })

    return false; // keep page from refreshing

});

function _checkFile(fname) {
    if (($(fname).length==0) || ($(fname).length==null)) {
        return null;
    }
    else {
        return $(fname).val().split('\\').pop();
    }
}

//function dump(obj) {
//    var out = '';
//    for (var i in obj) {
//        out += i + ": " + obj[i] + "\n";
//    }
//
//    alert(out);
//
//    // or, if you wanted to avoid alerts...
//
//    var pre = document.createElement('pre');
//    pre.innerHTML = out;
//    document.body.appendChild(pre)
//}

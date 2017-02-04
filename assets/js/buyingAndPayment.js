
$(document).ready(function() {
	$('#ServiceQuantity').submit(function() {
		    var quoteIds = [];
		    var quoteCharges = [];
		    var totalCharge = 0;
			$('input:checkbox:checked').each(function () {
			    quoteIds.push($(this).attr('name'));
			    quoteCharges.push($(this).attr('value'));
			    totalCharge = totalCharge + parseFloat($(this).attr('value'));
			});

			if(totalCharge != 0){	
				$.ajax({
					type: "POST",
					url: $('#checkout').attr('name') + '/Cyto_bioformatics/Checkout',
					data: { TotelCharge : totalCharge, quoteIds: quoteIds,  quoteCharges : quoteCharges },
					success: function (response) {
						if (response == 'success!') {
							window.location.replace($('#checkout').attr('name') + '/Cyto_bioformatics/paymentPage');
						}else{
							alert(response);
						}				
		            },
		            error: function(xhr, textStatus, errorThrown){
			            alert('request failed');
		        	}
				});
			}else{
			    alert('please choose a quote or add a quote'); // keep website from refreshing and re-directing
			}

			return false;
	}); 

	function goToByScroll(id){
	      // Scroll
	    $('html,body').animate({
	        scrollTop: $(id).offset().top -100},
	        'fast');
	}

	$("#nextToSeg").click(function() {
		goToByScroll('#numOfSeg');
	})

	$("#nextToDenoise").click(function() {
		goToByScroll('#numOfDenoise');
	})
})
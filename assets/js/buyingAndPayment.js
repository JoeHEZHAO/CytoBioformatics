
$(document).ready(function() {

	$('#ServiceQuantity').submit(function() {

			    // var numOfDetection =  $("input[name='quantity_detection']").val(); 
			    // var numOfSeg = $("input[name='quantity_segmentation']").val();
			    // var numOfDenoisey = $("input[name='quantity_denoisey']").val();

			    // document.getElementById('label_quantity_detection').innerHTML = 'Purchase Number: ' + numOfDetection;
			    // document.getElementById('label_quantity_segmentation').innerHTML = 'Purchase Number: ' + numOfSeg;
			    // document.getElementById('label_quantity_denoisey').innerHTML = 'Purchase Number: ' + numOfDenoisey;
			    
			    // $('.container2').show();

			    // goToByScroll('#numOfDet');

			    var quoteIds = [];
			    var quoteCharges = [];
			    var totalCharge = 0;
				$('input:checkbox:checked').each(function () {
				    quoteIds.push($(this).attr('name'));
				    quoteCharges.push($(this).attr('value'));
				    totalCharge = totalCharge + parseFloat($(this).attr('value'));
				});

				$.ajax({
					type: "POST",
					url: $('#checkout').attr('name') + '/Cyto_bioformatics/Checkout',
					data: { TotelCharge : totalCharge, quoteIds: quoteIds,  quoteCharges : quoteCharges },
					success: function (response) {

						if (response != null) {
							window.location.replace($('#checkout').attr('name') + '/cyto_bioformatics/paymentPage');
						}				

		            },
		            error: function(xhr, textStatus, errorThrown){
			            alert('request failed');

		        	}
				});

			    return false; // keep website from refreshing and re-directing
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

	$('#checkout').click(function() {

		// var totoalFee =  parseInt($("input[name='detection_500_500']").val()) + parseInt($("input[name='detection_1000_1000']").val()) + 
		// 	parseInt($("input[name='detection_10000_10000']").val()) + parseInt($("input[name='detection_500_500']").val()) + parseInt($("input[name='seg_500_500']").val()) + 
		// 	parseInt($("input[name='seg_1000_1000']").val()) + parseInt($("input[name='seg_10000_10000']").val()) + parseInt($("input[name='deNoise_500_500']").val()) + 
		// 	parseInt($("input[name='deNoise_1000_1000']").val()) + parseInt($("input[name='deNoise_10000_10000']").val()); 

		$.ajax({
			type: "POST",
			url: $('#checkout').attr('name') + '/Cyto_bioformatics/Checkout',
			data: { TotelCharge : totoalFee },
			success: function (response) {

				if (response != null) {

					window.location.replace($('#checkout').attr('name') + '/cyto_bioformatics/paymentPage');

				}				

            },
            error: function(xhr, textStatus, errorThrown){
	            alert('request failed');

        	}
		});

	})

})
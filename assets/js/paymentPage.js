$(document).ready(function() {
	
	$('#checkout1').click(function() {

		var paymentProfileID = $('input[type="checkbox"]:checked'). attr("name");
		var totalCharge = $('#TotalCharge'). attr("name");
		var pathUrl = $(this).attr('name') + '/Cyto_bioformatics/';

		$.ajax({
	        type: "POST",
	        url: pathUrl + 'CIMpayment',
	        data: { paymentProfileID : paymentProfileID, TotelCharge : totalCharge},
	        success: function (response) {

	        	if (response != null) {
	        		window.location.replace(pathUrl + 'receipt');
	        		// console.log(response);
	        	}

	        },
	        error: function(xhr, errorThrown){
	            alert('request failed');
	        }
	    });

	})

})
function messageFunc(msg)
{
	try{
		responseObj=JSON.parse(msg);
		if(responseObj.transactionResponse.responseCode=='1'){
			message="Transaction Successful!<br>Transaction ID: "+responseObj.transactionResponse.transId;
			message = message + "<br><button id='return' onclick='returnback()'>Go to Receipt Page</button>"
			// TODO: After success, open new page saying it is done;
			window.open($('#submitButton').attr('name') + 'index.php/Cyto/transaction_success/' + responseObj.transactionResponse.transId);
			window.location.href = $('#submitButton').attr('name') + 'index.php/Cyto/';
		}
		else{
			message="Transaction Unsuccessful.";//+responseObj.messages.message[0].text;
			if(responseObj.transactionResponse.errors!=null)//to do: take care of errors[1] array being parsed into single object
			{
				message+=responseObj.transactionResponse.errors.error.errorText;
			}
			/*else if(responseObj.transactionResponse.errors[0]!=null)
			{
				for(i=0;i<responseObj.transactionResponse.errors.length;i++)
				{
					message+="<br>";
					message+=responseObj.transactionResponse.errors[i].error.errorText;
				}
			}*/
			if(responseObj.transactionResponse.transId!=null)
			{
				message+="<br>";
				message+=("Transaction ID: "+responseObj.transactionResponse.transId)
			}
		}
	}
	catch(error){
		console.log("Couldn't parse result string");
		message="Error.";
	}
	
	//alert(message);
	
	$('#acceptJSReceiptBody').html(message);
	//jQuery.noConflict();
	$('#acceptJSPayModal').modal('hide');
	$('#acceptJSReceiptModal').modal('show');
}

function createTransact(dataObj) {
	$.ajax({

		url: "https://localhost/Codeigniter/index.php/Cyto/transactionCaller",
		data: {amount: document.getElementById('amount').value, dataDesc: dataObj.dataDescriptor, dataValue: dataObj.dataValue},
		method: 'POST',
		timeout: 5000
		
	}).done(function(data){	
		console.log('data');
	}).fail(function(){
		console.log('Error');
	}).always(function(textStatus){
		console.log(textStatus);
		var response = JSON.parse(textStatus);
		if (response.messages.resultCode == 'Ok') {
			console.log(response);
			storeRecord(response);
			saveBillingAddress(response.transactionResponse.transId);
			rewriteQuotesDb();
		}
		else{
			console.log('failed');
			console.log(textStatus);
		}
		messageFunc(textStatus);
	})
}

function  responseHandler(response) {
	if (response.messages.resultCode === 'Error') {
		for (var i = 0; i < response.messages.message.length; i++) {
			console.log(response.messages.message[i].code + ':' + response.messages.message[i].text);
			alert(response.messages.message[i].text);
		}
	} else {
		console.log(response.opaqueData.dataDescriptor);
		console.log(response.opaqueData.dataValue);
		createTransact(response.opaqueData);
	}
}

function acceptJSCaller()
{
	var  secureData  =  {}  ,  authData  =  {}  ,  cardData  =  {};
	cardData.cardNumber  =  document.getElementById('creditCardNumber').value;
	//add cvv
	cardData.month  =  document.getElementById('expiryDateMM').value;
	cardData.year  =  document.getElementById('expiryDateYY').value;
	secureData.cardData  =  cardData;
	authData.clientKey  =  '34a6nAh6cQ55EYR3z8tcsK3pH9c8WVV6qKQ2Bn2zWVE2BkPMHjuN7MNf9kssQZTR';
	authData.apiLoginID  =  '3Dh3gd4ZwG';
	// authData.clientKey  = '5qethK3q4Hg7TtgJ3YDF98Zq5426Nbf26GDhXyGfXtWBKAzLdrfY66zaFJG5MKt8';
	// authData.apiLoginID  =  '2m7ULx4Bva';
	secureData.authData  =  authData;
	Accept.dispatchData(secureData, 'responseHandler');
}

function storeRecord(response){
	console.log(response);
	$.ajax({
		url: $('#submitButton').attr('name') + 'index.php/Cyto/StoreTransactionRecord',
		data: { 
			amount: document.getElementById('amount').value, 
			accountNumber: response.transactionResponse.accountNumber, 
			accountType: response.transactionResponse.accountType,
			authCode : response.transactionResponse.authCode,
			transId : response.transactionResponse.transId,
			messages : response.transactionResponse.messages.message.description

			},
		method: 'POST',
		timeout: 5000

	}).done(function(data) {
		if (data == 'Ok') {
			console.log(data);
		}else{
			console.log(data);
			console.log('failed')
		}
	}).fail(function(){	
		console.log('Error');
	})
}

function saveBillingAddress(transId){
    $.ajax({
		url: $('#submitButton').attr('name') + 'index.php/Cyto/saveBillingAddress',
		data: { 
			billEmail: document.getElementById('email').value, 
			streetAddress: document.getElementById('address').value, 
			zipCode: document.getElementById('zip').value, 
			city : document.getElementById('city').value, 
			country : document.getElementById('country').value, 
			transId : transId
			},
		method: 'POST',
		timeout: 5000
	}).done(function(data) {
		if (data != 'failed') {
			console.log(data);
		}else{		
			console.log(data);
			console.log('failed')
		}
	}).fail(function(){
		console.log('Error');
	})
}

function rewriteQuotesDb(){

	$.ajax({
		url: $('#submitButton').attr('name') + 'index.php/Cyto/rewriteQuotesDb',
		data: {},
		method: 'POST',
		timeout: 5000
	}).done(function(data) {
		if (data == 'Ok') {
			console.log(data);
		}else{		
			console.log(data);
			console.log('failed')
		}
	}).fail(function(){
		console.log('Error');
	})
}


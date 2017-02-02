<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Accept Payment</title>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url('assets/accept/bootstrap.min.css'); ?>" rel="stylesheet">

	<!-- BRONX ICONS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/bronx-icons/css/bronx-icons.min.css'); ?>">
	
	<!-- FANCYBOX -->
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/fancybox/jquery.fancybox.css'); ?>">

	<!-- <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css'); ?>"> -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/pages-style.css'); ?>">

	<link rel="stylesheet" href="<?php echo base_url('assets/css/my-animations.css'); ?>">

	<style type="text/css">
		.navbar {min-height: 0px; margin-bottom: 0px; border: 0px}
		.nav>li {display: inline-block;}
		.navbar-centered .nav > li > a {color: white}
		.navbar-inverse { background-color: #555  } /* #7B7B7B */
		.navbar-centered .nav > li > a:hover{ background-color: white; color: black }
		.navbar-centered .nav .active > a,.navbar-centered .navbar-nav > .active > a:focus { background-color: white; color: black; font-weight:bold; }
		.navbar-centered .navbar-nav { float: none; text-align: center; }
	    .navbar-centered .navbar-nav > li { float: none; }
	    .navbar-centered .nav > li { display: inline; }
	    .navbar-centered .nav > li > a {display: inline-block}
	    #home { color:ivory; margin-left: 15%; margin-right: 15% }

		@media (min-width: 768px) {
	    	.navbar-centered .nav > li > a { width:12%; }
	    	#home { font-size: 30px}
	    }

	    @media (min-width:360px ) and (max-width: 768px){
	    	.navbar-centered .nav > li > a {font-size: 12px}
	    	#home { font-size: 20px}
	    }

	    @media (max-width: 360px) {
	    	.navbar-centered .nav > li > a {font-size: 10px}
	    	#home { font-size: 15px}
	    }

	    @media (min-width: 1022px) {
	    	.modal-dialog { width: 850px}
	    	#add_shipping { height: 300px }
	    }

		/* vertically center the Bootstrap modals */
		.modal {
			text-align: center;
			padding: 0!important;
		}

		.modal:before {
			content: '';
			display: inline-block;
			height: 100%;
			vertical-align: middle;
			margin-right: -4px;
		}

		.modal-dialog {
			display: inline-block;
			text-align: left;
			vertical-align: middle;
		}
	}
	</style>

	<style type="text/css">
	textarea {      
	  width: 700px;
	  height: 350px;
	  overflow-y: scroll;
	}
	</style>

	<script src="<?php echo base_url('assets/accept/jquery-2.1.4.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/accept/bootstrap.min.js'); ?>"></script>
	<!-- <script src="scripts/jquery.cookie.js"></script> -->
	
	
	<!-- <script src="https://jstest.authorize.net/v1/Accept.js"></script> -->
    <script type="text/javascript" src="https://js.authorize.net/v1/Accept.js"></script>
	<script src="<?php echo base_url('assets/js/acceptJSCaller.js'); ?>"></script>

</head>

<body style="padding-top: 50px;">


	<!-- <header> -->
		<?php include "application/templates/navigation_bar.php"; ?>
	<!-- </header> -->
	
	<div class="container-fluid" style="width: 100%; margin: 0; padding:0; height: 100%">


		<div id="terms" style="text-align: center; margin-bottom: 50px; margin-top: 50px;">
			<label for="email"> Terms and Policy</label><br>
			  <textarea readonly>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
			  <br>
			  <input type="checkbox" class="" name="termsCheck" id="termsCheck" /><span style="font-weight: bolder; font-size: 24px; margin-top: 10px; margin-bottom: 10px">please check for continuing transaction</span> 
		</div>
                            
	<div class="container">
	<div class="row">
        <div class="span8">
    		<form action="billing" method="post" class="form-horizontal" id="billingform" accept-charset="utf-8">
    			<div class="control-group">
    				<label for="email" class="control-label">	
    					Billing E-Mail 
    				</label>
    				<div class="controls">
    					<input name="email" type="email" value="" id="email">
    					<span class="help-inline">  Where should we send invoices?</span>
    				</div>
    			</div>
     
    			<div class="control-group">
    				<label for="address" class="control-label">	
    					Street Address
    				</label>
    				<div class="controls"><input name="address" placeholder="W 123 Street" type="text" value="" id="address"><span class="help-inline">  Street Name and/or apartment number</span>
    				</div>
    			</div>
     
    			<div class="control-group">
    				<label for="zip" class="control-label">	
    					Zip Code
    				</label>
    				<div class="controls"><input name="zip" type="text" value="" id="zip">
    				</div>
    			</div>
     
    			<div class="control-group">
    				<label for="city" class="control-label">	
    					City
    				</label>
    				<div class="controls"><input name="city" type="text" value="" id="city">
    				</div>
    			</div>
    			
    			<div class="control-group">
    				<label for="country" class="control-label">	
    					Country
    				</label>
    				<div class="controls">
    					<select name="country" id="country">
    						<option value="">
    						<option value="AR">Argentina
    						<option value="AU">Australia
    						<option value="AT">Austria
    						<option value="BY">Belarus
    						<option value="BE">Belgium
    						<option value="BA">Bosnia and Herzegovina
    						<option value="BR">Brazil
    						<option value="BG">Bulgaria
    						<option value="CA">Canada
    						<option value="CL">Chile
    						<option value="CN">China
    						<option value="CO">Colombia
    						<option value="CR">Costa Rica
    						<option value="HR">Croatia
    						<option value="CU">Cuba
    						<option value="CY">Cyprus
    						<option value="CZ">Czech Republic
    						<option value="DK">Denmark
    						<option value="DO">Dominican Republic
    						<option value="EG">Egypt
    						<option value="EE">Estonia
    						<option value="FI">Finland
    						<option value="FR">France
    						<option value="GE">Georgia
    						<option value="DE">Germany
    						<option value="GI">Gibraltar
    						<option value="GR">Greece
    						<option value="HK">Hong Kong S.A.R., China
    						<option value="HU">Hungary
    						<option value="IS">Iceland
    						<option value="IN">India
    						<option value="ID">Indonesia
    						<option value="IR">Iran
    						<option value="IQ">Iraq
    						<option value="IE">Ireland
    						<option value="IL">Israel
    						<option value="IT">Italy
    						<option value="JM">Jamaica
    						<option value="JP">Japan
    						<option value="KZ">Kazakhstan
    						<option value="KW">Kuwait
    						<option value="KG">Kyrgyzstan
    						<option value="LA">Laos
    						<option value="LV">Latvia
    						<option value="LB">Lebanon
    						<option value="LT">Lithuania
    						<option value="LU">Luxembourg
    						<option value="MK">Macedonia
    						<option value="MY">Malaysia
    						<option value="MT">Malta
    						<option value="MX">Mexico
    						<option value="MD">Moldova
    						<option value="MC">Monaco
    						<option value="ME">Montenegro
    						<option value="MA">Morocco
    						<option value="NL">Netherlands
    						<option value="NZ">New Zealand
    						<option value="NI">Nicaragua
    						<option value="KP">North Korea
    						<option value="NO">Norway
    						<option value="PK">Pakistan
    						<option value="PS">Palestinian Territory
    						<option value="PE">Peru
    						<option value="PH">Philippines
    						<option value="PL">Poland
    						<option value="PT">Portugal
    						<option value="PR">Puerto Rico
    						<option value="QA">Qatar
    						<option value="RO">Romania
    						<option value="RU">Russia
    						<option value="SA">Saudi Arabia
    						<option value="RS">Serbia
    						<option value="SG">Singapore
    						<option value="SK">Slovakia
    						<option value="SI">Slovenia
    						<option value="ZA">South Africa
    						<option value="KR">South Korea
    						<option value="ES">Spain
    						<option value="LK">Sri Lanka
    						<option value="SE">Sweden
    						<option value="CH">Switzerland
    						<option value="TW">Taiwan
    						<option value="TH">Thailand
    						<option value="TN">Tunisia
    						<option value="TR">Turkey
    						<option value="UA">Ukraine
    						<option value="AE">United Arab Emirates
    						<option value="GB">United Kingdom
    						<option value="US">USA
    						<option value="UZ">Uzbekistan
    						<option value="VN">Vietnam
    					</select>
    				</div>
    			</div>
     
    			<!-- <div class="form-actions">
    				<button type="submit" class="btn btn-large btn-primary">Save Billing Address</button>
    			</div> -->

    		</form>
    	</div> <!-- .span8 -->
    	<button onclick="showNext()"> Continue </button>
	</div>
</div>

	<!-- hidden receipt page -->
	<div id='container2' class="container" style="display: none; margin-top: 100px;">
		<table cellpadding="0" cellspacing="0" style="margin: auto; width: 100%;">
            <tr class="top">
                <td colspan="2">
                    <table style="width: 100%;">
                        <tr>
                            <td class="title">
                                <img src="http://nextstepwebs.com/images/logo.png" style="width:100%; max-width:300px;">
                            </td>
                            
                            <td>
                                Invoice #: 123<br>
                                Created: January 1, 2015<br>
                                Due: February 1, 2015
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                Next Step Webs, Inc.<br>
                                12345 Sunny Road<br>
                                Sunnyville, TX 12345
                            </td>
                            
                            <td>
                                Acme Corp.<br>
                                John Doe<br>
                                john@example.com
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <!-- <br>
            <br>
            <br> -->
            <tr class="heading">
                <td>
                    Quote ID
                </td>
                
                <td>
                    Price &#36
                </td>
            </tr>
            
            <?php for( $i = 0; $i< count($quoteIds); $i++ ) {
                # code...
            ?>
            <tr class="item">
                <td>
                    <?php echo $quoteIds[$i]; ?>
                </td>
                
                <td>
                    <?php echo $quoteCharges[$i]; ?>
                </td>
            </tr>
            <?php } ?>

            <!-- billing address -->
            <tr class="heading">
                <td>
                    Billing Info
                </td>

                <td>
                    
                </td>
            </tr>
            
            <!-- <br>
            <br>
            <br> -->
            <tr class="item">
                <td>
                    Billing Email : 
                </td>
                
                <td>
                    <span id="bill_email"></span>
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    Street Address :
                </td>
                
                <td>
                    <span id="bill_streetaddr"></span>
                </td>
            </tr>

            <tr class="item">
                <td>
                    City :
                </td>
                
                <td>
                    <span id="bill_city"></span>
                </td>
            </tr>

            <tr class="item">
                <td>
                    Country :
                </td>
                
                <td>
                    <span id="bill_country"></span>
                </td>
            </tr

            <tr class="item last">
                <td>
                    Zipcode :
                </td>
                
                <td>
                    <span id="bill_zipcode"></span>
                </td>
            </tr>            

            <tr class="total">
                <td></td>
                
                <td>
                   Total: <?php echo $TotelCharge; ?> &#36
                </td>
            </tr>
        </table>

        			<br/><br/><br/><p><button type="button" id="acceptJSPayButton" class="btn btn-primary btn-lg col-sm-offset-3 col-sm-2 col-xs-offset-3 col-xs-6" style="font-weight: bolder; font-size: 24px; margin-top: 10px; margin-bottom: 10px" data-toggle="modal" data-target="#acceptJSPayModal">Pay</button>

			<button type="button" id="acceptJSCancelButton" class="btn btn-primary btn-lg col-sm-offset-3 col-sm-2 col-xs-offset-3 col-xs-6" style="font-weight: bolder; font-size: 24px; margin-top: 10px; margin-bottom: 10px" data-toggle="modal" data-target="#acceptJSPayModal" onclick="cancelTransaction()">Cancel </button>
		
			</p>
			<br>         
		</div>

		<div id="acceptJSReceiptModal" class="modal fade" role="dialog">
			<div class="modal-dialog" style="display: inline-block; vertical-align: middle;">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Accept.js Example</h4>
					</div>
					<div class="modal-body" id="acceptJSReceiptBody">
					
					</div>
				</div>
			</div>
		</div>
		
		<!-- Modal -->
		<div id="acceptJSPayModal" class="modal fade" role="dialog">
		<div class="modal-dialog" style="display: inline-block; vertical-align: middle;">
			<!-- Modal content-->
			<div class="modal-content">
				
				<div class="modal-header">
					<h4 class="modal-title">ACCEPT.JS EXAMPLE</h4>
				</div>
				
				<div class="modal-body" id="acceptJSPayBody">
					<!--form role="form"-->

						<div class="form-group col-xs-8">
							<label for="creditCardNumber">CREDIT CARD NUMBER</label>
							<input type="tel" class="form-control" id="creditCardNumber" placeholder="4111111111111111" value="4111111111111111" autocomplete="off"/>
						</div>
						<div class="form-group col-xs-4">
							<label for="cvv">CVV</label>
							<input type="text" class="form-control" id="cvv" placeholder="123" autocomplete="off"/>
						</div>

						<!--div class="form-group col-xs-6 col-xs-offset-1" style="margin-bottom: 2px; border: 2px solid; border-color: #ccc; border-radius: 3px">
							<span style="color: #999; font-weight: 550;">Expiry Date</span>
						</div>
						<div class="form-group col-xs-5" style="margin-bottom: 7px;">
							<span style="opacity: 0">Filler</span>
						</div-->
	
					<div>
					
						<div class="form-group col-xs-5">
							<label for="expiryDateYY">EXP. DATE</label>
							<input type="text" class="form-control" id="expiryDateYY" placeholder="YYYY"/>
						</div>
						
						<div class="form-group col-xs-3">
							<label for="expiryDateMM" style="opacity: 0">MONTH</label>
							<input type="text" class="form-control" id="expiryDateMM" placeholder="MM"/>
						</div>

					
						<div class="form-group col-xs-4">
						<!-- <label for="amount">AMOUNT</label> -->
							<input type="hidden" class="form-control" id="amount" value="<?php echo $TotelCharge; ?>"/>
						</div>
						
					</div>
						
					<!--/form-->
					<div style="text-align: center; margin-top: 20%;">
						<button type="button" name="<?php echo base_url();?>" id="submitButton" class="btn btn-primary" style="width: 95%;">SUBMIT</button>
					</div>
					
				</div>
				
			</div>
		</div>
		</div>
	</div>
	<!-- hidden receipt page -->

		<div id="acceptJSPayDiv" style="position:relative; bottom:15%; width: 100%; text-align:center">

		
	</div>

	<!-- <FOOTER> -->
	<div>
			<?php include "application/templates/footer.php"; ?>
	</div>
	<!-- </FOOTER> -->
</body>

<script>
	$('#container2').hide();

	$('#acceptJSPayButton').click(function(e){
		e.preventDefault();
	});
	$('#submitButton').click(function(e){
		e.preventDefault();
		acceptJSCaller();
	});

	function returnback(){
		window.location.href = $('#submitButton').attr('name') + 'index.php/Cyto_bioformatics/receiptPage';
	}

	function cancelTransaction(){
		window.location.href = $('#submitButton').attr('name') + 'index.php/Cyto_bioformatics/buyingAndPayment';
	}

	function showNext(){

    if ($('#termsCheck').is(':checked')) {

        if ($("input[name='email']").val() && $("input[name='address']").val() && $("input[name='zip']").val() && $("input[name='city']").val() && $("#country").val()) 
        {
            var email = $("input[name='email']").val();
            var address = $("input[name='address']").val();
            var zip = $("input[name='zip']").val();
            var city = $("input[name='city']").val();
            var country = $("#country").val();

            document.getElementById('bill_email').innerHTML = email;
            document.getElementById('bill_streetaddr').innerHTML = address;
            document.getElementById('bill_city').innerHTML = city;
            document.getElementById('bill_country').innerHTML = country;
            document.getElementById('bill_zipcode').innerHTML = zip;

        }else
        {
            alert('Bill Info is not complete, please check before Continue');
            return false;
        }

    }else{
        alert('please check the term agreement button');
        return false;
    }

		$('#container2').show();
		goToByScroll('#container2');
	}

	function goToByScroll(id){
	    $('html,body').animate({
	        scrollTop: $(id).offset().top -100},
	        'fast');
	}

</script>

	<script src="<?php echo base_url('assets/plugins/viewport/jquery.viewport.js'); ?>"></script>
	
	<!-- MENU -->
	<script src="<?php echo base_url('assets/plugins/menu/hoverIntent.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/menu/superfish.js'); ?>"></script>
	
	<!-- FANCYBOX -->
	<script src="<?php echo base_url('assets/plugins/fancybox/jquery.fancybox.pack.js'); ?>"></script>

</html>

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

    <!-- FONTS -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    
	<!-- BOOTSTRAP CSS -->
	<link href="<?php echo base_url('assets/accept/bootstrap.min.css'); ?>" rel="stylesheet">

	<!-- BRONX ICONS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/bronx-icons/css/bronx-icons.min.css'); ?>">
	
	<!-- FANCYBOX -->
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/fancybox/jquery.fancybox.css'); ?>">
    
    <!-- CUSTOM & PAGES STYLE -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/pages-style.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/my-styles.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/forms.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/invoice.css'); ?>">
  
</head>

<body>
    <header id="header-container">
        <?php include "application/templates/navigation_bar.php"; ?>
    </header>
	
	<div class="container-fluid" style="width: 60%; margin: auto; padding-top: 100px; height: 100%">
		<div id="terms" style="text-align: center; margin-bottom: 50px; margin-top: 50px; width=60%;">
            <h2>Terms and Conditions</h2><br>
            <textarea readonly>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
            <br>
            <div>
    			<input type="checkbox" class="" name="termsCheck" id="termsCheck" style="height:50px" /><span style="font-weight: bolder; font-size: 24px; margin-top: 10px; margin-bottom: 10px">I understand these terms and agree to continue.</span> 
            </div>
		</div>
                            
        <div class="container" style="width: 80%;">
            <div class="row">
                <div class="form">
                    <form action="billing" method="post" class="form-horizontal" id="billingform" accept-charset="utf-8">
                        <div class="top-row">
                            <div class="field-wrap" style="margin-bottom: 20px;">
                                <label for="email">Billing E-Mail</label>
                                <input name="email" type="email" value="" id="email">
                            </div>
                        </div>
                        
                        <div class="top-row">
                            <div class="field-wrap" style="margin-bottom: 20px;">
                                <label for="address">Street Address</label>
                                <input name="address" type="text" value="" id="address">
                            </div>
                        </div>

                        <div class="top-row">
                            <div class="field-wrap" style="margin-bottom: 20px;">
                                <label for="city">City</label>
                                <input name="city" type="text" value="" id="city">
                            </div>
                        </div>

                        <div class="top-row">
                                <div class="field-wrap" style="margin-bottom: 20px;">
                                <label for="zip">Zip Code</label>
                                <input name="zip" type="text" value="" id="zip">
                            </div>
                        </div>

                        <div class="top-row">
                            <div class="field-wrap" style="margin-bottom: 20px;">
                                <label class='active highlight' for="country">Country</label>
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
                    
                        <div class="AuthorizeNetSeal"> 
                            <script type="text/javascript" language="javascript">var ANS_customer_id="f9affc83-ee34-4e20-a9a1-5356d6b52d27";</script> <script type="text/javascript" language="javascript" src="//verify.authorize.net/anetseal/seal.js" ></script> <a href="http://www.authorize.net/" id="AuthorizeNetText" target="_blank">Accept Credit Cards Online</a><br>
                        </div>
                    </form>

                    <button onclick="showNext()" class="btn-lg button" style="width: 200px; padding-left: 15px; padding-right: 15px; margin: 15px 0 15px 0;"> Continue </button>

                </div>
            </div>
        </div>

        <!-- hidden receipt page -->
        <div id='container2' class="container invoice-box" style="display: none; margin-top: 100px;">
            <table cellpadding="0" cellspacing="0" style="margin: auto; width: 100%;">
                <tr class="top">
                    <td colspan="2">
                        <table style="width: 100%;">
                            <tr>
                                <td class="title">
                                    <img src="<?php echo base_url('assets/images/cyto_logo_orgdark_sharp.png'); ?>" style="width:100%; max-width:150px;">
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
                                    CytoInformatics, LLC<br>
                                    105 Haynes Circle<br>
                                    Nicholasville, KY, 40356
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

                    <td></td>
                </tr>

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
                </tr>

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

            <br/>
            <br/>
            <br/>
            <p>
                <button type="button" id="acceptJSPayButton" class="btn-lg button" style="width: 200px; padding-left: 15px; padding-right: 15px; margin: 15px 0 15px 0;" data-toggle="modal" data-target="#acceptJSPayModal">Pay</button>

                <button type="button" id="acceptJSCancelButton" class="btn-lg button" style="width: 200px; padding-left: 15px; padding-right: 15px; margin: 15px 0 15px 0;" data-toggle="modal" data-target="#acceptJSPayModal" onclick="cancelTransaction()">Cancel </button>
            </p>
            <br>         
        </div>

        <div id="acceptJSReceiptModal" class="modal fade" role="dialog">
            <div class="modal-dialog" style="display: block; vertical-align: middle; bottom: 0px;">
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
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title">Pay with your credit card</h4>
                    </div>

                    <div class="modal-body" id="acceptJSPayBody" style="margin-top: 10px;">
                        <!--form role="form"-->

                        <div class="form-group col-xs-8">
                            <label for="creditCardNumber">Credit card number</label>
                            <input type="tel" class="form-control" id="creditCardNumber" placeholder="" value="" autocomplete="off"/>
                        </div>
                        <div class="form-group col-xs-4">
                            <label for="cvv">CVV</label>
                            <input type="text" class="form-control" id="cvv" placeholder="" autocomplete="off"/>
                        </div>

                        <!--div class="form-group col-xs-6 col-xs-offset-1" style="margin-bottom: 2px; border: 2px solid; border-color: #ccc; border-radius: 3px">
                            <span style="color: #999; font-weight: 550;">Expiry Date</span>
                        </div>
                        <div class="form-group col-xs-5" style="margin-bottom: 7px;">
                            <span style="opacity: 0">Filler</span>
                        </div-->

                        <div>
                            <div class="form-group col-xs-5">
                                <label for="expiryDateYY">Exp. date (YYYY)</label>
                                <input type="text" class="form-control" id="expiryDateYY" placeholder=""/>
                            </div>

                            <div class="form-group col-xs-3">
                                <label for="expiryDateMM">Month (MM)</label>
                                <input type="text" class="form-control" id="expiryDateMM" placeholder=""/>
                            </div>

                            <div class="form-group col-xs-4">
                            <!-- <label for="amount">AMOUNT</label> -->
                                <input type="hidden" class="form-control" id="amount" value="<?php echo $TotelCharge; ?>"/>
                            </div>
                        </div>

                        <!--/form-->
                        <div style="text-align: center; margin-top: 20%;">
                            <button type="button" name="<?php echo base_url();?>" id="submitButton" class="btn-lg button" style="width: 200px; padding-left: 15px; padding-right: 15px; margin: 15px 0 15px 0;">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>

    <div id="acceptJSPayDiv" style="position:relative; bottom:15%; width: 100%; text-align:center"></div>

	<!-- <FOOTER> -->
    <?php include "application/templates/footer.php"; ?>

	<script src="<?php echo base_url('assets/accept/jquery-2.1.4.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/accept/bootstrap.min.js'); ?>"></script>
	

	 <script src="https://jstest.authorize.net/v1/Accept.js"></script> 
<!--    <script type="text/javascript" src="https://js.authorize.net/v1/Accept.js"></script>-->

	<script src="<?php echo base_url('assets/js/acceptJSCaller.js'); ?>"></script>

    <script src="<?php echo base_url('assets/plugins/viewport/jquery.viewport.js'); ?>"></script>

    <!-- MENU -->
    <script src="<?php echo base_url('assets/plugins/menu/hoverIntent.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/menu/superfish.js'); ?>"></script>

    <!-- FANCYBOX -->
    <script src="<?php echo base_url('assets/plugins/fancybox/jquery.fancybox.pack.js'); ?>"></script>	
    
    <!-- QUOTEFORM JS -->
	<script src="<?php echo base_url('assets/js/quoteform.js'); ?>"></script>

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
    
</body>

</html>

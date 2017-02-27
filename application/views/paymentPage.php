<!doctype html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<meta name="keywords" content="">
	<meta name="description" content="">
	
	<title>Intelligence for Medicine | CytoInformatics</title>
	
	<!-- FAVICON AND APPLE TOUCH -->    
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url('images/favicon/apple-icon-57x57.png') ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url('images/favicon/apple-icon-60x60.png') ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('images/favicon/apple-icon-72x72.png') ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('images/favicon/apple-icon-76x76.png') ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('images/favicon/apple-icon-114x114.png') ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('images/favicon/apple-icon-120x120.png') ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url('images/favicon/apple-icon-144x144.png') ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('images/favicon/apple-icon-152x152.png') ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('images/favicon/apple-icon-180x180.png') ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url('images/favicon/android-icon-192x192.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('images/favicon/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('images/favicon/favicon-96x96.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('images/favicon/favicon-16x16.png') ?>">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo base_url('images/favicon/ms-icon-144x144.png') ?>">
    <meta name="theme-color" content="#ffffff">
	
	<!-- FONTS -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
	
	<!-- BOOTSTRAP CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>"> 
	
	<!-- FONT AWESOME -->
	<link rel="stylesheet" href="<?php echo base_url('assets/fonts/fontawesome/css/font-awesome.min.css'); ?>">
	
	<!-- FANCYBOX -->
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/fancybox/jquery.fancybox.css'); ?>">
	
	<!-- ANIMATIONS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/animations/animate.min.css'); ?>">
	
	<!-- CUSTOM & PAGES STYLE -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/pages-style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/my-styles.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">

</head>

<body class="header-boxed">

	<div id="main-container">
		
		<!-- HEADER -->
		<header id="header-container" style="height: 90px">
			<!-- NAVIGATION BAR -->
			<?php include "application/templates/navigation_bar.php"; ?>
		</header><!-- HEADER CONTAINER -->
		
		
		<!-- PAGE CONTENT -->
		<div id="page-content">
			
			<!-- SERVICES -->
			<div class="container">
                <div class="row">
                    <div class="col-sm-12">
						<div class="headline text-center" style="margin-bottom: 20px;">
							<h2 id="TotalCharge" name="<?php echo $TotelCharge;?>" >TotalCharge: <?php  echo $TotelCharge;?> &#36;</h2>
						</div><!-- headline -->
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
			

            <div id="acceptJSPayModal" role="dialog">
                <!-- Modal-->
                <div class="modal-dialog" style="display: inline-block; vertical-align: middle;">
                    <div>
                        <h4>ACCEPT.JS </h4>
                    </div>

                    <div id="acceptJSPayBody">
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
                                <input type="hidden" class="form-control" id="amount" placeholder="<?php  echo $TotelCharge;?>"/>
                            </div>
                        </div>

                        <!--/form-->
    <!-- 					<div style="text-align: center; margin-top: 20%;">
                            <button type="button" id="submitButton" class="btn btn-primary" style="width: 95%;">SUBMIT</button>
                        </div> -->                
                        <div>
                            <input type="button" name="<?php echo base_url('index.php'); ?>" id="checkout" value="Purchase Now!">
                            <input type="button" name="<?php echo base_url('index.php'); ?>" id="cancel" value="Cancel">
                        </div>
                    </div>
                </div>

            </div>
		</div>

        <!-- FOOTER -->
        <?php include "application/templates/footer.php"; ?>
	</div><!-- MAIN CONTAINER -->
	
	<!-- SCROLL UP -->
	<a id="scroll-up"><i class="fa fa-angle-up"></i></a>
	
	<!-- jQUERY -->
	<script src="<?php echo base_url('assets/plugins/jquery/jquery-2.2.2.min.js'); ?>"></script>
	
	<!-- BOOTSTRAP JS -->
	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
	
	<!-- VIEWPORT -->
	<script src="<?php echo base_url('assets/plugins/viewport/jquery.viewport.js'); ?>"></script>
	
	<!-- MENU -->
	<script src="<?php echo base_url('assets/plugins/menu/hoverIntent.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/menu/superfish.js'); ?>"></script>
	
	<!-- FANCYBOX -->
	<script src="<?php echo base_url('assets/plugins/fancybox/jquery.fancybox.pack.js'); ?>"></script>
	
	<!-- ISOTOPE -->
	<script src="<?php echo base_url('assets/plugins/isotope/imagesloaded.pkgd.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/isotope/isotope.pkgd.min.js'); ?>"></script>
	
	<!-- PLACEHOLDER -->
	<script src="<?php echo base_url('assets/plugins/placeholders/jquery.placeholder.min.js'); ?>"></script>
	
	<!-- CONTACT FORM VALIDATE & SUBMIT -->
	<script src="<?php echo base_url('assets/plugins/validate/jquery.validate.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/submit/jquery.form.min.js'); ?>"></script>
	
	<!-- COUNTER -->
	<script src="<?php echo base_url('assets/plugins/counter/jquerysimplecounter.js'); ?>"></script>
	
	<!-- STATISTICS -->
	<script src="<?php echo base_url('assets/plugins/statistics/chart.min.js'); ?>"></script>

	<!-- INSTAFEED -->
	<script src="<?php echo base_url('assets/plugins/instafeed/instafeed.min.js'); ?>"></script>
	
	<!-- COUNTDOWN -->
	<script src="<?php echo base_url('assets/plugins/countdown/jquery.countdown.min.js'); ?>"></script>
	
	<!-- ANIMATIONS -->
	<script src="<?php echo base_url('assets/plugins/animations/wow.min.js'); ?>"></script>
	
	<!-- CUSTOM JS -->
	<script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>

	<script type="text/javascript" src="https://jstest.authorize.net/v1/Accept.js" charset="utf-8"></script>


</body>

</html>
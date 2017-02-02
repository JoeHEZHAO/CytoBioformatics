<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<meta name="keywords" content="">
	<meta name="description" content="">
	
	<title>Intelligence for Medicine | CytoInformatics</title>
	
	<!-- FAVICON AND APPLE TOUCH -->    
	<meta name="msapplication-TileImage" content="mstile.png">
	
	<!-- FONTS -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
	
	<!-- BOOTSTRAP CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>"> 
	
	<!-- FONT AWESOME -->
	<link rel="stylesheet" href="<?php echo base_url('assets/fonts/fontawesome/css/font-awesome.min.css'); ?>">
	
	<!-- BRONX ICONS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/bronx-icons/css/bronx-icons.min.css'); ?>">
	
	<!-- FANCYBOX -->
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/fancybox/jquery.fancybox.css'); ?>">
	
	<!-- REVOLUTION SLIDER -->
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/revolutionslider/css/settings.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/revolutionslider/css/layers.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/revolutionslider/css/navigation.css'); ?>">
	
	<!-- OWL Carousel -->
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/owl-carousel/owl.carousel.css'); ?>">
	
	<!-- YOUTUBE PLAYER -->
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/ytplayer/css/jquery.mb.ytplayer.min.css'); ?>">
	
	<!-- ANIMATIONS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/animations/animate.min.css'); ?>">
	
	<!-- CUSTOM & PAGES STYLE -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/pages-style.css'); ?>">
	
	<!-- MY ANIMATIONS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/my-animations.css'); ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">

    <!-- <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" /> -->
	  
	<link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>" />

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
		
			<!-- WORKFLOW -->
			<!-- <div class="workflow-animation" style="background-image: url(<?php echo base_url('images/index/revolution-slider/diamond_bladder.png'); ?>);">
				<div class="slide tp-caption">
					 <img src="<?php echo base_url('images/index/revolution-slider/slide-2-image-1.png'); ?>" alt="">
				</div>

				<div class="slide-excerpt tp-caption">
					 <img src="<?php echo base_url('images/index/revolution-slider/slide-2-image-2.png'); ?>" alt="">
				</div>

				<div class="fadein-header1 tp-caption small-title">
					 Give life to your images
				</div> 
				
				<div class="fadein-text1 tp-caption text">
					 Extract real insight from medical imaging data
				</div> 
				
				<div class=tp-caption>
					<div class="fadein-object1 tp-caption">
						 <img class="barplot" src="<?php echo base_url('images/index/revolution-slider/slide-2-image-3.png'); ?>" alt="">
					</div>

					<div class="fadein-object1 tp-caption">
						 <img class="barplot_bar1" src="<?php echo base_url('images/index/revolution-slider/slide-2-image-4.png'); ?>" alt="">
					</div>

					<div class="fadein-object1 tp-caption"
						 <img class="barplot_bar2" src="<?php echo base_url('images/index/revolution-slider/slide-2-image-5.png'); ?>" alt="">
					</div>

					<div class="fadein-object1 tp-caption">
						 <img class="barplot_bar3" src="<?php echo base_url('images/index/revolution-slider/slide-2-image-6.png'); ?>" alt="">
					</div>
				</div>
			</div> -->
			
			<!-- SERVICES -->
			<div class="container">
                <div class="row">
                    <div class="col-sm-12">
						<div class="headline text-center" style="margin-bottom: 20px;">
							<h2 id="TotalCharge" name="<?php  echo $TotelCharge;?>" >TotalCharge: <?php  echo $TotelCharge;?> &#36;</h2
						</div><!-- headline -->
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
			

		<div id="acceptJSPayModal" role="dialog">
		<div class="modal-dialog" style="display: inline-block; vertical-align: middle;">
			<!-- Modal content-->
			<div>
				
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
					
				</div>
				
			</div>
		</div>
		</div>

		<div>
			<input type="button" name="<?php echo base_url('index.php'); ?>" id="checkout" value="Purchase Now!">
			<input type="button" name="<?php echo base_url('index.php'); ?>" id="cancel" value="Cancel">
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
	
	<!-- REVOLUTION SLIDER  -->
	<script src="<?php echo base_url('assets/plugins/revolutionslider/js/jquery.themepunch.tools.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/revolutionslider/js/jquery.themepunch.revolution.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/revolutionslider/js/extensions/revolution.extension.actions.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/revolutionslider/js/extensions/revolution.extension.carousel.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/revolutionslider/js/extensions/revolution.extension.kenburn.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/revolutionslider/js/extensions/revolution.extension.layeranimation.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/revolutionslider/js/extensions/revolution.extension.migration.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/revolutionslider/js/extensions/revolution.extension.navigation.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/revolutionslider/js/extensions/revolution.extension.parallax.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/revolutionslider/js/extensions/revolution.extension.slideanims.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/revolutionslider/js/extensions/revolution.extension.video.min.js'); ?>"></script>
	
	<!-- OWL Carousel -->
	<script src="<?php echo base_url('assets/plugins/owl-carousel/owl.carousel.min.js'); ?>"></script>
	
	<!-- PARALLAX -->
	<script src="<?php echo base_url('assets/plugins/parallax/jquery.stellar.min.js'); ?>"></script>
	
	<!-- ISOTOPE -->
	<script src="<?php echo base_url('assets/plugins/isotope/imagesloaded.pkgd.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/isotope/isotope.pkgd.min.js'); ?>"></script>
	
	<!-- PLACEHOLDER -->
	<script src="<?php echo base_url('assets/plugins/placeholders/jquery.placeholder.min.js'); ?>"></script>
	
	<!-- CONTACT FORM VALIDATE & SUBMIT -->
	<script src="<?php echo base_url('assets/plugins/validate/jquery.validate.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/submit/jquery.form.min.js'); ?>"></script>
	
	<!-- GOOGLE MAPS -->
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="<?php echo base_url('assets/plugins/googlemaps/gmap3.min.js'); ?>"></script>
	
	<!-- CHARTS -->
	<script src="<?php echo base_url('assets/plugins/charts/jquery.easypiechart.min.js'); ?>"></script>
	
	<!-- COUNTER -->
	<script src="<?php echo base_url('assets/plugins/counter/jquerysimplecounter.js'); ?>"></script>
	
	<!-- STATISTICS -->
	<script src="<?php echo base_url('assets/plugins/statistics/chart.min.js'); ?>"></script>
	
	<!-- YOUTUBE PLAYER -->
	<script src="<?php echo base_url('assets/plugins/ytplayer/jquery.mb.ytplayer.min.js'); ?>"></script>
	
	<!-- INSTAFEED -->
	<script src="<?php echo base_url('assets/plugins/instafeed/instafeed.min.js'); ?>"></script>
	
	<!-- COUNTDOWN -->
	<script src="<?php echo base_url('assets/plugins/countdown/jquery.countdown.min.js'); ?>"></script>
	
	<!-- ANIMATIONS -->
	<script src="<?php echo base_url('assets/plugins/animations/wow.min.js'); ?>"></script>
	
	<!-- CUSTOM JS -->
	<script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>

	<sscript type="text/javascript" src="https://jstest.authorize.net/v1/Accept.js" charset="utf-8"></script>
	<!-- <script type="text/javascript" src="https://js.authorize.net/v1/Accept.js" charset="utf-8"></script> -->

	<script type="text/javascript" src="<?php echo base_url('assets/js/accept_payment.js'); ?>"></script>


</body>

</html>
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<meta name="keywords" content="">
	<meta name="description" content="">
	
	<title>Turning Sight Into Insight | CytoInformatics</title>
	
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
	
	<!-- BRONX ICONS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/bronx-icons/css/bronx-icons.min.css'); ?>">
	
	<!-- FANCYBOX -->
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/fancybox/jquery.fancybox.css'); ?>">
	
	<!-- REVOLUTION SLIDER 
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/revolutionslider/css/settings.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/revolutionslider/css/layers.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/revolutionslider/css/navigation.css'); ?>">-->
	
	<!-- OWL Carousel 
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/owl-carousel/owl.carousel.css'); ?>">-->
	
	<!-- YOUTUBE PLAYER 
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/ytplayer/css/jquery.mb.ytplayer.min.css'); ?>">-->
	
	<!-- ANIMATIONS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/animations/animate.min.css'); ?>">
	
	<!-- CUSTOM & PAGES STYLE -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/pages-style.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/my-styles.css'); ?>">
	
	<!-- MY ANIMATIONS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/my-animations.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/kenburns.css'); ?>">
	

</head>

<body class="header-boxed">

	<div id="main-container">
		
		<!-- HEADER -->
		<header id="header-container">
			<!-- NAVIGATION BAR -->
			<?php include "application/templates/navigation_bar.php"; ?>
			
		</header><!-- HEADER CONTAINER -->
		
		
		<!-- PAGE CONTENT -->
		<div id="page-content">
            
            <!-- KEN BURNS SLIDER -->
            <div class="intro-section">
                <div id="kenburns-slideshow"></div>
<!--
                <div class="intro-section-imgdiv">
                    <img class="intro-section-sideimg" src="<?php echo base_url('images/kenburns/kb-0.jpg'); ?>" alt=""/>
                </div>
-->
                
                <div class="intro-section rectangle" style="z-index: 1; background-image: url(<?php echo base_url('images/backgrounds/intro_bg.png'); ?>); background-repeat: no-repeat;">
                    <!--<img class="intro-section-image" src="<?php echo base_url('images/index/revolution-slider/cyto_dark.png'); ?>" alt="">-->
                    
                    <div class="intro-section-card">
                        <div class="intro-section-small-title">
                            <p>Turning Sight Into</p>
                        </div>

                        <div class="intro-section-big-title">
                            <p class="text-alt-color">Insight</p>
                        </div>

                        <div class="intro-section-caption" style="top: 50px;">
                             <p>You focus on science and health, <br>We help you with data</p> 
                        </div>

                        <div class="tp-caption" style="position: relative; top: 60px;">
                             <a class="btn btn-default" href="<?php echo base_url('index.php/cyto_bioformatics/login'); ?>">Get Started <i class="bronx-icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
			
			<!-- LIVE DEMO SPAN -->
			<section class="full-section dark-section parallax" id="section-2" data-stellar-background-ratio="0.1">
				<div class="full-section-overlay-color"></div>
				<div class="full-section-container">
				
					<div class="container">
						<div class="row">
							<div class="col-sm-9">
								
								<h3 class="last">Curious? <a href="<?php echo base_url('index.php/cyto_bioformatics/demo'); ?>">Click here to see a live demo.</a></h3>
								
							</div><!-- col -->
							<div class="col-sm-3 text-right">
								
								<a class="btn btn-default" href="<?php echo base_url('index.php/cyto_bioformatics/demo'); ?>">Learn More <i class="bronx-icon-arrow-right"></i></a>
								
							</div><!-- col -->
						</div><!-- row -->
					</div><!-- container -->
					
				</div><!-- full-section-container -->
			</section><!-- full-section -->
			
			
			<!-- PLATFORM INFO -->
			<section class="full-section parallax" id="section-1" data-stellar-background-ratio="0.1">
				<div class="full-section-container">
					
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<h1>Let us turn your <br>images into <span class="text-alt-color">insight</span></h1>
								<!-- <h1>We <span class="text-default-color">data</span> to make things <br class="hidden-xs hidden-sm"> easy and fun</h1> -->
							</div><!-- col -->
						</div><!-- row -->
					</div><!-- container -->
					
					<br>
					
					<div class="container">
						<div class="row">
							<div class="col-sm-7 text-dark">
								
								<p>Our unique online platform combines cutting-edge artificial intelligence, advanced machine learning, and modern computer vision to provide the most robust, accurate, and rapid image analysis services. Simply upload your images through our secure data portal and we will handle the rest.</p>
								
								<br>
								
								<div class="col-sm-6">
									<ul class="check-list check-list-alt">
										<li>Secure</li>
										<li>Robust</li>
										<li>Reliable</li>
									</ul>
								</div>
								<div class="col-sm-6">
									<ul class="check-list check-list-alt">
										<li>Fast</li>
                                        <li>Accurate</li>
										<li>Customizable</li>
									</ul>
								</div>
								<br>
								
							</div><!-- col -->
							<div class="col-lg-offset-1 col-lg-4 col-sm-5">
								<div class="row">
                                    <div class="counter style-2 text-dark">
                                        <div class="counter-details counter-details-alt my-ctr-label">Speed</div>
                                        <div class="counter-value" data-value="1000" data-symbol-after=" millisec" style="font-size:48px;"></div>
                                        <p>or less per image</p>
                                    </div><!-- counter -->
                                </div>
                                
                                <div class="row">
                                    <div class="counter style-2 text-dark">
                                        <div class="counter-details counter-details-alt my-ctr-label">Accuracy</div>
                                        <div class="counter-value" data-value="99" data-symbol-after="%"></div>
                                    </div><!-- counter -->
								</div><!-- row -->
							</div><!-- col -->
						</div><!-- row -->
					</div><!-- container -->
					
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<a class="btn btn-default btn-default-alt" href="<?php echo base_url('index.php/cyto_bioformatics/pricing'); ?>">Check out our pricing model <i class="bronx-icon-arrow-right btn-default-alt-hover"></i></a>
							</div><!-- col -->
						</div><!-- row -->
					</div><!-- container -->
					
				</div><!-- full-section-container -->
			</section><!-- full-section -->
			
			<!-- COUNTER EFFECTS -->
			<section class="full-section dark-section" id="section-4">
				<div class="full-section-container">
					<div class="container-fluid">
						<div class="row">
						
							<div class="col-sm-2 visible-lg-block">
								<a class="more-facts" href="#"><img src="<?php echo base_url('assets/images/cyto_logo_white_sharp.png'); ?>" style="width: 100px; height: 100px" alt="<?php echo base_url();?>"></a>
							</div><!-- col -->
							
							<div class="col-lg-2 col-sm-3">
								<div class="counter">
									<div class="counter-value" data-value="10000"></div>
									<div class="counter-details">Images Processed</div>
								</div><!-- counter -->
							</div><!-- col -->
							
							<div class="col-lg-2 col-sm-3">
								<div class="counter">
									<div class="counter-value" data-value="160"></div>
									<div class="counter-details">Projects Completed</div>
								</div><!-- counter -->
							</div><!-- col -->
							
							<div class="col-lg-2 col-sm-3">
								<div class="counter">
									<div class="counter-value" data-value="53"></div>
									<div class="counter-details">Active Users</div>
								</div><!-- counter -->
							</div><!-- col -->
							
							<div class="col-lg-2 col-sm-3">
								<div class="counter">
									<div class="counter-value" data-value="40"></div>
									<div class="counter-details">Active Sites</div>
								</div>
							</div>
							
							<div class="col-sm-2 visible-lg-block">
								<a class="more-facts" href="#"></a>
							</div><!-- col -->
							
						</div><!-- row -->
					</div><!-- container -->
				</div><!-- full-section-container -->
			</section><!-- full-section -->
			
			<!-- POWERFULL -->
			<div class="container">
				<div class="row">
					<div class="col-lg-offset-1 col-lg-5 col-sm-6">
						<img src="<?php echo base_url('assets/images/semantic_components2.png'); ?>">
					</div><!-- col -->
					
					<div class="col-lg-5 col-sm-6">
						<h4 class="text-default-color"><small>Find the information that is <br>most important</small></h4>
						<br>
						<p>Let us know the information that you desire to extract from your images. Images are processed by both modern computer vision algorithms and cutting-edge machine learning methods using our unique online platform. We follow up with validation by human experts to ensure your final report has the highest quality possible. Learning from your biomedical images has never been this effective and worry-free.</p>
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- container -->
			
			<br><br>
			
			<div class="container">
				<div class="row">
					<div class="col-lg-offset-1 col-md-1 col-sm-2">
						<p class="text-mute no-margin-bottom text-big"></p>
						<p class="text-mute"></p>
					</div><!-- col -->
					
					<div class="col-lg-4 col-md-5 col-sm-10">
						<div class="progres-container">
							<div class="progress-bar-title">Cell Size</div>
							<div class="progress default-color">                        
								<div class="progress-bar" data-width="95">
								</div><!-- progress-bar -->
							</div><!-- progess -->
						</div><!-- progres-container -->
						
						<div class="progres-container">
							<div class="progress-bar-title">Mitosis Counting</div>
							<div class="progress">                        
								<div class="progress-bar" data-width="75">
								</div><!-- progress-bar -->
							</div><!-- progess -->
						</div><!-- progres-container -->
						
						<div class="progres-container">
							<div class="progress-bar-title">Nuclei Distribution</div>
							<div class="progress">                        
								<div class="progress-bar" data-width="60">
								</div><!-- progress-bar -->
							</div><!-- progess -->
						</div><!-- progres-container -->
					</div><!-- col -->
					
					<div class="col-lg-4 col-md-5 col-sm-8">
						<div class="progres-container">
							<div class="progress-bar-title">Gland Segmentation</div>
							<div class="progress">                        
								<div class="progress-bar" data-width="75">
								</div><!-- progress-bar -->
							</div><!-- progess -->
						</div><!-- progres-container -->
						
						<div class="progres-container">
							<div class="progress-bar-title">Nuclei Counting</div>
							<div class="progress default-color">                        
								<div class="progress-bar" data-width="95">
								</div><!-- progress-bar -->
							</div><!-- progess -->
						</div><!-- progres-container -->
						
						<div class="progres-container">
							<div class="progress-bar-title">Shape Analysis</div>
							<div class="progress">                        
								<div class="progress-bar" data-width="60">
								</div><!-- progress-bar -->
							</div><!-- progess -->
						</div><!-- progres-container -->
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- container -->
			
			<!-- OFFER -->
			<section class="full-section parallax" id="section-3" data-stellar-background-ratio="0.1">
				<div class="full-section-container">
					<div class="container">
						<div class="row">
							<div class="col-lg-offset-2 col-lg-2 col-sm-3">
								<img src="<?php echo base_url('assets/images/cyto_logo.png'); ?>">
								<!-- <div class="text-parallax visible-lg-block" data-stellar-background-ratio="0.1" style="background-image:url(images/backgrounds/text-1.jpg);">
									<h1 class="text-parallax-content text-center">01</h1>
								</div><!-- text-parallax -->
							</div><!-- col -->
							
							<div class="col-lg-8 col-md-9 col-sm-12">
								<h1 class="text-white-color">Put us to work on <span class="text-default-color">your problem</span></h1>
								<br>
								<p class="text-white-color">If you are curious about how our services can help you answer questions about your imaging data, <a href="<?php echo base_url('index.php/cyto_bioformatics/quote'); ?>">submit a free quote</a>. We will quickly get back to you to discuss further.</p>
								<br>
								<a class="btn btn-default btn-white-hover" href="<?php echo base_url('index.php/cyto_bioformatics/quote'); ?>">Submit Quote<i class="bronx-icon-arrow-right btn-white-hover"></i></a>
							</div><!-- col -->
						</div><!-- row -->
					</div><!-- container -->
				</div><!-- full-section-container -->
			</section><!-- full-section -->

			<!-- SPAN -->
			<section class="full-section parallax" id="section-6" data-stellar-background-ratio="0.1">
				<div class="full-section-container">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<h2 class="text-center text-dark">Ready to start?</h2>
								<h6 class="text-center"><a class="text-alt-color" href="<?php echo base_url('index.php/cyto_bioformatics/login'); ?>">Sign up now.</a></h6>
							</div><!-- col -->
						</div><!-- row -->
					</div><!-- container -->
				</div><!-- full-section-container -->
			</section><!-- full-section -->
		</div><!-- PAGE CONTENT -->
		
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
	
	<!-- REVOLUTION SLIDER  
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
	<script src="<?php echo base_url('assets/plugins/revolutionslider/js/extensions/revolution.extension.video.min.js'); ?>"></script>-->
	
	<!-- OWL Carousel 
	<script src="<?php echo base_url('assets/plugins/owl-carousel/owl.carousel.min.js'); ?>"></script>-->
	
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
	
	<!-- GOOGLE MAPS 
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="<?php echo base_url('assets/plugins/googlemaps/gmap3.min.js'); ?>"></script>-->
	
	<!-- CHARTS -->
	<script src="<?php echo base_url('assets/plugins/charts/jquery.easypiechart.min.js'); ?>"></script>
	
	<!-- COUNTER -->
	<script src="<?php echo base_url('assets/plugins/counter/jquerysimplecounter.js'); ?>"></script>
	
	<!-- STATISTICS -->
	<script src="<?php echo base_url('assets/plugins/statistics/chart.min.js'); ?>"></script>
	
	<!-- YOUTUBE PLAYER 
	<script src="<?php echo base_url('assets/plugins/ytplayer/jquery.mb.ytplayer.min.js'); ?>"></script>-->
	
	<!-- INSTAFEED -->
	<script src="<?php echo base_url('assets/plugins/instafeed/instafeed.min.js'); ?>"></script>
	
	<!-- COUNTDOWN -->
	<script src="<?php echo base_url('assets/plugins/countdown/jquery.countdown.min.js'); ?>"></script>
	
	<!-- ANIMATIONS -->
	<script src="<?php echo base_url('assets/plugins/animations/wow.min.js'); ?>"></script>
	
	<!-- CUSTOM JS -->
	<script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
    
    <!-- ANIMATIONS -->
    <script src="<?php echo base_url('assets/js/velocity.min.js'); ?>"></script> 
    <script src="<?php echo base_url('assets/js/kenburns.js'); ?>"></script> 
    <script type="text/javascript">
        $(document).ready(function() {
            document.getElementById("home-button").setAttribute("class", "active");
        });
        
        $(document).ready(function() {            
            $('#kenburns-slideshow').Kenburns({
                images: [
                    "<?php echo base_url('images/kenburns/kb-0.jpg'); ?>",
                    "<?php echo base_url('images/kenburns/kb-1.jpg'); ?>",
                    "<?php echo base_url('images/kenburns/kb-2.jpg'); ?>",
                    "<?php echo base_url('images/kenburns/kb-3.jpg'); ?>"
                ],
            scale: 0.4,
                scale_end: 0.6,
                duration:8000,
                fadeSpeed:1200,
                ease3d:'cubic-bezier(0.445, 0.050, 0.550, 0.950)'
            });
        });
	</script>
	
</body>

</html>
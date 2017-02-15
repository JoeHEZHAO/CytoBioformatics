<!doctype html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<meta name="keywords" content="">
	<meta name="description" content="">
	
	<title>Workflow | CytoInformatics</title>
	
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
	<link rel="stylesheet" href="<?php echo base_url('assets/css/my-styles.css'); ?>">
	

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
            <!-- INTRO SLIDER -->
			<div class="rev_slider_wrapper">
                <div id="workflow-slider" class="rev_slider" data-version="5.0">
                    <img src="<?php echo base_url('images/backgrounds/bg-slider.jpg'); ?>" style="width:102%; height: 100%;">
                    <ul>
						<li data-transition="fade">
                            <div class="tp-caption text-center"
                                 data-x="center"
                                 data-y="top"
                                 data-hoffset="0"
                                 data-voffset="300"
                                 data-speed="700"
                                 data-start="700"
                                 data-transform_in="o:0;s:700;"
                                 data-transform_out="o:0;s:700;">
                                <h2>Say you are a pathologist...</h2>
                            </div>

                            <div class="tp-caption text-block" style="width:800px; white-space: pre-wrap;"
                                 data-x="center"
                                 data-y="top"
                                 data-hoffset="0"
                                 data-voffset="400"
                                 data-speed="700"
                                 data-start="700"
                                 data-transform_in="o:0;s:700;"
                                 data-transform_out="o:0;s:700;">
                                <p>You have several hundred images of lung biopsies. You know that some of your images depict tissue with signs of small cell carcinoma, some show large cell carcinoma, and some show no signs of carcinoma.</p>
                            </div>
						</li>
                        
						<li data-transition="fade">
                            <div class="tp-caption text-center"
                                 data-x="center"
                                 data-y="top"
                                 data-hoffset="0"
                                 data-voffset="300"
                                 data-speed="700"
                                 data-start="700"
                                 data-transform_in="o:0;s:700;"
                                 data-transform_out="o:0;s:700;">
                                <h2>But you are also a researcher.</h2>
                            </div>

                            <div class="tp-caption text-block" style="width:800px; white-space: pre-wrap;"
                                 data-x="center"
                                 data-y="top"
                                 data-hoffset="0"
                                 data-voffset="400"
                                 data-speed="700"
                                 data-start="700"
                                 data-transform_in="o:0;s:700;"
                                 data-transform_out="o:0;s:700;">
                                <p>You want to publish high-quality studies with impact. You know that there are significant morphological differences between the tissue samples you have. However, you don't have the time or resources to pay an assistant to manually annotate each image by hand, much less do it yourself. If only you could find a way to easily quantify these differences!</p>
                            </div>
						</li>
                        
						<li data-transition="fade">
                            <div class="tp-caption text-center"
                                 data-x="center"
                                 data-y="top"
                                 data-hoffset="0"
                                 data-voffset="230"
                                 data-speed="700"
                                 data-start="700"
                                 data-transform_in="o:0;s:700;"
                                 data-transform_out="o:0;s:700;">
                                <h2>That's where <br><span class="text-alt-color">CytoInformatics</span> comes in.</h2>
                            </div>

                            <div class="tp-caption text-block" style="width:800px; white-space: pre-wrap;"
                                 data-x="center"
                                 data-y="top"
                                 data-hoffset="0"
                                 data-voffset="400"
                                 data-speed="700"
                                 data-start="700"
                                 data-transform_in="o:0;s:700;"
                                 data-transform_out="o:0;s:700;">
                                <p>Here at CytoInformatics, we aim to simplify the analysis of microscopy images for you while delivering pinpoint-accurate results. All you need to do is upload your images and we will handle the rest.<br><br>To get started, follow these simple instructions.</p>
                            </div>
						</li>
                        
                        <li data-transition="fade">
                            <div class="tp-caption text-center"
                                 data-x="center"
                                 data-y="top"
                                 data-hoffset="0"
                                 data-voffset="300"
                                 data-speed="700"
                                 data-start="700"
                                 data-transform_in="o:0;s:700;"
                                 data-transform_out="o:0;s:700;">
                                <h2>Step 1: Submit a Quote</h2>
                            </div>

                            <div class="tp-caption text-block" style="width:800px; white-space: pre-wrap;"
                                 data-x="center"
                                 data-y="top"
                                 data-hoffset="0"
                                 data-voffset="400"
                                 data-speed="700"
                                 data-start="700"
                                 data-transform_in="o:0;s:700;"
                                 data-transform_out="o:0;s:700;">
                                <p>Click the <a href="<?php echo base_url('index.php/cyto_bioformatics/quote'); ?>">Quote</a> link at the top of this page to access our quote submission form. You do not even need to register for an account to submit a quote. Just provide us with a brief description of the task you are looking to solve. We will contact you to discuss the possible solutions we can pursue to help you get the findings you need.<br><br>You are also encouraged to submit up to three sample images so that we may better prepare to discuss your data with you.</p>
                            </div>
						</li>
                        
                        <li data-transition="fade">
                            <div class="tp-caption text-center"
                                 data-x="center"
                                 data-y="top"
                                 data-hoffset="0"
                                 data-voffset="300"
                                 data-speed="700"
                                 data-start="700"
                                 data-transform_in="o:0;s:700;"
                                 data-transform_out="o:0;s:700;">
                                <h2>Step 2: Purchase Our Services</h2>
                            </div>

                            <div class="tp-caption text-block" style="width:800px; white-space: pre-wrap;"
                                 data-x="center"
                                 data-y="top"
                                 data-hoffset="0"
                                 data-voffset="400"
                                 data-speed="700"
                                 data-start="700"
                                 data-transform_in="o:0;s:700;"
                                 data-transform_out="o:0;s:700;">
                                <p>Once you have agreed to a solution and have logged in with your account, you should see a <span class="text-alt-color">Projects and Payment</span> tab in the dropdown menu under your name. This link will bring you to a table with your unpaid charges. Select this charge and continue through our online payment portal powered by <a href="https://www.authorize.net/">Authorize.Net</a> to complete your payment.
                            </div>
						</li>
                        
                        <li data-transition="fade">
                            <div class="tp-caption text-center"
                                 data-x="center"
                                 data-y="top"
                                 data-hoffset="0"
                                 data-voffset="300"
                                 data-speed="700"
                                 data-start="700"
                                 data-transform_in="o:0;s:700;"
                                 data-transform_out="o:0;s:700;">
                                <h2>Step 3: Submit Your Images</h2>
                            </div>

                            <div class="tp-caption text-block" style="width:800px; white-space: pre-wrap;"
                                 data-x="center"
                                 data-y="top"
                                 data-hoffset="0"
                                 data-voffset="400"
                                 data-speed="700"
                                 data-start="700"
                                 data-transform_in="o:0;s:700;"
                                 data-transform_out="o:0;s:700;">
                                <p>After you have paid for your images, we will provide you with a link to securely upload your images to our platform. From here we can begin to work on your data. From there on we will provide you with regular updates until the project is complete. It's that simple.</p>
                            </div>
                            
                            <div class="tp-caption text-center"
                                 data-x="center"
                                 data-y="top"
                                 data-hoffset="0"
                                 data-voffset="650"
                                 data-speed="700"
                                 data-start="700"
                                 data-transform_in="o:0;s:700;"
                                 data-transform_out="o:0;s:700;">
                                <h4><a href="<?php echo base_url('index.php/cyto_bioformatics/quote'); ?>" class="text-alt-color">Ready to get started?</a></h4>
                            </div>
						</li>
					</ul>
				</div>
            </div>
            
		</div><!-- PAGE CONTENT -->
		
		<!-- FOOTER -->
		<?php include 'application/templates/footer.php'; ?>
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

    <!-- REVOLUTION SLIDER -->  
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

	<!-- CHARTS -->
	<script src="<?php echo base_url('assets/plugins/charts/jquery.easypiechart.min.js'); ?>"></script>
	
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
    
    <!-- ANIMATIONS -->
    <script src="<?php echo base_url('assets/js/velocity.min.js'); ?>"></script> 
    
    <script text="type/javascript">
        $(document).ready(function() {
            document.getElementById("workflow-button").setAttribute("class", "active");
        });
        
//        function randnum(min, max) {
//            return Math.floor(Math.random()*(max-min+1)+min);
//        }
//        
//        var dotsCount = 50,
//            dotsHtml = "",
//            $count = $("#count"),
//            $dots;
//        
//        for (var i = 0; i < dotsCount; i++) {
//            dotsHtml += "<div class='dot'></div>";
//        }
//        
//        $dots = $(dotsHtml);
//        $count.html(dotsCount);
//        
//        var $container = $("#container"),
//		    $browserWidthNotice = $("#browserWidthNotice");
//
//        var screenWidth = window.screen.availWidth,
//		    screenHeight = window.screen.availHeight,
//		    chromeHeight = screenHeight - (document.documentElement.clientHeight || screenHeight);
//
//	    var translateZMin = -725,
//		    translateZMax = 600;
//
//	    var containerAnimationMap = {
//			perspective: [ 215, 50 ],
//			opacity: [ 0.90, 0.55 ]
//		};
//
//        /* IE10+ produce odd glitching issues when you rotateZ on a parent element subjected to 3D transforms. */
//        if (!isIE) {
//            containerAnimationMap.rotateZ = [ 5, 0 ];
//        }
//
//        /* Ensure the user is full-screened; this demo's translations are relative to screen width, not window width. */
//        if ((document.documentElement.clientWidth / screenWidth) < 0.80) {
//            $browserWidthNotice.show();
//        }
//
//        /*****************
//            Animation
//        *****************/
//
//        /* Animate the dots' container. */
//        $container
//            .css("perspective-origin", screenWidth/2 + "px " + ((screenHeight * 0.45) - chromeHeight) + "px")
//            .velocity(containerAnimationMap, { duration: 800, loop: 1, delay: 3250 });
//
//        /* Special visual enhancement for WebKit browsers, which are faster at box-shadow manipulation. */
//        if (isWebkit) {
//            $dots.css("boxShadow", "0px 0px 4px 0px #4bc2f1");
//        }
//
//        /* Animate the dots. */
//        $dots
//            .velocity({ 
//                translateX: [ 
//                    function() { return "+=" + randnum(-screenWidth/2.5, screenWidth/2.5) },
//                    function() { return randnum(0, screenWidth) }
//                ],
//                translateY: [
//                    function() { return "+=" + randnum(-screenHeight/2.75, screenHeight/2.75) },
//                    function() { return randnum(0, screenHeight) }
//                ],
//                translateZ: [
//                    function() { return "+=" + randnum(translateZMin, translateZMax) },
//                    function() { return randnum(translateZMin, translateZMax) }
//                ],
//                opacity: [ 
//                    function() { return Math.random() },
//                    function() { return Math.random() + 0.1 }
//                ]
//            }, { duration: 6000 })
//            .velocity("reverse", { easing: "easeOutQuad" })
//            .appendTo($container);
        
    </script>
	
</body>

</html>
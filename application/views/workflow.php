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
	
	<!-- BRONX ICONS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/bronx-icons/css/bronx-icons.min.css'); ?>">
	
	<!-- REVOLUTION SLIDER -->
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/revolutionslider/css/settings.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/revolutionslider/css/navigation.css'); ?>">
	
	<!-- CUSTOM & PAGES STYLE -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/cyto.css'); ?>">
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
                            <div class="tp-caption big-title workflow-title"
                                 data-whitespace=”normal”
                                 data-width="['800']"
                                 data-height="['auto']"
                                 data-x="center"
                                 data-y="top"
                                 data-hoffset="0"
                                 data-voffset="200"
                                 data-speed="700"
                                 data-start="700"
                                 data-transform_in="o:0;s:700;"
                                 data-transform_out="o:0;s:700;">
                                Say you are studying tissue...
                            </div>

                            <div class="tp-caption tp-resizeme"
                                 data-whitespace=”normal”
                                 data-width="['800']"
                                 data-height="['auto']"
                                 data-x="center"
                                 data-y="top"
                                 data-hoffset="0"
                                 data-voffset="400"
                                 data-speed="700"
                                 data-start="700"
                                 data-transform_in="o:0;s:700;"
                                 data-transform_out="o:0;s:700;">
                                You have obtained several hundred images of tissue for research, drug analysis, or clinical usage. Now you need to extract quantitative measurements, such as cross-sectional area, cell size, shape, staining intensity, mytosis counting, fibrosis area, etc.
                            </div>
						</li>
                        
						<li data-transition="fade">
                            <div class="tp-caption big-title workflow-title"
                                 data-whitespace=”normal”
                                 data-width="['800']"
                                 data-height="['auto']"
                                 data-x="center"
                                 data-y="top"
                                 data-hoffset="0"
                                 data-voffset="200"
                                 data-speed="700"
                                 data-start="700"
                                 data-transform_in="o:0;s:700;"
                                 data-transform_out="o:0;s:700;">
                                But speed is everything.
                            </div>

                            <div class="tp-caption tp-resizeme"
                                 data-whitespace=”normal”
                                 data-width="['800']"
                                 data-height="['auto']"
                                 data-x="center"
                                 data-y="top"
                                 data-hoffset="0"
                                 data-voffset="400"
                                 data-speed="700"
                                 data-start="700"
                                 data-transform_in="o:0;s:700;"
                                 data-transform_out="o:0;s:700;">
                                You may want to publish high-quality studies in Nature and Science. You may want to know immediately about the effects of certain drugs. You may want to study why certain groups of patients respond effectively to one kind of treatment, while others do not. At the same time, you need to spend time to conduct painful manual analysis of each image by hand. Even if you have hundreds of thousands of dollars to spare for expensive proprietary software, chances are you still spend a lot of time and manpower using this software for post-processing just to get decent results. 
                            </div>
						</li>
                        
						<li data-transition="fade">
                            <div class="tp-caption big-title workflow-title"
                                 data-whitespace=”normal”
                                 data-width="['800']"
                                 data-height="['auto']"
                                 data-x="center"
                                 data-y="top"
                                 data-hoffset="0"
                                 data-voffset="200"
                                 data-speed="700"
                                 data-start="700"
                                 data-transform_in="o:0;s:700;"
                                 data-transform_out="o:0;s:700;">
                                Introducing <span class="text-alt-color">CytoInformatics</span>
                            </div>

                            <div class="tp-caption tp-resizeme"
                                 data-whitespace=”normal”
                                 data-width="['800']"
                                 data-height="['auto']"
                                 data-x="center"
                                 data-y="top"
                                 data-hoffset="0"
                                 data-voffset="400"
                                 data-speed="700"
                                 data-start="700"
                                 data-transform_in="o:0;s:700;"
                                 data-transform_out="o:0;s:700;">
                                At CytoInformatics, we aim to simplify the entire pipeline of biomedical image analysis by relieving researchers and clinicians from time-consuming data processing tasks. Our team is composed of professonals who have worked in this field for more than 15 years. Wielding cutting-edge deep learning technology, we can process thousands of images in seconds. All you need to do is upload your images and we will handle all the rest. <br><br><b>To get started, please follow these simple instructions.</b>
                            </div>
						</li>
                        
                        <li data-transition="fade">
                            <div class="tp-caption big-title workflow-title"
                                 data-whitespace=”normal”
                                 data-width="['800']"
                                 data-height="['auto']"
                                 data-x="center"
                                 data-y="top"
                                 data-hoffset="0"
                                 data-voffset="200"
                                 data-speed="700"
                                 data-start="700"
                                 data-transform_in="o:0;s:700;"
                                 data-transform_out="o:0;s:700;">
                                Step 1: Submit a Quote
                            </div>

                            <div class="tp-caption tp-resizeme"
                                 data-whitespace=”normal”
                                 data-width="['800']"
                                 data-height="['auto']"
                                 data-x="center"
                                 data-y="top"
                                 data-hoffset="0"
                                 data-voffset="400"
                                 data-speed="700"
                                 data-start="700"
                                 data-transform_in="o:0;s:700;"
                                 data-transform_out="o:0;s:700;">
                                Click the <a href="<?php echo base_url('index.php/Cyto/quote'); ?>">Quote</a> link at the top of this page to access our quote submission form. You do not even need to register for an account to submit a quote. Just provide us with a brief description of the task you are looking to solve. We will contact you to better understand your needs.<br><br>Please also submit up to three sample images so that we may better prepare our discussion with you about your image analyis tasks.
                            </div>
						</li>
                        
                        <li data-transition="fade">
                            <div class="tp-caption big-title workflow-title" 
                                 data-whitespace=”normal”
                                 data-width="['800']"
                                 data-height="['auto']"
                                 data-x="center"
                                 data-y="top"
                                 data-hoffset="0"
                                 data-voffset="200"
                                 data-speed="700"
                                 data-start="700"
                                 data-transform_in="o:0;s:700;"
                                 data-transform_out="o:0;s:700;">
                                Step 2: Purchase Our Services
                            </div>

                            <div class="tp-caption tp-resizeme"
                                 data-whitespace=”normal”
                                 data-width="['800']"
                                 data-height="['auto']"
                                 data-x="center"
                                 data-y="top"
                                 data-hoffset="0"
                                 data-voffset="400"
                                 data-speed="700"
                                 data-start="700"
                                 data-transform_in="o:0;s:700;"
                                 data-transform_out="o:0;s:700;">
                                Log in to your account and you should see a <span class="text-alt-color">Projects and Payment</span> tab in the dropdown menu under your name. This link will bring you to a table with your unpaid charges. Select this charge and continue through our secure online payment portal to complete your payment. The payment process is powered by <a href="https://www.authorize.net/">Authorize.Net</a>, so you can rest assured that it is completely safe and secured.
                            </div>
						</li>
                        
                        <li data-transition="fade">
                            <div class="tp-caption big-title workflow-title"
                                 data-whitespace=”normal”
                                 data-width="['800']"
                                 data-height="['auto']"
                                 data-x="center"
                                 data-y="top"
                                 data-hoffset="0"
                                 data-voffset="200"
                                 data-speed="700"
                                 data-start="700"
                                 data-transform_in="o:0;s:700;"
                                 data-transform_out="o:0;s:700;">
                                Step 3: Submit Your Images
                            </div>

                            <div class="tp-caption tp-resizeme"
                                 data-whitespace=”normal”
                                 data-width="['800']"
                                 data-height="['auto']"
                                 data-x="center"
                                 data-y="top"
                                 data-hoffset="0"
                                 data-voffset="400"
                                 data-speed="700"
                                 data-start="700"
                                 data-transform_in="o:0;s:700;"
                                 data-transform_out="o:0;s:700;">
                                After you have paid for your images, we will provide you with a link to securely upload all your images to our platform in a fast and efficient way. From there we will begin to work on your image data. Your customized report will be returned to you in the way that you prefer. Thanks to our cutting-edge artificial intelligence solutions using deep learning, we can return the results as fast as overnight if needed and as cheap as $1.99 per case. If you do not want us to keep the data, then for a small fee we will not store it any longer than it takes us to finish. <i>It's that simple.</i><br /><br /><a href="<?php echo base_url('index.php/Cyto/quote'); ?>" class="text-alt-color">Ready to get started?</a>
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
	
    <!-- REVOLUTION SLIDER -->  
	<script src="<?php echo base_url('assets/plugins/revolutionslider/js/jquery.themepunch.tools.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/revolutionslider/js/jquery.themepunch.revolution.min.js'); ?>"></script>
    
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
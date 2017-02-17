<!doctype html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<meta name="keywords" content="">
	<meta name="description" content="">
	
	<title>Solutions | CytoInformatics</title>
	
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
	
	<!-- ANIMATIONS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/animations/animate.min.css'); ?>">
	
	<!-- CUSTOM & PAGES STYLE -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/pages-style.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/my-styles.css'); ?>">
	
	<!-- MY ANIMATIONS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/my-animations.css'); ?>">

</head>

<body class="header-boxed">

	<div id="main-container">
		
		<!-- HEADER -->
		<header id="header-container">
			<!-- NAVIGATION BAR -->
			<?php include "application/templates/navigation_bar.php"; ?>
		</header>
		
		<!-- PAGE CONTENT -->
		<div class="page-solutions">
			<img class="backing-image" src="<?php echo base_url('images/backgrounds/solutions.jpg'); ?>" alt="">
							
            <!--<div class="tp-caption">
                 <img src="<?php echo base_url('images/backgrounds/solutions.jpg'); ?>" alt="" style="width: 100%;">
            </div>-->

            <div class="page-solutions-text">
                 <h1>Cutting-Edge <span class="text-default-color">Machine Intelligence</span> <br> Optimized For Understanding <span class="text-default-color">Biomedical Images</span></h1>
            </div>

            <div class="page-solutions-text">
                <p>Our unique platform combines computer vision and deep learning to deliver a holistic data analysis service that is accurate, robust, and extremely fast. With our <span class="text-default-color">services</span>, you no longer need to rely on human labor for tedious work such as image quantification, annotation, and analysis.</p>
            </div>
        </div>
            
        <!-- SERVICES -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="headline text-center">
                        <p>Our Offered</p>
                        <h2>Services</h2>
                    </div><!-- headline -->
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->

        <div class="container">
            <div class="col-sm-12">
                <div class="item">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="service-box style-1">
                                <div class="solutions-image-box">
                                    <img class="bg-img" src="<?php echo base_url('images/services/detection_bg.jpg'); ?>" alt="">
                                    <img class="hv-img" src="<?php echo base_url('images/services/detection_regions.png'); ?>" alt="">
                                </div>
                                <!--<i class="bronx-icon-bubble"></i>-->
                                <div class="service-box-content">
                                    <h6><a href="#">Cell Detection</a></h6>
                                    <p>Rapidly obtain precise coordinates specifying the locations of cells in your image, facilitating density modeling, cell classification, and more.</p>
                                </div><!-- service-box-content -->
                            </div><!-- service-box -->
                        </div><!-- col -->

                        <div class="col-sm-4">
                            <div class="service-box style-1">
                                <div class="solutions-image-box">
                                    <img class="bg-img" src="<?php echo base_url('images/services/segmentation_bg.jpg'); ?>" alt="">
                                    <img class="hv-img" src="<?php echo base_url('images/services/segmentation_contours.png'); ?>" alt="">
                                </div>
                                <!--<i class="bronx-icon-heart"></i>-->
                                <div class="service-box-content">
                                    <h6><a href="#">Cell Segmentation</a></h6>
                                    <p>Find the boundary coordinates of thousands of cells per image, enabling robust cross-sectional area calculations, background removal, shape modeling, and more.</p>
                                </div><!-- service-box-content -->
                            </div><!-- service-box -->

                        </div><!-- col -->
                        <div class="col-sm-4">
                            <div class="service-box style-1">
                                <div class="solutions-image-box">
                                    <img class="bg-img" src="<?php echo base_url('images/services/classification_bg.jpg'); ?>" alt="">
                                    <img class="hv-img" src="<?php echo base_url('images/services/classification_overlay.png'); ?>" alt="">
                                </div>
                                <!--<i class="bronx-icon-data"></i>-->
                                <div class="service-box-content">

                                    <h6><a href="#">Classification</a></h6>

                                    <p>Distinguish benign from malignant cells, separate epithelial from stromal regions, identify necrotic muscle fibers, and much more.</p>

                                </div><!-- service-box-content -->

                            </div><!-- service-box -->

                        </div><!-- col -->
                    </div><!-- row -->

                </div><!-- item -->
                <div class="item">

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="service-box style-1">
                                <div class="solutions-image-box">
                                    <img class="bg-img" src="<?php echo base_url('images/services/cleaning_dirty.jpg'); ?>" alt="">
                                    <img class="hv-img" src="<?php echo base_url('images/services/cleaning_clean.jpg'); ?>" alt="">
                                </div>
                                <!--<i class="bronx-icon-eye"></i>-->
                                <div class="service-box-content">

                                    <h6><a href="#">Image Cleaning</a></h6>

                                    <p>Improve the clarity of your images so that they are as sharp to the naked eye as possible.</p>

                                </div><!-- service-box-content -->

                            </div><!-- service-box -->

                        </div><!-- col -->
                        <div class="col-sm-4">
                            <div class="service-box style-1">
                                <div class="solutions-image-box">
                                    <img class="bg-img" src="<?php echo base_url('images/services/heatmap_small.jpg'); ?>" alt="">
                                    <img class="hv-img" src="<?php echo base_url('images/services/heatmap_small_overlay.png'); ?>" alt="">
                                </div>
                                <!--<i class="bronx-icon-food"></i>-->
                                <div class="service-box-content">

                                    <h6><a href="#">Feature Extraction</a></h6>

                                    <p>End-to-end imaging informatics solution. Tell us what you would like to learn and we will calculate it for you, from detection to extraction.</p>

                                </div><!-- service-box-content -->

                            </div><!-- service-box -->

                        </div><!-- col -->
                        <div class="col-sm-4">
                            <div class="service-box style-1">
                                <div class="solutions-image-box">
                                    <img class="bg-img" src="<?php echo base_url('images/services/tracking.jpg'); ?>" alt="">
                                    <img class="hv-img" src="<?php echo base_url('images/services/tracking_overlay.png'); ?>" alt="">
                                </div>
                                <!--<i class="bronx-icon-lab"></i>-->
                                <div class="service-box-content">

                                    <h6><a href="#">More...</a></h6>

                                    <p>Contact us to see if our services can help you address your specific needs.</p>

                                </div><!-- service-box-content -->

                            </div><!-- service-box -->

                        </div><!-- col -->
                    </div><!-- row -->

                </div><!-- item -->
                <!-- add more <div class="item"> elements here to add more pages to the services-slider. -->

            </div><!-- col -->
        </div><!-- container -->

        <!-- SOLUTIONS -->
        <div class="solutions">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="headline text-center">
                            <p>Supported</p>
                            <h2>Tissue Types</h2>
                        </div><!-- headline -->
                    </div><!-- col -->
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="item">

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="service-box style-1">
                                        <div class="solutions-image-box">
                                            <img src="<?php echo base_url('images/services/lung_crop.jpg'); ?>" alt="">
                                        </div>
                                        <!--<i class="bronx-icon-bubble"></i>-->
                                        <div class="service-box-content">

                                            <h6><a href="#">Lung</a></h6>

                                            <p>Lung cell detection, tumor segmentation, tumor grading, and more are practical solutions with our platform.</p>

                                        </div><!-- service-box-content -->

                                    </div><!-- service-box -->

                                </div><!-- col -->
                                <div class="col-sm-4">
                                    <div class="service-box style-1">
                                        <div class="solutions-image-box">
                                            <img src="<?php echo base_url('images/services/muscle_crop.jpg'); ?>" alt="">
                                        </div>
                                        <!--<i class="bronx-icon-heart"></i>-->
                                        <div class="service-box-content">

                                            <h6><a href="#">Muscle</a></h6>

                                            <p>Model muscular dystrophy and myositis easily with reliable muscle fiber segmentation and inflammatory cell detection.</p>

                                        </div><!-- service-box-content -->

                                    </div><!-- service-box -->

                                </div><!-- col -->
                                <div class="col-sm-4">
                                    <div class="service-box style-1">
                                        <div class="solutions-image-box">
                                            <img src="<?php echo base_url('images/services/bladder_crop.jpg'); ?>" alt="">
                                        </div>
                                        <!--<i class="bronx-icon-data"></i>-->
                                        <div class="service-box-content">

                                            <h6><a href="#">Bladder</a></h6>

                                            <p>Separate urothelial from stromal regions and identify papillary urothelial neoplasms.</p>

                                        </div><!-- service-box-content -->

                                    </div><!-- service-box -->

                                </div><!-- col -->
                            </div><!-- row -->

                        </div><!-- item -->
                        <div class="item">

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="service-box style-1">
                                        <div class="solutions-image-box">
                                            <img src="<?php echo base_url('images/services/NET_crop.jpg'); ?>" alt="">
                                        </div>
                                        <!--<i class="bronx-icon-food"></i>-->
                                        <div class="service-box-content">

                                            <h6><a href="#">Pancreas</a></h6>

                                            <p>Use our services for detecting islets, identifying neuroendocrine tumors, and distinguishing between alpha and beta cells.</p>

                                        </div><!-- service-box-content -->

                                    </div><!-- service-box -->

                                </div><!-- col -->
                                <div class="col-sm-4">
                                    <div class="service-box style-1">
                                        <div class="solutions-image-box">
                                            <img src="<?php echo base_url('images/services/breast_crop.jpg'); ?>" alt="">
                                        </div>
                                        <!--<i class="bronx-icon-eye"></i>-->
                                        <div class="service-box-content">

                                            <h6><a href="#">Breast</a></h6>

                                            <p>Our platform enables lung cell detection, tumor segmentation, tumor grading, and more.</p>

                                        </div><!-- service-box-content -->

                                    </div><!-- service-box -->

                                </div><!-- col -->
                                <div class="col-sm-4">
                                    <div class="service-box style-1">
                                        <div class="solutions-image-box">
                                            <img src="<?php echo base_url('images/services/brain_crop.jpg'); ?>" alt="">
                                        </div>
                                        <!--<i class="bronx-icon-lab"></i>-->
                                        <div class="service-box-content">

                                            <h6><a href="#">And more...</a></h6>

                                            <p>Contact us to see if our services can help you address your specific pathology data.</p>

                                        </div><!-- service-box-content -->

                                    </div><!-- service-box -->

                                </div><!-- col -->
                            </div><!-- row -->

                        </div><!-- item -->
                        <!-- add more <div class="item"> elements here to add more pages to the services-slider. -->

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- solutions -->

        <!-- COUNTER EFFECTS 
        <section class="full-section dark-section" style="margin-bottom: 0px;" id="section-4">
            <div class="full-section-container">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-sm-2 visible-lg-block">
								<a class="more-facts" href="#"><img src="<?php echo base_url('assets/images/cyto_logo_white_sharp.png'); ?>" style="width: 100px; height: 100px" alt="<?php echo base_url();?>"></a>
							</div>
							
							<div class="col-lg-2 col-sm-3">
								<div class="counter">
									<div class="counter-value" data-value="10000"></div>
									<div class="counter-details">Images Processed</div>
								</div>
							</div>
							
							<div class="col-lg-2 col-sm-3">
								<div class="counter">
									<div class="counter-value" data-value="160"></div>
									<div class="counter-details">Projects Completed</div>
								</div>
							</div>
							
							<div class="col-lg-2 col-sm-3">
								<div class="counter">
									<div class="counter-value" data-value="53"></div>
									<div class="counter-details">Active Users</div>
								</div>
							</div>
							
							<div class="col-lg-2 col-sm-3">
								<div class="counter">
									<div class="counter-value" data-value="40"></div>
									<div class="counter-details">Active Sites</div>
								</div>
							</div>
							
							<div class="col-sm-2 visible-lg-block">
								<a class="more-facts" href="#"></a>
							</div>

                    </div>
                </div>
            </div>
        </section>-->

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
        
		<!-- FOOTER -->
		<?php include 'application/templates/footer.php'; ?>
    </div>
	
	<!-- SCROLL UP -->
	<a id="scroll-up"><i class="fa fa-angle-up"></i></a>
	
	<!-- jQUERY -->
	<script src="<?php echo base_url('assets/plugins/jquery/jquery-2.2.2.min.js'); ?>"></script>
	
	<!-- BOOTSTRAP JS -->
	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
	
	<!-- VIEWPORT -->
	<script src="<?php echo base_url('assets/plugins/viewport/jquery.viewport.js'); ?>"></script>
	
	<!-- FANCYBOX -->
	<script src="<?php echo base_url('assets/plugins/fancybox/jquery.fancybox.pack.js'); ?>"></script>
	
	<!-- PARALLAX -->
	<script src="<?php echo base_url('assets/plugins/parallax/jquery.stellar.min.js'); ?>"></script>
    
	<!-- COUNTER -->
	<script src="<?php echo base_url('assets/plugins/counter/jquerysimplecounter.js'); ?>"></script>
	
	<!-- COUNTDOWN -->
	<script src="<?php echo base_url('assets/plugins/countdown/jquery.countdown.min.js'); ?>"></script>
	
	<!-- CUSTOM JS -->
	<script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
    
    <!-- ANIMATIONS -->
	<script src="<?php echo base_url('assets/plugins/animations/wow.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/velocity.min.js'); ?>"></script> 
    <script src="<?php echo base_url('assets/js/hoverfade.js'); ?>"></script> 
    
    <script text="type/javascript">
        $(document).ready(function() {
            document.getElementById("solutions-button").setAttribute("class", "active");
        });
        
        $(".backing-image").velocity({
            opacity: "0.2"
        }, {
            duration: 4000,
            loop: true
            
        }).velocity("reverse");
    </script>
	
</body>

</html>
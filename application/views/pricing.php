<!doctype html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<meta name="keywords" content="">
	<meta name="description" content="">
	
	<title>Pricing | CytoInformatics</title>
    
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
	
	<!-- CUSTOM & PAGES STYLE -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/cyto.css'); ?>">
	

</head>

<body class="header-boxed">

	<div id="main-container">
		
		<!-- HEADER -->
		<header id="header-container">
			<!-- NAVIGATION BAR -->
			<?php include "application/templates/navigation_bar.php"; ?>
			
			<div id="page-header" class="parallax" data-stellar-background-ratio="0.1" style="background-image:url(images/backgrounds/page-header-1.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							
							<h1>Pricing Models</h1>
							
							<p class="tp-caption text">Learn how affordable our solutions can be</p>
							
						</div><!-- col -->
					</div><!-- row -->
				</div><!-- container -->    
			</div><!-- page-header -->
		</header><!-- HEADER CONTAINER -->
		
		
		<!-- PAGE CONTENT -->
		<div id="page-content">
			<!-- PRICING TABLE -->
            <div class="container price-table">
				<div class="row">
					<div class="col-lg-offset-1 col-md-1 col-sm-2 price-box">
                        <h1>Basic</h1>
                        <div class="price-label">As low as</div>
                        <div class="price-number">$1.99</div>
                        <div class="price-foot">per image*</div>
                        <p>Segmentation, detection, classification, and other basic services as needed. We retain a copy of your data to improve our services.</p>
                    </div>
					<div class="col-lg-offset-1 col-md-1 col-sm-2 price-box">
                        <h1>Professional</h1>
                        <div class="price-label">As low as</div>
                        <div class="price-number">$2.99</div>
                        <div class="price-foot">per image*</div>                        
                        <p>Any basic services and we do not retain a copy of your data. An excellent choice for users demanding extra privacy.</p>
                    </div>
					<div class="col-lg-offset-1 col-md-1 col-sm-2 price-box">
                        <h1>Expert</h1>
                        <div class="price-label">As low as</div>
                        <div class="price-number">$3.99</div>
                        <div class="price-foot">per image*</div>
                        <p>A fully customized solution for very specific problems. We also provide support for your scientific writing as needed.</p>
                    </div>
                </div>
            </div>
            
            <p style="font-size: 9pt; margin-left: 20%; width: 30%; line-height: 16px;"><b>*</b>Price estimate is for images under 2048 x 2048 pixels. Prices may vary for larger images and based on the complexity of requested task(s).</p>
            
            <!-- SPAN -->
			<section class="full-section" id="section-9">
				<div class="full-section-container">
					
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<h2 class="text-center">Look no further</h2>
                                <h5 class="text-center">for the image analysis you need</h5>
                                <br>
								<a class="btn btn-default btn-default-alt" href="<?php echo base_url('index.php/Cyto/login'); ?>" style="display: block; margin-left: auto; margin-right: auto; width: 122px;">Get Started<i class="bronx-icon-arrow-right text-alt-color"></i></a>
							</div><!-- col -->
						</div><!-- row -->
					</div><!-- container -->
					
				</div><!-- full-section-container -->
			</section><!-- full-section -->
			
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
	
	<!-- PARALLAX -->
	<script src="<?php echo base_url('assets/plugins/parallax/jquery.stellar.min.js'); ?>"></script>
	
	<!-- ISOTOPE -->
	<script src="<?php echo base_url('assets/plugins/isotope/imagesloaded.pkgd.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/isotope/isotope.pkgd.min.js'); ?>"></script>
	
	<!-- PLACEHOLDER -->
	<script src="<?php echo base_url('assets/plugins/placeholders/jquery.placeholder.min.js'); ?>"></script>
	
	<!-- CUSTOM JS -->
	<script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
    
    <script text="type/javascript">
        $(document).ready(function() {
            document.getElementById("pricing-button").setAttribute("class", "active");
        });
    </script>
	
</body>

</html>
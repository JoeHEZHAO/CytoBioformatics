<!doctype html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<meta name="keywords" content="">
	<meta name="description" content="">
	
	<title>My Profile | CytoInformatics</title>
	
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
	
	<!-- CUSTOM & PAGES STYLE -->	
    <link rel="stylesheet" href="<?php echo base_url('assets/css/cyto.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/forms.css'); ?>">
	

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
							
							<h1>My <span class="text-default-color">Profile</span></h1>
							
<!--							<p class="tp-caption text">We will contact you to discuss your project</p>-->
							
						</div><!-- col -->
					</div><!-- row -->
				</div><!-- container -->    
			</div><!-- page-header -->
		</header><!-- HEADER CONTAINER -->
		
		
		<!-- PAGE CONTENT -->
		<div id="page-content">
            <div class="userdata">
                <?php
                    $fullname = (empty($miname) ? $firstname.' '.$lastname : $firstname.' '.$miname.' '.$lastname);
                
                    $csrf = array('name' => $this->security->get_csrf_token_name(),
                                  'hash' => $this->security->get_csrf_hash());
                
                    function fieldEmpty($field) {
                        echo (empty($field) ? 'empty' : $field);
                    }
                    function fieldEmptyClass($field) {
                        echo (empty($field) ? 'userdata_empty' : 'userdata_content');
                    }
                ?>

                <form action="<?php echo base_url('index.php'); ?>" method="post" id="edit_profile" enctype="multipart/form-data">
                    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />

                    <div class="userdata_box">
                        <p class="userdata_label">full name</p>
                        <p id="ud_fullname" class="userdata_input <?php fieldEmptyClass($fullname); ?>"><?php echo fieldEmpty($fullname); ?></p>
                    </div>
                    
                    <div class="userdata_box">
                        <p class="userdata_label">email</p>
                        <p class="userdata_input <?php fieldEmptyClass($email); ?>"><?php echo fieldEmpty($email); ?></p>
                        <input id="ud_email" class="userdata_input <?php fieldEmptyClass($email); ?>" disabled style="display: none" value="<?php fieldEmpty($email); ?>">
                    </div>

                    <div class="userdata_box">
                        <p class="userdata_label">gender</p>
                        <input id="ud_gender" class="userdata_input <?php fieldEmptyClass($gender); ?>" disabled value="<?php fieldEmpty($gender); ?>">
                    </div>

                    <div class="userdata_box">
                        <p class="userdata_label">organization</p>
                        <input id="ud_organization" class="userdata_input <?php fieldEmptyClass($organization); ?>" disabled value="<?php fieldEmpty($organization); ?>">
                    </div>

                    <div class="userdata_box">
                        <p class="userdata_label">phone</p>
                        <input id="ud_phone" class="userdata_input <?php fieldEmptyClass($phone); ?>" disabled value="<?php fieldEmpty($phone); ?>">
                    </div>

                    <div class="userdata_box">
                        <p class="userdata_label">address 1</p>
                        <input id="ud_address1" class="userdata_input <?php fieldEmptyClass($address1); ?>" disabled value="<?php fieldEmpty($address1); ?>">
                    </div>

                    <div class="userdata_box">
                        <p class="userdata_label">address 2</p>
                        <input id="ud_address2" class="userdata_input <?php fieldEmptyClass($address2); ?>" disabled value="<?php fieldEmpty($address2); ?>">
                    </div>

                    <div class="userdata_box">
                        <p class="userdata_label">city</p>
                        <input id="ud_city" class="userdata_input <?php fieldEmptyClass($city); ?>" disabled value="<?php fieldEmpty($city); ?>">
                    </div>

                    <div class="userdata_box">
                        <p class="userdata_label">region</p>
                        <input id="ud_region" class="userdata_input <?php fieldEmptyClass($region); ?>" disabled value="<?php fieldEmpty($region); ?>">
                    </div>

                    <div class="userdata_box">
                        <p class="userdata_label">country</p>
                        <input id="ud_country" class="userdata_input <?php fieldEmptyClass($country); ?>" disabled value="<?php fieldEmpty($country); ?>">
                    </div>

                    <div class="userdata_box">
                        <p class="userdata_label">postal code</p>
                        <input id="ud_postalCode" class="userdata_input <?php fieldEmptyClass($postalCode); ?>" disabled value="<?php fieldEmpty($postalCode); ?>">
                    </div>
                    
                    <div class="userdata_box">
                        <a href="#"><i class="fa fa-pencil user_profile_edit"></i></a>

                        <button class="button edit_cancel deactivated">Cancel</button>
                        <button class="button edit_submit deactivated" type="submit">Submit</button>
                    </div>
                
                    <label id="error_label" style="display: none; position: relative; color: red; font-size: 13px; left: 0; bottom: 21px;"></label>
                </form>
            </div>
        </div><!-- PAGE CONTENT -->
		
		<!-- FOOTER -->
		<?php include 'application/templates/footer.php'; ?>
	</div><!-- MAIN CONTAINER -->
	
	
	<!-- SCROLL UP -->
	<a id="scroll-up"><i class="fa fa-angle-up"></i></a>
	
	
	<!-- jQUERY -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
	
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

	<!-- ANIMATIONS -->
	<script src="<?php echo base_url('assets/plugins/animations/wow.min.js'); ?>"></script>
	
	<!-- CUSTOM JS -->
	<script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/userProfile.js'); ?>"></script>
	
</body>

</html>
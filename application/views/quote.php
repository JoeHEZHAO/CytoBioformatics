<!doctype html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<meta name="keywords" content="">
	<meta name="description" content="">
	
	<title>Quote | CytoInformatics</title>
	
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
							
							<h1>Obtain A <span class="text-default-color">Free Quote</span></h1>
							
							<p class="tp-caption text">We will contact you to discuss your project</p>
							
						</div><!-- col -->
					</div><!-- row -->
				</div><!-- container -->    
			</div><!-- page-header -->
		</header><!-- HEADER CONTAINER -->
		
		
		<!-- PAGE CONTENT -->
		<div id="page-content">
            <div class="form">
                <h2>Quote Form</h2>
                <br>
                
                <label id="error_quote" style="display: none; position: relative; color: red; font-size: 13px; left: 0; bottom: 21px;"></label>
                
                <!-- CSRF FORM TOKEN -->
                <?php $csrf = array('name' => $this->security->get_csrf_token_name(),
                                    'hash' => $this->security->get_csrf_hash()); ?>
                
                <form action="<?php echo base_url('index.php'); ?>" method="post" id="submitquote" enctype="multipart/form-data">
                <!--<?php 
                    $attributes = array('method' => 'post', 'id' => 'submitquote', 'enctype' => 'multipart/form-data');
                    echo form_open_multipart('', $attributes);
                ?>-->
                    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                    <div class="top-row">
                        <div class="col-sm-4" style="padding:0;">
                            <div class="field-wrap">
                                <label>
                                    First Name<span class="req">*</span>
                                </label>
                                <!-- automatically fills if available in session -->
                                <?php if(!empty($_SESSION['firstname'])) {  ?>
                                    <input type="text" name="FirstName" value="<?php echo $_SESSION['firstname']; ?>" required autocomplete="off" />
                                <?php }else{  ?>
                                    <input type="text" name="FirstName" value="" required autocomplete="off" />
                                <?php } ?>
                            </div>
                        </div>

                        <div class="col-sm-4" style="padding:0;">
                            <div class="field-wrap">
                                <label>
                                    Last Name<span class="req">*</span>
                                </label>
                                <?php if(!empty($_SESSION['lastname'])) {  ?>
                                    <input type="text" name="LastName" value="<?php echo $_SESSION['lastname']; ?>" required autocomplete="off" />
                                <?php }else{  ?>
                                    <input type="text" name="LastName" value="" required autocomplete="off" />
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Email Address<span class="req">*</span>
                        </label>
                        <?php if(!empty($_SESSION['email'])) {  ?>
                            <input type="email" name="email" value="<?php echo $_SESSION['email']; ?>" required autocomplete="off" />
                        <?php }else{  ?>
                             <input type="email" name="email" value="" required autocomplete="off" />
                        <?php } ?>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Organization<span class="req">*</span>
                        </label>
                        <?php if(!empty($_SESSION['organization'])) {  ?>
                            <input type="organization" name="organization" value="<?php echo $_SESSION['organization']; ?>" required autocomplete="off" />
                        <?php }else{  ?>
                             <input type="organization" name="organization" value="" required autocomplete="off" />
                        <?php } ?>
                    </div>
                    
                    <div class="field-wrap">
                        <label>
                            Phone Number
                        </label>
                        <?php if(!empty($_SESSION['phone'])) {  ?>
                            <input type="phone" name="phone" value="<?php echo $_SESSION['phone']; ?>" required autocomplete="off" />
                        <?php }else{  ?>
                             <input type="phone" name="phone" value="" required autocomplete="off" />
                        <?php } ?>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Subject<span class="req">*</span>
                        </label>
                        <input type="subject" name="subject" required autocomplete="off"/>
                    </div>
                    
                    <div class="field-wrap-message">
                        <label>
                            Message<span class="req">*</span> (max: 500 characters)
                        </label>
                        <textarea type="message" name="message" required maxlength="500" autocomplete="off"></textarea>
                    </div>

                    <div id="file-upload-quote" class="file-upload">
                        Upload up to 3 images (up to 10MB each. Extensions .jpg, .png, and .gif accepted)
                        <button type="button" class="button button-block" onclick="addFileUpload()" style="width: 200px;">Add File</button>
                    </div>
                    
                    <button type="submit" class="button button-block" style="width: 200px; margin-top: 50px;">Submit</button>
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
	<script src="<?php echo base_url('assets/js/quoteform.js'); ?>"></script>
    
    <script text="type/javascript">
        $(document).ready(function() {
            document.getElementById("quote-button").setAttribute("class", "active");
        });
        
        function addFileUpload() {
            var num_fileinputs = document.querySelectorAll('#file-upload-quote input').length;
            if (num_fileinputs<3) {
                var x = document.createElement("INPUT");
                x.setAttribute("type", "file");
                x.setAttribute("name", "filename" + num_fileinputs.toString());
                x.setAttribute("multiple", "false");
                document.getElementById("file-upload-quote").appendChild(x);
            }
        }
    </script>
	
</body>

</html>
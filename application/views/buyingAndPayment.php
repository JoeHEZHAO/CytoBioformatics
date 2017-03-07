<!doctype html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
	
	<title>Projects and Payment | CytoInformatics</title>
    
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
			
			<!-- SERVICES -->
			<div class="container">
                <div class="row">
                    <div class="col-sm-12">
						<div class="headline text-center">
							<h2>My Projects</h2>
						</div><!-- headline -->
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
            
            <div class="container">
                <?php if ($num_rows > 0) { ?>
                    <form method="post" action="" id="ServiceQuantity">
                        <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class=payment-table-header>
                                <tr>
                                    <th>Subject</th>
                                    <th>Organization</th>
                                    <th>Date Created</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Subtotal</th>
                                    <th>Select</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php if($rows != 'failed') {
                                    foreach ($rows as $key => $value) { ?> 
                                        <tr>
                                            <td><?php echo substr($value['subject'], 0, 15)?></td>
                                            <td><?php echo $value['organization']?></td>
                                            <td><?php echo $value['created_at']?></td>
                                            <td><?php echo $value['message']?></td>
                                            <td><?php echo $value['status']?></td>
                                            <td><?php echo $value['subTotal']?></td>
                                            <td><?php if ($value['status'] == 'approved') { ?>
                                                <input type="checkbox" name="<?php echo $value['quoteId']?>" value="<?php echo $value['subTotal']?>" style="float: right;">
                                                <input type="hidden" name="<?php echo $value['quoteId']?>" value="<?php echo $value['subject']?>" style="float: right;">
                                            <?php } else {} ?></td>
                                        </tr>
                                    <?php }
                                } else {} ?>
                            </tbody>
                        </table>
                        </div>
                        <input type="submit" class="payment-button" name="<?php echo base_url('index.php'); ?>" id="checkout" value="Continue" style="float:right">
                    </form>
                <?php } else { ?>
                    <h4>You have no active projects yet.</h4> 
                    <p><a href="<?php echo base_url('index.php/Cyto/quote'); ?>">Submit a quote</a> to get started.</p>
                <?php } ?>
            </div>
			
			<!--<div class="container">
				<div class="col-sm-12">
					<div class="item">

                        <div class="row">

                            <div class="col-sm-4 payment-table-col payment-table-header">
                                Subject
                            </div>

                            <div class="col-sm-4 payment-table-col payment-table-header">
                                Organization
                            </div>

                            <div class="col-sm-4 payment-table-col payment-table-header">
                                Date Created
                            </div>

                            <div class="col-sm-4 payment-table-col payment-table-header">
                                Message
                            </div>

                            <div class="col-sm-4 payment-table-col payment-table-header">
                                Status
                            </div>

                            <div class="col-sm-4 payment-table-col-small payment-table-header">
                                Subtotal
                            </div>
                            
                            <div class="col-sm-4 payment-table-col-small payment-table-header">
                                Select
                            </div>

                        </div>

						<form method="post" action="" id="ServiceQuantity">
				 	<?php
				 	if($rows != 'failed'){
						 foreach ($rows as $key => $value) {
						 ?> 
							<div class="row">
								<div class="col-sm-4 payment-table-col">
									<?php echo substr($value['subject'], 0, 15)?>
								</div>
								
								<div class="col-sm-4 payment-table-col">
									<?php echo $value['organization']?>
								</div>

								<div class="col-sm-4 payment-table-col">
									<?php echo $value['created_at']?>
								</div>

								<div class="col-sm-4 payment-table-col">
									<?php echo $value['message']?>
								</div>

								<div class="col-sm-4 payment-table-col">
									<?php echo $value['status']?>
								</div>

								<div class="col-sm-4 payment-table-col-small">
									<?php echo $value['subTotal']?>
                                </div>
                                
                                <div class="col-sm-4 payment-table-col-small">
									<?php if ($value['status'] == 'approved') { ?>
									    <input type="checkbox" name="<?php echo $value['quoteId'] ?>" value="<?php echo $value['subTotal']?>" style="float: right;">
									    <input type="hidden" name="<?php echo $value['quoteId']?>" value="<?php echo $value['subject']?>" style="float: right;">
									<?php }else{  } ?>
								</div>
							</div>
						<?php  }
							   	}else{}?>
							<input type="submit" class="payment-button" name="<?php echo base_url('index.php'); ?>" id="checkout" value="Continue" style="float:right">
						</form>

					</div>
				</div>
            </div>-->

        </div><!-- PAGE-CONTENT -->
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
	
	<!-- CHARTS -->
	<script src="<?php echo base_url('assets/plugins/charts/jquery.easypiechart.min.js'); ?>"></script>
	
	<!-- INSTAFEED -->
	<script src="<?php echo base_url('assets/plugins/instafeed/instafeed.min.js'); ?>"></script>
	
	<!-- COUNTDOWN -->
	<script src="<?php echo base_url('assets/plugins/countdown/jquery.countdown.min.js'); ?>"></script>
	
	<!-- ANIMATIONS -->
	<script src="<?php echo base_url('assets/plugins/animations/wow.min.js'); ?>"></script>
	
	<!-- CUSTOM JS -->
	<script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>

	<script src="<?php echo base_url('assets/js/buyingAndPayment.js'); ?>"></script>

	<script type="text/javascript">
		$(document).ready(function() {

			$('.container2').hide();

		});
	</script>

</body>

</html>
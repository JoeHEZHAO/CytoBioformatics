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

	<style type="text/css">
		.col-sm-4{
			width : 15%;
		}

	</style>

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
						<div class="headline text-center">
							<p>Our Offered</p>
							<h2>Choose Quotes</h2>
						</div><!-- headline -->
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
			
			<div class="container">
				<div class="col-sm-12">
					<div class="item">

                        <div class="row">

                            <div class="col-sm-4">
                                Quote ID
                            </div><!-- col -->

                            <div class="col-sm-4 ">
                                Organization
                            </div><!-- col -->

                            <div class="col-sm-4">
                                Created Date
                            </div><!-- col -->

                            <div class="col-sm-4">
                                Message
                            </div><!-- col -->

                            <div class="col-sm-4 ">
                                Status
                            </div><!-- col -->

                            <div class="col-sm-4">
                                SubTotal
                            </div><!-- col -->

                        </div><!-- row -->

						<form method="post" action="" id="ServiceQuantity"> <!-- form -->
						 <?php foreach ($rows as $key => $value) {
						 ?> 
							<div class="row">
								<div class="col-sm-4">
									<?php echo substr($value['quoteId'], 0, 15)?>
								</div><!-- col -->
								
								<div class="col-sm-4 ">
									<?php echo $value['organization']?>
								</div><!-- col -->

								<div class="col-sm-4">
									<?php echo $value['created_at']?>
								</div><!-- col -->

								<div class="col-sm-4">
									<?php echo $value['message']?>
								</div><!-- col -->

								<div class="col-sm-4 ">
									<?php echo $value['status']?>
								</div><!-- col -->

								<div class="col-sm-4">
									<?php echo $value['subTotal']?>
									<?php if ($value['status'] == 'approved') { ?>
									    <input type="checkbox" name="<?php echo $value['quoteId'] ?>" value="<?php echo $value['subTotal']?>" style="float: right;">
									<?php }else{  } ?>

								</div><!-- col -->
							</div><!-- row -->
						<?php  }?>

							<input type="submit" name="submit" value="Continue" style="float:right">
						</form> <!-- form -->

					</div><!-- item -->
				</div><!-- col -->
            </div><!-- container -->

            <div class="container2">
                <div class="container">
                    <div class="col-sm-12">
                        <div class="item">
                            <div class="row" id="numOfDet">
                                <div class="col-sm-4">
                                    <div class="service-box style-1">
                                        <img src="<?php echo base_url('images/services/muscle.jpg'); ?>" alt="">
                                        <i class="bronx-icon-bubble"></i>
                                        <div class="service-box-content">
                                            <h6 style="margin-bottom: 0px"><a href="solutions.html">Detection</a></h6>
                                            <!-- <p>Lung cell detection, tumor segmentation, tumor grading, and more are practical solutions with our platform.</p> -->
                                            <label id="label_quantity_detection">Total Purchase Number: </label>

                                        </div><!-- service-box-content -->
                                    </div><!-- service-box -->
                                </div><!-- col -->

                                <div class="col-sm-4">
                                    <div class="service-box style-1">
                                        <label>Image Size: 500 X 500: <input type="number" name="detection_500_500" min="0" value="0" 
                                        style="color: #24171E; background-color: #D4E8F6"></label><br>
                                        <label>Image Size: 1000 X 1000: <input type="number" name="detection_1000_1000" min="0" value="0" 
                                        style="color: #24171E; background-color: #D4E8F6"></label><br>
                                        <label>Image Size: 2000 X 2000: <input type="number" name="detection_10000_10000" min="0" value="0" 
                                        style="color: #24171E; background-color: #D4E8F6"></label><br>
                                        <input type="button" id='nextToSeg' value="Next" style="float: right;">
                                    </div><!-- service-box -->
                                </div><!-- col -->
                            </div>

                            <input type="button" name="<?php echo base_url('index.php'); ?>" id='checkout' value="Checkout" style="float: right;">
                        </div>
                    </div>
                </div><!-- container -->
            </div><!-- container2 -->
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

	<script src="<?php echo base_url('assets/js/buyingAndPayment.js'); ?>"></script>

	<script type="text/javascript">
		$(document).ready(function() {

			$('.container2').hide();

		});
	</script>

</body>

</html>
<div id="header">
	<div class="container-fluid">
		<div class="row" style="background-color: #36394a;">
			<div class="col-sm-3">
				
				<!-- LOGO -->
				<div id="logo">
					<a href="<?php echo base_url('index.php/cyto_bioformatics/index'); ?>">
						<!-- <img src="assets/images/logo.png" alt=""> -->
						<img style="width: 75px; height: 75px" alt="<?php echo base_url();?>" src="https://localhost/Codeigniter/assets/images/cyto_logo.png" />
					</a>
				</div><!-- LOGO -->
				
			</div><!-- col -->
			<div class="col-sm-9">
				
				<!-- MENU --> 
				<nav>
					<a id="mobile-menu-button" href="#"><i class="bronx-icon-lines"></i></a> 
					
					<ul class="menu clearfix" id="menu">
						<li class="active"><a href="<?php echo base_url('index.php/cyto_bioformatics/index'); ?>">Home</a></li>
						<li><a href="<?php echo base_url('index.php/solutions'); ?>">Solutions</a></li>
						<li><a href="<?php echo base_url('index.php/cyto_bioformatics/demo'); ?>">Demo</a></li>
						<li><a href="<?php echo base_url('index.php/cyto_bioformatics/workflow'); ?>">WorkFlow</a></li>
						<li><a href="<?php echo base_url('index.php/cyto_bioformatics/contact'); ?>">Contact</a></li>
						
					<!-- login button if not logged in -->
					<?php if(!empty($firstname)): ?>
						<li class="dropdown">
							<a href="<?php echo base_url('index.php/cyto_bioformatics/login'); ?>"><?php echo $firstname," ", $lastname; ?></a>
							<ul>
								<li><a href="<?php echo base_url('index.php/cyto_bioformatics/contact'); ?>">About us</a></li>
								<li><a href="<?php echo base_url('index.php/cyto_bioformatics/buyingAndPayment'); ?>">Buying and Payment</a></li>

								<li><a href="<?php echo base_url('index.php/cyto_bioformatics/User_Payment_Info') ?>">User Payment Management</a></li>
								<li><a href="services.html">Services</a></li>
								<li><a href="single-service.html">Single service</a></li>
								<li class="dropdown">
									<a href="#">Special pages</a>
									<ul>
										<li><a href="error-404.html">Error 404</a></li>
										<li><a href="maintenance.html">Maintenance</a></li>
										<li><a href="comming-soon.html">Comming soon</a></li>
										<li><a href="faq.html">FAQ</a></li>
										<li><a href="search-results.html">Search results</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#">Samples pages</a>
									<ul>
										<li><a href="page-no-sidebar.html">No sidebar</a></li>
										<li><a href="page-right-sidebar.html">Right sidebar</a></li>
										<li><a href="page-left-sidebar.html">Left sidebar</a></li>
										<li><a href="page-fluid.html">Fluid page</a></li>
									</ul>
								</li> 
							</ul>
						</li>
						<li class="dropdown">
							<a href=" <?php echo base_url('index.php/cyto_bioformatics/logout'); ?>">Logout</a>									
						</li>
					<?php else: ?>
						<li class="dropdown">
								<a href="<?php echo base_url('index.php/cyto_bioformatics/login'); ?>">Login | Sign Up</a>
						</li>
					<?php endif; ?>
						
						<li class="search">
							<a id="search-button" href="#"><i class="fa fa-search"></i></a>
							<div id="search-form-container">
								<form id="search-form" action="#">
									<input id="search" type="search" name="search" placeholder="Enter keywords...">
									<input id="search-submit" type="submit" value="">
								</form>
							</div><!-- search-form-container -->
						</li>
					</ul>
				</nav>
			</div><!-- col -->
		</div><!-- row -->
	</div><!-- container-fluid -->
</div><!-- navigation bar -->
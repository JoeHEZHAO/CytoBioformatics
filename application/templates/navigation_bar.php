<div id="header">
	<div class="container-fluid">
		<div class="row navbar-container">
            <div class="navbar-content">
                <div class="col-sm-3">

                    <!-- LOGO -->
                    <div id="logo">
                        <a href="<?php echo base_url('index.php/Cyto/index'); ?>">
                            <!-- <img src="assets/images/logo.png" alt="" style="width: 75px; height: 75px"> -->
                            <img src="<?php echo base_url('assets/images/cyto_logo.png'); ?>" alt="<?php echo base_url(); ?>" width="75" height="75">
                        </a>
                        <a href="<?php echo base_url('index.php/Cyto/index'); ?>"><div class="navbar-company-name">CytoInformatics</div></a>
                    </div><!-- LOGO -->

                </div><!-- col -->
                <div class="col-sm-9">

                    <!-- MENU --> 
                    <nav>
                        <a id="mobile-menu-button" href="#"><i class="bronx-icon-lines"></i></a> 

                        <ul class="menu clearfix" id="menu">
                            <li id="home-button"><a href="<?php echo base_url('index.php/Cyto/index'); ?>">Home</a></li>
                            <li id="solutions-button"><a href="<?php echo base_url('index.php/Cyto/solutions'); ?>">Solutions</a></li>
                            <li id="demo-button"><a href="<?php echo base_url('index.php/Cyto/demo'); ?>">Demo</a></li>
                            <li id="workflow-button"><a href="<?php echo base_url('index.php/Cyto/workflow'); ?>">WorkFlow</a></li>
                            <!--<li id="pricing-button"><a href="<?php echo base_url('index.php/Cyto/pricing'); ?>">Pricing</a></li>-->
                            <li id="quote-button"><a href="<?php echo base_url('index.php/Cyto/quote'); ?>">Quote</a></li>
                            <li id="about_us-button"><a href="<?php echo base_url('index.php/Cyto/about_us'); ?>">About Us</a></li>

                        <!-- login button if logged in -->
                        <?php if(!empty($firstname)): ?>
                            <li class="dropdown">
                                <!--<a href="#"><?php echo $firstname," ", $lastname; ?></a>-->
                                <a href="#">Hi, <?php echo $firstname; ?></a>
                                <ul style="left: auto; right: 0;">
                                    <li><a href="<?php echo base_url('index.php/Cyto/user_profile'); ?>">My Profile</a></li>
                                    <li><a href="<?php echo base_url('index.php/Cyto/buyingAndPayment'); ?>">Projects and Payment</a></li>
                                    <li><a href="<?php echo base_url('index.php/Cyto/password_reset'); ?>">Change Password</a></li>
                                    <!--<li><a href="services.html">Services</a></li>
                                    <li><a href="single-service.html">Single service</a></li>
                                    <li class="dropdown">
                                        <a href="#">Special pages</a>
                                        <ul>
                                            <li><a href="error-404.html">Error 404</a></li>
                                            <li><a href="maintenance.html">Maintenance</a></li>
                                            <li><a href="comming-soon.html">Coming soon</a></li>
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
                                    </li>-->
                                    <li><a href=" <?php echo base_url('index.php/Cyto/logout'); ?>">Logout</a></li>
                                </ul>
                            </li>
                        <?php else: ?>
                            <li>
                                    <a href="<?php echo base_url('index.php/Cyto/login'); ?>">Login | Sign Up</a>
                            </li>
                        <?php endif; ?>

                            <!--<li class="search">
                                <a id="search-button" href="#"><i class="fa fa-search"></i></a>
                                <div id="search-form-container">
                                    <form id="search-form" action="#">
                                        <input id="search" type="search" name="search" placeholder="Enter keywords...">
                                        <input id="search-submit" type="submit" value="">
                                    </form>
                                </div>
                            </li>-->
                        </ul>
                    </nav>
                </div><!-- col -->
            </div>
		</div><!-- row -->
	</div><!-- container-fluid -->
</div><!-- navigation bar -->
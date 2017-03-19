<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login / Sign Up | CytoInformatics</title>
    
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
    
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css'); ?>">
</head>

<body>
  <div class="form">
      
      <a href="<?php echo base_url('index.php/Cyto/index'); ?>">
          <img src="<?php echo base_url('assets/images/cyto_logo.png'); ?>" style="width: 150px; display: block; margin: auto; margin-bottom: 50px;">
      </a>
          
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Create New Account</h1>

          <label id="error_signup" style="display: none; position: relative; color: red; font-size: 13px; left: 0; bottom: 21px;"></label>
            
          <!-- CSRF FORM TOKEN -->
          <?php $csrf = array('name' => $this->security->get_csrf_token_name(),
                              'hash' => $this->security->get_csrf_hash()); ?>
            
          <form action="<?php echo base_url('index.php'); ?>" method="post" id="register">
          
            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
            <div class="top-row">
              <div class="field-wrap">
                <label>
                  First Name<span class="req">*</span>
                </label>
                <input type="text" name="FirstName" required autocomplete="off" />
              </div>
        
              <div class="field-wrap">
                <label>
                  Last Name<span class="req">*</span>
                </label>
                <input type="text" name="LastName" required autocomplete="off"/>
              </div>
            </div>

            <div class="field-wrap">
              <label>
                Organization
              </label>
              <input type="text" name="organization" autocomplete="off"/>
            </div>

            <div class="field-wrap">
              <label>
                Phone Number
              </label>
              <input type="text" name="phone" autocomplete="off"/>
            </div>

            <div class="field-wrap">
              <label>
                Email Address<span class="req">*</span>
              </label>
              <input type="email" name="email" required autocomplete="off"/>
            </div>
          
            <div class="field-wrap">
              <label>
                Set A Password (Min. 8 characters)<span class="req">*</span>
              </label>
              <input type="password" name="password" required autocomplete="off"/>
            </div>
          
            <div class="field-wrap">
              <label>
                Confirm Password<span class="req">*</span>
              </label>
              <input type="password" name="password_c" required autocomplete="off"/>
            </div>
          
            <button type="submit" class="button button-block">Get Started</button>
          </form>
          
          <a href="<?php echo base_url('index.php/Cyto/index'); ?>"><button id="return-button" class="button button-block" style="display: none;">Return</button></a>
            
          <p class="resend_activate" style="display: none;">Resend email</p>

        </div>
        
        <div id="login" >   
          <h1>Welcome Back!</h1>
          <label id="error_login" style="display: none; position: relative; color: red; font-size: 13px; left: 0; bottom: 21px;"></label>

          <form action="<?php echo base_url('index.php'); ?>" method="post" id="userlogin">
          
            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
            <div class="field-wrap">
              <label>
                Email Address<span class="req">*</span>
              </label>
              <input type="email" name="email_login" required autocomplete="off"/>
            </div>
          
            <div class="field-wrap">
              <label>
                Password<span class="req">*</span>
              </label>
              <input type="password" name="password_login" required autocomplete="off"/>
            </div>
          
            <p class="forgot"><a href="<?php echo base_url('index.php/Cyto/forgot_password'); ?>">Forgot Password?</a></p>
          
            <button class="button button-block">Log In</button>
          
          </form>
              
        </div>
        
      </div><!-- tab-content -->
      
    </div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  <script src="<?php echo base_url('assets/js/login.js'); ?>"></script>

</body>
</html>

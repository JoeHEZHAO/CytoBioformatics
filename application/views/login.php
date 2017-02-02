<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login / Sign Up | CytoInformatics</title>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css'); ?>">
</head>

<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>

        <label id="error_signup" style="display: none; position: relative; color: red; font-size: 13px; left: 0; bottom: 21px;"></label>
          
          <form action="<?php echo base_url('index.php'); ?>" method="post" id="register">
          
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
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        
        <div id="login" >   
          <h1>Welcome Back!</h1>
          <label id="error_login" style="display: none; position: relative; color: red; font-size: 13px; left: 0; bottom: 21px;"></label>

          <form action="<?php echo base_url('index.php'); ?>" method="post" id="userlogin" >
           <!-- <form  method="post" id="login"> -->
          
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
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  <script src="<?php echo base_url('assets/js/login.js'); ?>"></script>

</body>
</html>
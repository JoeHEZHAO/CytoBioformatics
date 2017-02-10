<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Reset Password | CytoInformatics</title>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css'); ?>">
</head>

<body>
  <div class="form">
      <a href="<?php echo base_url('index.php/cyto_bioformatics/index'); ?>">
          <img src="<?php echo base_url('assets/images/cyto_logo.png'); ?>" style="width: 150px; display: block; margin: auto; margin-bottom: 50px;">
      </a>
            
      <!-- CSRF FORM TOKEN -->
      <?php $csrf = array('name' => $this->security->get_csrf_token_name(),
                          'hash' => $this->security->get_csrf_hash()); ?>
      
      <div>        
        <div id="password_reset_window" >   
          <h1>Create a new password</h1>
          <label id="error_reset" style="display: block; text-align: center; position: relative; color: white; font-size: 13px; left: 0; bottom: 21px;">Please enter a new password (Min. 8 characters).</label>

          <form action="<?php echo base_url('index.php'); ?>" method="post" id="reset_password">
          
            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
          
            <input type="hidden" name="email" value="<?php echo $email; ?>" />
              
            <div class="field-wrap">
              <label>
                Set A Password<span class="req">*</span>
              </label>
              <input type="password" name="password" required autocomplete="off"/>
            </div>
          
            <div class="field-wrap">
              <label>
                Confirm Password<span class="req">*</span>
              </label>
              <input type="password" name="password_c" required autocomplete="off"/>
            </div>
          
            <button class="button button-block">Confirm</button>
          </form>
        </div>
      </div>
  </div>
    
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  <script src="<?php echo base_url('assets/js/password.js'); ?>"></script>

</body>
</html>

<?php 
date_default_timezone_set('America/New_York');

   class Email extends CI_Controller { 
 
      function __construct() { 
         parent::__construct(); 
         $this->load->library('session'); 
         $this->load->helper('form'); 
      } 
		
      public function index() { 
	
         $this->load->helper('form'); 
         $this->load->view('email_form'); 
      } 
  
      public function password_reset() {
          $data['email'] = $this->security->xss_clean($this->input->post('email'));
          $this->load->model('Email_model');
		      $resp = $this->Email_model->send_passwordreset($data);
          echo $resp;
      }
   } 
?>
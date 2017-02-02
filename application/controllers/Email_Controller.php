<?php 
date_default_timezone_set('America/New_York');

   class Email_controller extends CI_Controller { 
 
      function __construct() { 
         parent::__construct(); 
         $this->load->library('session'); 
         $this->load->helper('form'); 
      } 
		
      public function index() { 
	
         $this->load->helper('form'); 
         $this->load->view('email_form'); 
      } 
  
      public function send_mail() { 

         $config = Array(
              'protocol' => 'smtp',
              'smtp_host' => 'ssl://smtp.googlemail.com',
              'smtp_port' => 465,
              'smtp_user' => 'zhaohezzu@gmail.com',
              'smtp_pass' => 'Zh63963252',
              'mailtype'  => 'html', 
              'charset' => 'utf-8',
              'wordwrap' => TRUE

         );
          $this->load->library('email', $config);
          $this->email->set_newline("\r\n");
          $email_setting  = array('mailtype'=>'html');
          $this->email->initialize($email_setting);
          $email_body ="<div>This is a test for sending email through Codeigniter.</div>";
          $this->email->from('zhaohezzu@gmail.com', 'he zhao');

          // $list = array('...@gmail.com');
          $to_email = $this->input->post('email'); 
          $this->email->to( $to_email);
          $this->email->subject('Testing Email');
          $this->email->message($email_body);

          $this->email->send();
          echo $this->email->print_debugger();

      }



         // $from_email = "zhaohezzu@gmail.com"; 
         // $to_email = $this->input->post('email'); 
   
         // //Load email library 
         // $this->load->library('email'); 
   
         // $this->email->from($from_email, 'Your Name'); 
         // $this->email->to($to_email);
         // $this->email->subject('Email Test'); 
         // $this->email->message('Testing the email class.'); 
   
         // //Send mail 
         // if($this->email->send()) 
         // $this->session->set_flashdata("email_sent","Email sent successfully."); 
         // else 
         // $this->session->set_flashdata("email_sent","Error in sending Email."); 
         // $this->load->view('email_form'); 
      // } 
   } 
?>
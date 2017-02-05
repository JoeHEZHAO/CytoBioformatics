<?php 
date_default_timezone_set('America/New_York');

   class email_receipt_model extends CI_Model{
 
      function __construct() { 
         parent::__construct(); 
         $this->load->helper('form'); 
      } 

      public function send_mail($billAddr,$transInfo) { 

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
          $this->email->initialize($config);
          $this->email->set_newline("\r\n");
          // $email_body ="<div>This is a test for sending email through Codeigniter.</div>";
          $this->email->from('zhaohezzu@gmail.com', 'he zhao');

          $data['billEmail'] = $billAddr['billEmail'];
          $data['streetAddress'] = $billAddr['streetAddress'];
          $data['zipCode'] = $billAddr['zipCode'];
          $data['city'] = $billAddr['city'];
          $data['country'] = $billAddr['country'];
          $data['transId'] = $billAddr['transId'];

          $data['accountNumber'] = $transInfo['accountNumber'];
          $data['accountType'] = $transInfo['accountType'];
          $data['amount'] = $transInfo['amount'];
          $data['TranDate'] = $transInfo['TranDate'];
          $data['firstname'] = $transInfo['firstname'];
          $data['lastname'] = $transInfo['lastname'];

          // $list = array('...@gmail.com');
          $this->email->to($billAddr['billEmail']);
          $this->email->subject('Auto-Receipt');
          // $this->email->message($email_body);
          $this->email->message($this->load->view('email_receipt',$data, true));
          $fileLocation = '/Users/zhaohe/htdocs/localhost/';
          $this->email->attach($fileLocation.'output.pdf');
          $this->email->send();
          echo $this->email->print_debugger();

      }
   } 
?>
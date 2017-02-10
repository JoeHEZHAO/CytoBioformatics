<?php 
date_default_timezone_set('America/New_York');

class Email_model extends CI_Model{

    function __construct() { 
        parent::__construct(); 
        $this->load->helper('form'); 
    } 

    public function send_receipt($billAddr, $transInfo) { 

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

    public function send_passwordreset($data) { 
        
        // check email is in database and update database if needed
        $this->db->from('UserInfo');
        $this->db->where('email', $data['email']);
        $records = $this->db->get()->row();
        if (empty($records)) {
            return "email_not_exist";
        } else {
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
            $this->email->from('zhaohezzu@gmail.com', 'he zhao');
            
            $this->email->to($data['email']);
            $this->email->subject('Auto-Receipt');
            $this->email->message($this->load->view('email_passwordreset', $data, true));
            if($this->email->send()) {
                return "success";
            } else {
                return "failed_to_send";
            }
            
//            $this->email->send();
//            echo $this->email->print_debugger();
        }
    }
} 
?>
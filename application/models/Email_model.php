<?php 
date_default_timezone_set('America/New_York');

class Email_model extends CI_Model{

    function __construct() { 
        parent::__construct(); 
        $this->load->helper('form'); 
    } 
    
    private function email_config() {
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
        // 465 for ssl, 587 for tls
        return $config;
    }

    public function send_mail($billAddr,$transInfo,$email) { 

        $config = $this->email_config();
        
        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->set_newline("\r\n");
        $this->email->from($config['smtp_user'], 'CytoInformatics');

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

        $data['quoteIds'] = $_SESSION['quoteIds'];
        $data['quoteCharges'] = $_SESSION['quoteCharges'];
        $data['name'] = 'hezhao';

        // $list = array('...@gmail.com');
        $this->email->to($billAddr['billEmail']);
        $this->email->subject('Auto-Receipt');
        $this->email->message($this->load->view('email_receipt', $data, true));
        $fileLocation = '/Users/zhaohe/htdocs/localhost/Codeigniter/receipt/'.$email;
        // $fileLocation = '/home/cytoinfo/public_html/receipt/'.$email;
        $this->email->attach($fileLocation.'/'.$data['transId'].'.pdf');
        $this->email->send();
      }

    public function send_passwordreset($data) { 
        
        // check email is in database and update database if needed
        $this->db->from('UserInfo');
        $this->db->where('email', $data['email']);
        $records = $this->db->get()->row();
        if (empty($records)) {
            return "email_not_exist";
        } else {
            // generate new pass and update ResetPassword database
            $token = md5(uniqid(mt_rand(), true));
            $data['token'] = $token;
            $this->load->model('UserInfo_model');
            // if email exists, modify row; if not, insert new row 
            if ($this->UserInfo_model->check_resetpassword_exists($data['email'])) {
                if (!($this->UserInfo_model->replace_resetpassword($data['email'], $token))) {
				    return "generate_token_failed";
			     }
            } else if (!($this->UserInfo_model->insert_resetpassword($data['email'], $token))) {
				return "generate_token_failed";
			}            
            
            $config = $this->email_config();
            
            $this->load->library('email', $config);
            $this->email->initialize($config);
            $this->email->set_newline("\r\n");
            $this->email->from($config['smtp_user'], 'CytoInformatics');
            
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
    
    public function send_activateaccount($email, $activate_token) {
        // check email is in database and update database if needed
        $this->db->from('UserInfo');
        $this->db->where('email', $email);
        $records = $this->db->get()->row();
        if (empty($records)) {
            return "email_not_exist";
        } else {
            $data = array(
                'encoded_email' => rawurlencode($email),
                'activate_token' => $activate_token
            );
            
            $config = $this->email_config();
            
            $this->load->library('email', $config);
            $this->email->initialize($config);
            $this->email->set_newline("\r\n");
            $this->email->from($config['smtp_user'], 'CytoInformatics');
            
            $this->email->to($email);
            $this->email->subject('Activate Your Account - CytoInformatics');
            $this->email->message($this->load->view('email_activateaccount', $data, true));
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
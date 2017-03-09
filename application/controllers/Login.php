<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	
	public function index()
	{
		$this->load->model('Login_model');

        $email = $this->security->xss_clean($this->input->post('email'));
        $password = $this->security->xss_clean($this->input->post('password'));
        
        // if user data exists in database, login user
        $data = $this->Login_model->checkUser($email, $password);
//        var_dump($data);
        if (!($data['result']->status === 'pending')) {
            if ($data['login_status'] === 'not_found') {
                echo "failed";
            } else if ($data['login_status'] === 'incorrect') {
                echo $this->Login_model->loginAttempt(false, $data['result']);
            } else if ($data['login_status'] === 'correct') {
                $resp = $this->Login_model->loginAttempt(true, $data['result']);
                if ($resp == '') {
                    $this->create_session($data['result']->firstname,
                                          $data['result']->lastname,
                                          $data['result']->email,
                                          $data['result']->organization,
                                          $data['result']->phone,
                                          $data['result']->ID);
                }
                echo $resp;
            } else {
                echo 'error'; 
            }	
        } else {
            echo 'account_pending';
        }
	}
    
    public function create_session($first, $last, $email, $org, $phone, $id) {
        $_SESSION['firstname'] = $first;
        $_SESSION['lastname'] = $last;
        $_SESSION['email'] = $email;
        $_SESSION['organization'] = $org;
        $_SESSION['phone'] = $phone;
        $_SESSION['ID'] = $id;
        return true;
    }
    
    public function activate_account($encoded_email, $token) {
        $this->load->model('UserInfo_model');
        $data = $this->UserInfo_model->activate_account(rawurldecode($encoded_email), $token);
        if (!empty($data)) {
            $this->create_session($data->firstname, 
                                  $data->lastname,
                                  $data->email,
                                  $data->organization,
                                  $data->phone,
                                  $data->ID);
            $this->load->view('account_activated');
        } else {
            echo "An error occurred.";
        }
    }

}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{
	
	public function index()
	{
		$this->load->model('Register_model');
		$UniqueID = md5(uniqid(mt_rand(), true));
        $activate_token = md5(uniqid(mt_rand(), true));
        
        $email = $this->security->xss_clean($this->input->post('email'));
        $firstname = $this->security->xss_clean($this->input->post('FirstName'));
        $lastname = $this->security->xss_clean($this->input->post('LastName'));
        $password = $this->security->xss_clean($this->input->post('password'));
        $organization = $this->security->xss_clean($this->input->post('organization'));
        $phone = $this->security->xss_clean($this->input->post('phone'));
        
        // hash password before checking database
        $password = password_hash($password, PASSWORD_DEFAULT);

        $data = $this->Register_model->checkerExisted($email);
		if (empty($data)) {
            $this->Register_model->register($email, 
                                            $firstname,
                                            $lastname,
                                            $password, 
                                            $organization,
                                            $phone,
                                            $UniqueID,
                                            $activate_token);
//            $_SESSION['firstname'] = $firstname;
//            $_SESSION['lastname'] = $lastname;
//            $_SESSION['email'] = $email;
//            $_SESSION['organization'] = $organization;
//            $_SESSION['phone'] = $phone;
//            $_SESSION['ID'] = $UniqueID;
            $this->load->model('Email_model');
            if ($this->Email_model->send_activateaccount($email, $activate_token) == 'success') {
                echo "";
            } else {
                echo 'activate_email_failed';
            }
        } else if ($data->status !== 'pending') {
			echo "Email address already exists.";
		} else {
            echo 'account_pending';
        }
	}
    
    public function reset_password() {
        $email = $this->security->xss_clean($this->input->post('email'));
        $password = $this->security->xss_clean($this->input->post('password'));
        $password_old = $this->security->xss_clean($this->input->post('password_old'));
        
        $this->load->model('UserInfo_model');
        $data = $this->UserInfo_model->selectForLogin($email, $password_old);
        if ($data['login_status'] === 'correct') {
            if ($this->UserInfo_model->check_resetpassword_isnew($email, $password)) {
                $password = password_hash($password, PASSWORD_DEFAULT);
                if ($this->UserInfo_model->reset_password($email, $password)) {
                    echo "success";   
                } else {
                    echo "failed_to_update";
                }
            } else {
                echo "used_password";
            }
        } else {
            echo "incorrect_password";
        }
    }
    
    public function reset_password_token() {
        $email = $this->security->xss_clean($this->input->post('email'));
        $password = $this->security->xss_clean($this->input->post('password'));
        
        $this->load->model('UserInfo_model');
        if ($this->UserInfo_model->check_resetpassword_isnew($email, $password)) {
            $password = password_hash($password, PASSWORD_DEFAULT);
            if ($this->UserInfo_model->reset_password($email, $password)) {
                echo "success";   
            } else {
                echo "failed_to_update";
            }
        } else {
            echo "used_password";
        }
    }
}
?>
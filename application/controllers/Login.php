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
		if (!empty($data['result'] = $this->Login_model->checkUser($email, $password)))
		{
			$_SESSION['firstname'] = $data['result']->firstname;
			$_SESSION['lastname'] = $data['result']->lastname;
            $_SESSION['email'] = $data['result']->email;
            $_SESSION['organization'] = $data['result']->organization;
            $_SESSION['phone'] = $data['result']->phone;
            $_SESSION['ID'] = $data['result']->ID;
			echo "";
		}
		else
		{
			echo "failed"; 
		}	
	
	}

}
?>
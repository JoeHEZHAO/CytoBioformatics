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
//            var_dump($data['result']);
			$_SESSION['firstname'] = $data['result']->firstname; // data type always a problem
			$_SESSION['lastname'] = $data['result']->lastname;

			echo "";
		}
		else
		{
			echo "failed"; 
		}	
	
	}

}
?>
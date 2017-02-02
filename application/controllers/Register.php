<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{
	
	public function index()
	{

		$this->load->model('Register_model');
		$UniqueID = md5(uniqid(mt_rand(), true));
        
        $email = $this->security->xss_clean($this->input->post('email'));
        $firstname = $this->security->xss_clean($this->input->post('FirstName'));
        $lastname = $this->security->xss_clean($this->input->post('LastName'));
        $password = $this->security->xss_clean($this->input->post('password'));
        
        // hash password before checking database
        $password = password_hash($password, PASSWORD_DEFAULT);

		if (empty($data = $this->Register_model->checkerExisted($email))) {

			$this->Register_model->register($email, 
                                            $firstname,
                                            $lastname,
                                            $password, 
                                            $UniqueID);
			$_SESSION['firstname'] = $firstname;
			$_SESSION['lastname'] = $lastname;
			echo "";
			
		}
		else
		{
			echo "email address already existed";
		}
	
	}
}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	
	public function index()
	{

		$this->load->model('Login_model');

		if (!empty($data['result'] = $this->Login_model->checkUser($_POST['email'], $_POST['password'])))
		{
			$_SESSION['firstname'] = $data['result']->firstname; // data type always a problem
			$_SESSION['lastname'] = $data['result']->lastname;
			$_SESSION['customer_id'] = $data['result']->customerID;
			$_SESSION['email'] = $data['result']->email;
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
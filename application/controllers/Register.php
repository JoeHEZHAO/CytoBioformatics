<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{
	
	public function index()
	{

		$this->load->model('Register_model');
		$UniqueID = md5(uniqid(mt_rand(), true));

		if (empty($data = $this->Register_model->checkerExisted($_POST['email']))) {

			$this->Register_model->register($_POST['email'], $_POST['FirstName'], $_POST['LastName'], $_POST['password'], $UniqueID);
			$_SESSION['firstname'] = $_POST['FirstName'];
			$_SESSION['lastname'] = $_POST['LastName'];
			echo "";
			
		}
		else
		{
			echo "email address already existed";
		}
	
	}
}
?>
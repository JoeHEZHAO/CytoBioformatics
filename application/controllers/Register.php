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
        $organization = $this->security->xss_clean($this->input->post('organization'));
        $phone = $this->security->xss_clean($this->input->post('phone'));
        
        // hash password before checking database
        $password = password_hash($password, PASSWORD_DEFAULT);

		if (empty($data = $this->Register_model->checkerExisted($email))) {

			$this->Register_model->register($email, 
                                            $firstname,
                                            $lastname,
                                            $password, 
                                            $organization,
                                            $phone,
                                            $UniqueID);
			$_SESSION['firstname'] = $firstname;
			$_SESSION['lastname'] = $lastname;
            $_SESSION['email'] = $email;
            $_SESSION['organization'] = $organization;
            $_SESSION['phone'] = $phone;
            $_SESSION['ID'] = $UniqueID;
			echo "";
		} 
        else {
			echo "Email address already exists.";
		}
	}
    
    public function reset_password() {
        $email = $this->security->xss_clean($this->input->post('email'));
        $password = $this->security->xss_clean($this->input->post('password'));
        
        // hash password before inserting in database
        $password = password_hash($password, PASSWORD_DEFAULT);
        
        $this->load->model('UserInfo_model');
        if ($this->UserInfo_model->reset_password($email, $password)) {
            echo "success";   
        } else {
            echo "failed_to_update";
        }
    }
}
?>
<?php 

	class Register_model extends CI_Model
	{
		
		public function __construct()
		 {
			  parent::__construct();
		 }

		function register($email, $firstname, $lastname, $password, $UniqueID)
		{

			$this->load->model('UserInfo_model');
			if ($this->UserInfo_model->insert($email, $firstname, $lastname, $password, $UniqueID)) {
				return true;
			}else{
				return false;
			}

		}

		function checkerExisted($email){

			$this->load->model('UserInfo_model');
			if (!empty($data = $this->UserInfo_model->selectForSignUp($email))) {

				return $data;

			}
			else{

				return;

			}

		}
	}

?>
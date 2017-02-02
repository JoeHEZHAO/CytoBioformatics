<?php 

	class Login_model extends CI_Model
	{
		
		public function __construct()
		{
			  parent::__construct();
		}

		function checkUser($email, $password)
		{

			$this->load->model('UserInfo_model');
			
			if (!empty($data = $this->UserInfo_model->selectForLogin($email, $password))) 
				return $data;
			else
				return;

		}
	}

?>
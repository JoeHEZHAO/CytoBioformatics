<?php
date_default_timezone_set('America/New_York');
	class UserInfo_model extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		function insert($email, $firstname, $lastname, $password, $UniqueID)
		{
			$data = array(
				'firstname'   => $firstname,
				'lastname' => $lastname,
				'email'      => $email,
				'password'   => $password,
				'created_at' => date('Y-m-j H:i:s'),
				'ID' => $UniqueID
			);

			if ($this->db->insert('UserInfo', $data)) {
				return true;
			}
			else{
				return false;
			}
		}

		function selectForLogin($email, $password)
		{

			$this->db->from('UserInfo');
			$this->db->where('email', $email);
			$this->db->where('password', $password);

			if (!empty($data = $this->db->get()->row())) {
				return $data;
			}
			else{
				return;
			}

		}

		function selectForSignUp($email){
			$this->db->from('UserInfo');
			$this->db->where('email', $email);

			if (!empty($data = $this->db->get()->row())) {
				return $data;
			}
			else{
				return;
			}
		}

		function getCustomerPaymentIDs($customerID){

			$this->db->from('customerPaymentProfile');
			$this->db->where('customer_id', $customerID);

			if (!empty($data = $this->db->get()->row())) 
			{
				return $data;
			}
			else
			{
				return "error";
			}
		}

		function StoreTransactionRecord(){

			
		}


		function removeUser($email, $password){




		}


	}

?>
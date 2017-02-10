<?php
date_default_timezone_set('America/New_York');
	class UserInfo_model extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		function insert($email, $firstname, $lastname, $password, $organization, $phone, $UniqueID)
		{
			$data = array(
				'firstname'   => $firstname,
				'lastname' => $lastname,
				'email'      => $email,
				'password'   => $password,
                'organization' => $organization,
                'phone' => $phone,
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

            $data = $this->db->get()->row();
            // if row was found and submitted password matches stored hash 
			if ((!empty($data)) && (password_verify($password, $data->password))) {
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

		function removeUser($email, $password){




		}


	}

?>
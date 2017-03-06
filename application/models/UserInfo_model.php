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
                $this->update_password_history($email, $password);
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
        
        
        // For RESETPASSWORD
        function insert_resetpassword($email, $token)
		{
			$data = array(
				'email'   => $email,
				'token' => $token,
				'created_at' => date('Y-m-j H:i:s')
			);

			if ($this->db->insert('ResetPassword', $data)) {
				return true;
			}
			else{
				return false;
			}
		}
        
        function replace_resetpassword($email, $token)
		{
			$data = array(
				'email'   => $email,
				'token' => $token,
				'created_at' => date('Y-m-j H:i:s')
			);

			if ($this->db->replace('ResetPassword', $data)) {
				return true;
			}
			else{
				return false;
			}
		}

        function check_password_token($token) {
            $this->db->from('ResetPassword');
            $this->db->where('token', $token);
            if (!empty($data = $this->db->get()->row())) {
                $currentdate = new DateTime();
                $tokendate = date_create_from_format('Y-m-j H:i:s', $data->created_at);
                $total_diff = abs($currentdate->getTimestamp() - $tokendate->getTimestamp());
                if ($total_diff < 86400) {
                    return $data->email;
                } else {
                    return;
                }
            } else {
                return;
            }
        }
        
        function check_resetpassword_exists($email) {
            $this->db->from('ResetPassword');
            $this->db->where('email', $email);
            if (!empty($data = $this->db->get()->row())) {
				return true;
			} else {
				return false;
			}	
        }
        
        function update_password_history($email, $password) {
			$data = array(
				'email'      => $email,
				'password'   => $password,
				'date_added' => date('Y-m-j H:i:s')
			);

			if ($this->db->insert('PasswordHistory', $data)) {
				return true;
			} else {
				return false;
			}
            
        }
        
        function check_resetpassword_isnew($email, $password) {
            $this->db->from('PasswordHistory');
            $this->db->where('email', $email);
            $query = $this->db->get();
            foreach ($query->result() as $row) {
                if (password_verify($password, $row->password)) {
                    return false;
                }
            }
            return true;
        }
        
        function reset_password($email, $password) {
			$this->db->set('password', $password);
            $this->db->where('email', $email);
			if ($this->db->update('UserInfo')) {
                $this->update_password_history($email, $password);
				return true;
			}
			else{
				return false;
			}
		}

	}

?>
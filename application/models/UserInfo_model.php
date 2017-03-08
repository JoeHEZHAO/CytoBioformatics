<?php
date_default_timezone_set('America/New_York');
	class UserInfo_model extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		function insert($email, $firstname, $lastname, $password, $organization, $phone, $UniqueID, $activate_token)
		{
			$data = array(
				'firstname'   => $firstname,
				'lastname' => $lastname,
				'email'      => $email,
				'password'   => $password,
                'organization' => $organization,
                'phone' => $phone,
				'created_at' => date('Y-m-j H:i:s'),
				'ID' => $UniqueID,
                'status' => 'pending',
                'activate_token' => $activate_token
			);

			if ($this->db->insert('UserInfo', $data)) {
                $this->update_password_history($email, $password);
				return true;
			} else {
				return false;
			}
		}

		function selectForLogin($email, $password)
		{
			$this->db->from('UserInfo');
			$this->db->where('email', $email);

            $data = array('result' => $this->db->get()->row());
			if (!empty($data['result'])) {
                if (password_verify($password, $data['result']->password)) {
                    $data['login_status'] = 'correct';
                } else {
                    $data['login_status'] = 'incorrect';
                }
			} else {
                $data['login_status'] = 'not_found';
            }
            return $data;
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
        
        function activate_account($email, $token) {
            // invoked through confirmation email
            $this->db->from('UserInfo');
            $this->db->where('email', $email);
            $query = $this->db->get()->row();
            if (!empty($query) && ($query->activate_token == $token)) {
                $this->db->set('status', 'active');
                $this->db->set('activate_token', '');
                $this->db->set('date_last_attempted_login',  date('Y-m-j H:i:s'));
                $this->db->where('email', $email);
                $this->db->update('UserInfo');
                return $query;
            }
        }
        
        public function delete_user($email)
        {
            $this->db->from('UserInfo');
            $this->db->where('email', $email);
            $this->db->delete();
        }

        public function stale_pending_users($cutoff_date)
        {
            $this->db->from('UserInfo');
            $this->db->where('status', 'pending');
            $this->db->where('created_at <', $cutoff_date);
            return $this->db->get()->result(); 
        }
        
        public function nonactive_users()
        {
            $active_statuses = array('active', 'pending');
            $this->db->from('UserInfo');
            $this->db->where_not_in('status', $active_statuses);
            return $this->db->get()->result(); 
        }
	}

?>
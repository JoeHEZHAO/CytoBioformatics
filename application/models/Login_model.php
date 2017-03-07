<?php 

	class Login_model extends CI_Model
	{
        public function max_num_logins() {
            return 5;
        }
        
        public function min_timeout() {
            return 180;
        }
        
        public function timeSinceLastLogin($last_login) {
            $currentdate = new DateTime();
            $tokendate = date_create_from_format('Y-m-j H:i:s', $last_login);
            $total_diff = abs($currentdate->getTimestamp() - $tokendate->getTimestamp());
            return $total_diff;
        }
		
		public function __construct()
		{
			  parent::__construct();
		}

		function checkUser($email, $password)
		{
			$this->load->model('UserInfo_model');
			return $this->UserInfo_model->selectForLogin($email, $password);
		}
        
        function updateLoginAttempts($email, $n_attempts) {
            $login_data = array(
                'num_login_attempts' => $n_attempts,
                'date_last_attempted_login' => date('Y-m-j H:i:s')
            );
            $this->db->where('email', $email);
            $this->db->update('UserInfo', $login_data);
        }
        
        public function loginAttempt($is_success, $data) {
			$this->load->model('UserInfo_model');
            if ($this->timeSinceLastLogin($data->date_last_attempted_login) > $this->min_timeout()) {
                if ($is_success) {
                    $this->updateLoginAttempts($data->email, 0);
                    return "";
                } else {
                    $this->updateLoginAttempts($data->email, 1);
                    return "failed";
                }
            } else if ($data->num_login_attempts < $this->max_num_logins()) {
                if ($is_success) {
                    $this->updateLoginAttempts($data->email, 0);
                    return "";
                } else {
                    $this->updateLoginAttempts($data->email, $data->num_login_attempts + 1);
                    return "failed";
                }
            } else {
                return "exceeded_attempts";
            }
        }
	}

?>
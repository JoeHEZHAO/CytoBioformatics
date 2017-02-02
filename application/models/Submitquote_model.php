<?php 
date_default_timezone_set('America/New_York');
	class Submitquote_model extends CI_Model
	{
		
		public function __construct()
		 {
			  parent::__construct();
		 }

		function submitquote($firstname, $lastname, $email, $organization, $phone, $message, $QuoteID, $filename0, $filename1, $filename2)
		{
			if ($this->insert($firstname, $lastname, $email, $organization, $phone, $message, $QuoteID, $filename0, $filename1, $filename2)) {
				return true;
			}
            else {
				return false;
			}

		}
        
        function insert($firstname, $lastname, $email, $organization, $phone, $message, $QuoteID, $filename0, $filename1, $filename2) {
            $data = array(
				'firstname' => $firstname,
				'lastname' => $lastname,
				'email' => $email,
				'organization' => $organization,
                'phone' => $phone,
				'created_at' => date('Y-m-j H:i:s'),
				'message' => $message,
                'quoteID' => $QuoteID,
                'filename0' => $filename0,
                'filename1' => $filename1,
                'filename2' => $filename2
			);

			if ($this->db->insert('Quotes', $data)) {
				return true;
			}
			else{
				return false;
			}
        }

		/*function checkerExisted($email){
			$this->load->model('UserInfo_model');
			if (!empty($data = $this->UserInfo_model->selectForSignUp($email))) {
				return $data;
			}
			else{
				return;
			}
		}*/
	}

?>
<?php 

	class TransactionRecord_model extends CI_Model
	{
		
		public function __construct()
		 {
			  parent::__construct();
		 }

		function createTransacationRecord($data){
			if ($this->db->insert('tranRecord', $data)) {
				return true;
			}
			else{
				return false;
			}
		}

		function saveBillingAddress($data){
			if ($this->db->insert('billingAddr', $data)) {
				return true;
			}
			else{
				return false;
			}			
		}

		function rewriteQuoteDb($quoteIds){
			foreach ($quoteIds as $key => $value) {
				$data = array(
					'status' => 'paid'
				);
				$this->db->where('quoteId', $value);
				$this->db->update('Quotes', $data);    
			}
		}

	}

?>
<?php 
class Crons extends CI_Controller {
    public function __construct()
    { 	
        parent::__construct(); 
        $this->load->model('UserInfo_model');
	}

    public function index()
    {
    }
    
    public function delete_pending_users()
    {
        if (!$this->input->is_cli_request()) {
            echo "Must be invoked by a cli request." . PHP_EOL;
            return;
        }
        
        $cutoff_date = strtotime('-1 days');
        $accounts = $this->UserInfo_model->stale_pending_users($cutoff_date);
        if (!empty($accounts))
        {
            foreach($accounts as $account)
            {
                $this->UserInfo_model->delete_user($account->email);
            }
        }
    }
    
    public function delete_nonactive_users()
    {
        if (!$this->input->is_cli_request()) {
            echo "Must be invoked by a cli request." . PHP_EOL;
            return;
        }
        
        $accounts = $this->UserInfo_model->nonactive_users();
        if (!empty($accounts))
        {
            foreach($accounts as $account)
            {
                $this->UserInfo_model->delete_user($account->email);
            }
        }
    }
    
//    public function test($input) 
//    {
//        echo "Working! " . $input . PHP_EOL;
//    }
}
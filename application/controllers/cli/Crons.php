<?php 
class Crons extends CI_Controller {
    
    private $max_age = 60; // 60*60*24*30
    private $uploads_dir = '/var/www/html/Codeigniter/uploads/';
    
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
    
    public function delete_old_uploads() 
    {
        $files = scandir($this->uploads_dir);
        foreach($files as $file) {
            if ($file != "." && $file != "..") {
                $filepath = $this->uploads_dir.$file;
//                echo $filepath.PHP_EOL;
//                echo (time() - filemtime($filepath)).PHP_EOL;
                if (time() - filemtime($filepath) > $this->max_age) {
                    $this->rrmdir($filepath);
                }
            }
        }
    }
    
    private function rrmdir($dir) 
    { 
        if (is_dir($dir)) {            
            foreach(glob("{$dir}/*") as $file) {
                if(is_dir($file)) { 
                    $this->rrmdir($file);
                } else {
                    unlink($file);
                }
//                echo $file . PHP_EOL;
            }
            rmdir($dir);
        } 
    }
    
//    public function test($input) 
//    {
//        echo "Working! " . $input . PHP_EOL;
//    }
}
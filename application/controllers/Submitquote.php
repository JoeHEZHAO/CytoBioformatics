<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('America/New_York');

class Submitquote extends CI_Controller
{
	public function index()
	{
        $this->quote();
    }
    
    function upload_formdata() {
        // uploads files and updates database simultaneously
        /*UPLOAD FILES*/
        $UniqueID = md5(uniqid(mt_rand(), true));
//        $rootdir = '/home/cytoinfo/public_html/uploads/'; // server
        $rootdir = '/var/www/html/Codeigniter/uploads/';
        $config['upload_path'] = $rootdir . $UniqueID;
        $config['allowed_types'] = '*';
        $config['detect_mime'] = TRUE;
        $config['max_size'] = 10240;
        $this->load->library('upload', $config);
        
        // creates path if does not exist
        if (!is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0777, true);
//            chmod($rootdir, 0777);
            chmod($config['upload_path'], 0777);
        }
        
        $inputname0 = 'filename0';
        $inputname1 = 'filename1';
        $inputname2 = 'filename2';
        
        // checks for name of files from $_FILES object & for potential XSS attacks
        $file0 = $this->check_filename($inputname0);
        $file1 = $this->check_filename($inputname1);
        $file2 = $this->check_filename($inputname2);
        
        // uploads files one-by-one to server
        $resp0 = $this->do_upload_onefile($inputname0, $file0);
        $resp1 = $this->do_upload_onefile($inputname1, $file1);
        $resp2 = $this->do_upload_onefile($inputname2, $file2);
        
        /*UPDATE DATABASE*/
		$this->load->model('Submitquote_model');
        
        // retrieve fields from post and clean of disallowed characters
        $firstname = $this->security->xss_clean($this->input->post('FirstName'));
        $lastname = $this->security->xss_clean($this->input->post('LastName'));
        $email = $this->security->xss_clean($this->input->post('email'));
        $organization = $this->security->xss_clean($this->input->post('organization'));
        $phone = $this->security->xss_clean($this->input->post('phone'));
        $subject = $this->security->xss_clean($this->input->post('subject'));
        $message = $this->security->xss_clean($this->input->post('message'));
        
        // submit to database
        if ($this->Submitquote_model->submitquote($firstname, 
                                              $lastname, 
                                              $email, 
                                              $organization, 
                                              $phone,
                                              $subject,
                                              $message,
                                              $UniqueID,
                                              $file0, 
                                              $file1,
                                              $file2
                                             )) {
            
            echo "";
        }
        else {
            echo "failed_database";
            /*$this->quote_error();*/
        }
        
    }
    
    function check_filename($inputname) {
        if (array_key_exists($inputname, $_FILES)) {
            if ($this->security->xss_clean($_FILES[$inputname], TRUE) === FALSE) {
                $out = '';
            }
            else {
                $out = $this->security->sanitize_filename($_FILES[$inputname]['name']);
            }
        }
        else {
            $out = '';
        }
        return $out;
    }
    
    function do_upload_onefile($inputname, $fname) {
        // uploads one file from $_FILES with the name $fname
        if (strcmp($fname, '') !== 0) {
            if (!$this->upload->do_upload($inputname)) {
                // if fails, returns an error
                return array('error' => $this->upload->display_errors());
            } else {
                // if succeeds, returns a data array
                return array('upload_data' => $this->upload->data());
            }
        }
        else {
            return array('error' => 'no_file');
        }
    }
    
    function upload_form() {
        // update database only (no file upload)
		$this->load->model('Submitquote_model');
        $UniqueID = md5(uniqid(mt_rand(), true));
        if ($this->Submitquote_model->submitquote($this->input->post('FirstName'), 
                                                  $this->input->post('LastName'), 
                                                  $this->input->post('email'), 
                                                  $this->input->post('organization'), 
                                                  $this->input->post('phone'),
                                                  $this->input->post('message'),
                                                  $UniqueID,
                                                  $this->input->post('filename0'),
                                                  $this->input->post('filename1'),
                                                  $this->input->post('filename2'))) {    
            echo "";
        }
        else {
            echo "failed";
        }
	}
    
    function upload_files() {
        // upload files only (no database update)
        /*UPLOAD FILES*/
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 10240;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('filename0')) {
            /*$error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_form', $error);*/
            $this->quote_error();
        }
        else {
            /*$data = array('upload_data' => $this->upload->data());
            $this->load->view('upload_success', $data);*/
            $this->quote_success();
        }
    }
    
    function viewInSession($dest) {
        // checks if user has session and passes it to next view
        if(isset($_SESSION['firstname']) && !empty($_SESSION['firstname'])) {
			$data['firstname'] = $_SESSION['firstname'];
			$data['lastname'] = $_SESSION['lastname'];
			$this->load->view($dest, $data);
		}
		else {
            $this->load->view($dest);
        }
    }
    
    function quote() {
        $this->viewInSession('quote'); 
    }
    
    function quote_success() {
		$this->viewInSession('quote_success');        
    }
    
    function quote_error() {
		$this->viewInSession('quote_error');        
    }
    
    function _debug($error) {
        $this->load->view('debug', $error);
    }
}
?>
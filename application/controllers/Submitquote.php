<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submitquote extends CI_Controller
{
	public function index()
	{
        $this->quote();
  }
    
    function upload_formdata() {        
        /*UPLOAD FILES*/
//        $config['upload_path'] = './uploads/';
//        $config['allowed_types'] = 'gif|jpg|png';
//        $config['max_size'] = 10240;
//        $this->load->library('upload', $config);
////        $this->_debug($_POST);
//        if ( ! $this->upload->do_upload('filename0')) {
//            /*$error = array('error' => $this->upload->display_errors());
//            $this->load->view('upload_form', $error);*/
////            $this->quote_error();
//        }
//        else {
//            /*$data = array('upload_data' => $this->upload->data());
//            $this->load->view('upload_success', $data);*/
////            $this->quote_success();
//        }
        
        /*UPDATE DATABASE*/
		    $this->load->model('Submitquote_model');
        $UniqueID = md5(uniqid(mt_rand(), true));
//        if ($this->Submitquote_model->submitquote($this->input->post('FirstName'), 
//                                              $this->input->post('LastName'), 
//                                              $this->input->post('email'), 
//                                              $this->input->post('organization'), 
//                                              $this->input->post('phone'),
//                                              $this->input->post('message'),
//                                              $UniqueID,
//                                              'a', 'b', 'c'
//                                              //$this->input->post('filename0'),
////                                              $this->input->post('filename1'),
////                                              $this->input->post('filename2')
//                                             )) {
//            
//            echo "";
//            /*$this->quote_success();*/
//        }
//        else {
//            echo "failed_database";
//            /*$this->quote_error();*/
//        }
        
        if ($this->Submitquote_model->submitquote($_POST['myFormData'], 
                                              'l', 
                                              'e', 
                                              'o', 
                                              'p',
                                              'm',
                                              $UniqueID,
                                              'a', 'b', 'c'
                                             )) {
            
            echo "";
            /*$this->quote_success();*/
        }
        else {
            echo "failed_database";
            /*$this->quote_error();*/
        }
        
    }
    
    public function upload_form() {
        /*UPDATE DATABASE*/
		    $this->load->model('Submitquote_model');
        $UniqueID = md5(uniqid(mt_rand(), true));
        if ($this->Submitquote_model->submitquote(
          $this->input->post('FirstName'), 
          $this->input->post('LastName'), 
          $this->input->post('email'), 
          $this->input->post('organization'), 
          $this->input->post('phone'),
          $this->input->post('message'),
          $UniqueID,
          // $this->input->post('filename0'),
          // $this->input->post('filename1'),
          // $this->input->post('filename2')
          '001',
          '002',
          '003'
                                             ))
        {    
            echo "";
            /*$this->quote_success();*/
        }
        else {
            echo "failed";
            /*$this->quote_error();*/
        }
	  }
    
    function upload_files() {
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
        if(isset($_SESSION['firstname']) && !empty($_SESSION['firstname']))
		{
			$data['firstname'] = $_SESSION['firstname'];
			$data['lastname'] = $_SESSION['lastname'];
			$this->load->view($dest, $data);
		}
		else {$this->load->view($dest);}
    }
    
    function quote()
    {
        $this->viewInSession('quote'); 
    }
    
    function quote_success()
    {
		$this->viewInSession('quote_success');        
    }
    
    function quote_error()
    {
		$this->viewInSession('quote_error');        
    }
    
    function _debug($dumpdata)
    {
        $this->load->view('debug', $dumpdata);
    }
}
?>
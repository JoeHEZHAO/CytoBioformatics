<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cyto_bioformatics extends CI_Controller {

	public function index()
	{
		$this->viewInSession('index');
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

	function login()
	{ 
		$this->load->view('login');
	}

	function Logout()
	{
		$_SESSION['firstname'] = null;
		$_SESSION['lastname'] = null;
		$this->index();
	}
	
	function solutions()
	{
		$this->viewInSession('solutions');
	}
	
	function workflow()
	{
		$this->viewInSession('workflow');
	}
    
    function demo()
    {
		$this->viewInSession('demo');
    }
    
    function pricing() 
    {
		$this->viewInSession('pricing');
    }
    
    function quote() 
    {
        $this->load->helper('form');
		$this->viewInSession('quote');
    }
    
    function quote_success()
    {
		$this->viewInSession('quote_success');        
    }

	function about_us()
	{
		$this->viewInSession('about_us');
	}
    
    function privacy_policy()
    {
		$this->viewInSession('privacy_policy');
    }
    
    function refund_policy()
    {
		$this->viewInSession('refund_policy');
    }
	
	function error404()
	{
		$this->viewInSession('error404');
	}
    
    function do_nothing()
    {
        
    }
	
}
/**
* 
*/

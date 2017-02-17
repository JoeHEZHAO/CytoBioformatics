<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('America/New_York');

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
		session_unset();
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
    
    function buyingAndPayment()
	{
		if (!isset($_SESSION['firstname']) && !empty($_SESSION['firstname'])) {
			$this->load->view('login');
		}
		else{
			$data['firstname'] = $_SESSION['firstname'];
			$data['lastname'] = $_SESSION['lastname'];
			$this->load->model('Submitquote_model');

			if ($this->Submitquote_model->loadQuotes()) {
				$data['rows'] = $this->Submitquote_model->loadQuotes();
			}else{
				$data['rows'] = 'failed';
			}
			$this->load->view('buyingAndPayment', $data);
		}
	}

	function Checkout()
	{
		if ($_POST['TotelCharge'] != 0) {
			$_SESSION['TotelCharge'] = $_POST['TotelCharge'];
			$_SESSION['quoteIds'] = $_POST['quoteIds'];
			$_SESSION['quoteCharges'] = $_POST['quoteCharges'];	
			$_SESSION['subjects'] = $_POST['subjects'];
	        echo "success!";
		}else{
			echo 'failed';
		}	
	}

	function paymentPage()
	{
		$data['TotelCharge'] = $_SESSION['TotelCharge'];
		$data['quoteIds'] = $_SESSION['quoteIds'];
		$data['quoteCharges'] = $_SESSION['quoteCharges'];

		if (isset($_SESSION['firstname']) && !empty($_SESSION['firstname'])) {
			$data['firstname'] = $_SESSION['firstname'];
			$data['lastname'] = $_SESSION['lastname'];
            $data['email'] = $_SESSION['email'];
            $data['organization'] = $_SESSION['organization'];
			$this->load->view('accept_payment', $data);
		}
	}
    
    function StoreTransactionRecord(){

		$data = array(
				'firstname'   => $_SESSION['firstname'],
				'lastname' => $_SESSION['lastname'],
				'email'      => $_SESSION['email'],
				'TranDate' => date('Y-m-j H:i:s'),
				'ID' => $_SESSION['ID'],
				'amount' => $_POST['amount'],
				'accountNumber' => $_POST['accountNumber'],
				'accountType' => $_POST['accountType'],
				'authCode' => $_POST['authCode'],
				'transId' => $_POST['transId'],
				'messages' => $_POST['messages']
		);

		$_SESSION['transInfo'] = $data;
		$this->load->model('TransactionRecord_model');
		if ($response = $this->TransactionRecord_model->createTransacationRecord($data)) {
			echo "Ok";
		}else{
			echo "failed";
		}
	}

	function receiptPage(){

		  $data['billEmail'] = $_SESSION['billingAddr']['billEmail'];
          $data['streetAddress'] = $_SESSION['billingAddr']['streetAddress'];
          $data['zipCode'] = $_SESSION['billingAddr']['zipCode'];
          $data['city'] = $_SESSION['billingAddr']['city'];
          $data['country'] = $_SESSION['billingAddr']['country'];
          $data['transId'] = $_SESSION['billingAddr']['transId'];

          $data['accountNumber'] = $_SESSION['transInfo']['accountNumber'];
          $data['accountType'] = $_SESSION['transInfo']['accountType'];
          $data['amount'] = $_SESSION['transInfo']['amount'];
          $data['TranDate'] = $_SESSION['transInfo']['TranDate'];
          $data['firstname'] = $_SESSION['transInfo']['firstname'];
          $data['lastname'] = $_SESSION['transInfo']['lastname'];

          $this->load->view('receiptPage', $data);
	}

	function saveBillingAddress(){
		$data = array(
				'billEmail'   => $_POST['billEmail'],
				'streetAddress' => $_POST['streetAddress'],
				'zipCode' => $_POST['zipCode'],
				'city' => $_POST['city'],
				'country' => $_POST['country'],
				'transId' => $_POST['transId'],
				'ID' => $_SESSION['ID']
		);

		$_SESSION['billingAddr'] = $data; 
		$this->load->model('TransactionRecord_model');
		if ($response = $this->TransactionRecord_model->saveBillingAddress($data)) {
			$this->createPdf();
			$this->load->model('Email_model');
			$this->Email_model->send_mail($data, $_SESSION['transInfo'], $_SESSION['email']);
			echo "Ok";
		} else {
			echo "failed";
		}
	}
    
    function createPdf(){
		$this->load->helper('pdf_helper');
		$this->load->model('generate_pdf_receipt');
		$this->generate_pdf_receipt->createPdf($_SESSION['billingAddr'], $_SESSION['transInfo'], $_SESSION['subjects'], $_SESSION['quoteCharges'], $_SESSION['email']);
		// var_dump($_SESSION['ID']);
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

	function rewriteQuotesDb(){
		$quoteIds = $_SESSION['quoteIds'];
		$this->load->model('TransactionRecord_model');
		$this->TransactionRecord_model->rewriteQuoteDb($quoteIds);
		echo 'Ok';
	}
    
    function forgot_password() {
        $this->load->view('forgot_password');
    }
    
    function password_reset() {
        $data['email'] = $_SESSION['email'];
        $this->load->view('password_reset', $data);
    }
    
    function password_reset_token($token) {
        $this->load->model('UserInfo_model');
        $email = $this->UserInfo_model->check_password_token($token);
        if(!empty($email)) {
            $data['email'] = $email;
            $this->load->view('password_reset', $data);
        } else {
            echo "Error: invalid/expired token.";    
        }
    }
    
    function test_mimetype() {
        echo "finfo:\t";
        var_dump(@finfo_open(FILEINFO_MIME_TYPE));
    }
	
}
/**
* 
*/

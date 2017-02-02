<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('America/New_York');//or change to whatever timezone you want


class Cyto_bioformatics extends CI_Controller {

	public function index()
	{
		if(isset($_SESSION['firstname']) && !empty($_SESSION['firstname']))
		{
			$data['firstname'] = $_SESSION['firstname'];
			$data['lastname'] = $_SESSION['lastname'];
			$this->load->view('index', $data);
		}
		else {$this->load->view('index');}
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
		$this->load->view('solutions');
	}
	
	function workflow()
	{
		$this->load->view('workflow');
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
			$data['rows'] = $this->Submitquote_model->loadQuotes();

			$this->load->view('buyingAndPayment', $data);
		}
	}

	function Checkout()
	{
		if ($_POST['TotelCharge'] != 0) {
			$_SESSION['TotelCharge'] = $_POST['TotelCharge'];
			$_SESSION['quoteIds'] = $_POST['quoteIds'];
			$_SESSION['quoteCharges'] = $_POST['quoteCharges'];	
	        echo "succes!";
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

			// $this->load->model('getCustomerPaymentProfile_model');
			// $data['card_num'] = array();

			// foreach ($_SESSION['cards'] as $key => $value) {

			// 	array_push($data['card_num'], $this->getCustomerPaymentProfile_model->getCustomerPaymentProfile($customerID, $value));

			// }

			// $data['length'] = count($data['card_num']);

			$this->load->view('accept_payment', $data);
		}

	}
	
	function CIMpayment()
	{

		$customerID = $_SESSION['customer_id'];
		$customerPaymentID = $_POST['paymentProfileID'];
		$TotelCharge = $_POST['TotelCharge'];

		$this->load->model('TransactionByID_model');

		$response = $this->TransactionByID_model->chargeCustomerProfile($customerID, $customerPaymentID, $TotelCharge);

		$_SESSION['transactionResponse'] = array();

		foreach ($response as $key => $value) {
	
			array_push($_SESSION['transactionResponse'], $value);

		}

		echo "success!!!";

	}

	function User_Payment_Info(){

		$this->load->view('User_Payment_Info');

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

			echo "Ok";
			$this->load->model('email_receipt_model');
			$this->email_receipt_model->send_mail($data, $_SESSION['transInfo']);

		}else{
			echo "failed";
		}
	}

	function createPdf(){

		$this->load->helper('pdf_helper');
    /*
        ---- ---- ---- ----
        your code here
        ---- ---- ---- ----
    */
	    $this->load->view('pdf_example');

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

    function viewInSession($dest) 
    {
        if(isset($_SESSION['firstname']) && !empty($_SESSION['firstname']))
		{
			$data['firstname'] = $_SESSION['firstname'];
			$data['lastname'] = $_SESSION['lastname'];
			$this->load->view($dest, $data);
		}
		else {$this->load->view($dest);}
    }

    function demo()
    {
		$this->viewInSession('demo');
    }

    function pricing() 
    {
		$this->viewInSession('pricing');
    }

    function about_us(){
	  $this->viewInSession('about_us');
	}

	function contact()
	{
		$this->load->view('contact');
	}
	
	function error404()
	{
		$this->load->view('error404');
	}

}
/**
* 
*/

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('America/New_York');

class Cyto extends CI_Controller {

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
    
    function user_profile()
    {
        $this->load->helper('form');
        $this->load->model('UserInfo_model');
        if (!empty($_SESSION['email'])) {
            $data = $this->UserInfo_model->retrieveUserInfo($_SESSION['email']);
            if (!empty($data)) {
                $this->load->view('user_profile', $data);
                return;
            } 
        }
        $this->load->view('login');
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

			if (!empty($response = $this->Submitquote_model->loadQuotes())) {
                $data['rows'] = $response->result_array();
                $data['num_rows'] = $response->num_rows();
			} else {
				$data['rows'] = 'failed';
                $data['num_rows'] = 0;
			}
			$this->load->view('buyingAndPayment', $data);
		}
	}

	function Checkout()
	{
		if ($_POST['TotelCharge'] != 0) {
			$_SESSION['TotelCharge'] = $this->security->xss_clean($this->input->post('TotelCharge'));
			$_SESSION['quoteIds'] = $this->security->xss_clean($this->input->post('quoteIds'));
			$_SESSION['quoteCharges'] = $this->security->xss_clean($this->input->post('quoteCharges'));	
			$_SESSION['subjects'] = $this->security->xss_clean($this->input->post('subjects'));
	        echo "success!";
		} else {
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
            'amount' => $this->security->xss_clean($this->input->post('amount')),
            'accountNumber' => $this->security->xss_clean($this->input->post('accountNumber')),
            'accountType' => $this->security->xss_clean($this->input->post('accountType')),
            'authCode' => $this->security->xss_clean($this->input->post('authCode')),
            'transId' => $this->security->xss_clean($this->input->post('transId')),
            'messages' => $this->security->xss_clean($this->input->post('messages'))
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
      	$data['TotelCharge'] = $_SESSION['TotelCharge'];{
	  	$data['quoteIds'] = $_SESSION['quoteIds'];
	  	$data['quoteCharges'] = $_SESSION['quoteCharges'];}
        // billing info
        $data['billEmail'] = $_SESSION['billingAddr']['billEmail'];
        $data['streetAddress'] = $_SESSION['billingAddr']['streetAddress'];
        $data['zipCode'] = $_SESSION['billingAddr']['zipCode'];
        $data['city'] = $_SESSION['billingAddr']['city'];
        $data['country'] = $_SESSION['billingAddr']['country'];
        $data['transId'] = $_SESSION['billingAddr']['transId'];
        // transaction info
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
            'billEmail'   => $this->security->xss_clean($this->input->post('billEmail')),
            'streetAddress' => $this->security->xss_clean($this->input->post('streetAddress')),
            'zipCode' => $this->security->xss_clean($this->input->post('zipCode')),
            'city' => $this->security->xss_clean($this->input->post('city')),
            'country' => $this->security->xss_clean($this->input->post('country')),
            'transId' => $this->security->xss_clean($this->input->post('transId')),
            'ID' => $_SESSION['ID']
		);

		$items = array(
			'TotelCharge' => $_SESSION['TotelCharge'],
	  		'quoteIds' => $_SESSION['quoteIds'],
	  		'quoteCharges' => $_SESSION['quoteCharges']
		);

		$_SESSION['billingAddr'] = $data; 
		$this->load->model('TransactionRecord_model');
		if ($response = $this->TransactionRecord_model->saveBillingAddress($data)) {
			$this->createPdf();
			$this->load->model('Email_model');
			$this->Email_model->send_mail($data, $_SESSION['transInfo'], $_SESSION['email'], $items);
			echo "Ok";
		} else {
			echo "failed";
		}
	}
    
    function createPdf(){
		$this->load->helper('pdf_helper');

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
		$data['quoteIds'] = $_SESSION['quoteIds'];
		$data['quoteCharges'] = $_SESSION['quoteCharges'];
		$data['name'] = 'hezhao';

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
    
    function disclaimer()
    {
        $this->viewInSession('disclaimer');
    }
	
	function error404()
	{
		$this->viewInSession('error404');
	}
    
    function do_nothing()
    {
        
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
            $this->load->view('password_reset_token', $data);
        } else {
            echo "Error: invalid/expired token.";    
        }
    }

	function rewriteQuotesDb(){
		$quoteIds = $_SESSION['quoteIds'];
		$this->load->model('TransactionRecord_model');
		$this->TransactionRecord_model->rewriteQuoteDb($quoteIds);
		echo 'Ok';
	}

	function transactionCaller(){
libxml_use_internal_errors(true); 
// below line has to be unendented		
$transRequestXmlStr=<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<createTransactionRequest xmlns="AnetApi/xml/v1/schema/AnetApiSchema.xsd">
	<merchantAuthentication></merchantAuthentication>
	<transactionRequest>
	<transactionType>authCaptureTransaction</transactionType>
	<amount>assignAMOUNT</amount>
	<currencyCode>USD</currencyCode>
	<payment>
	<opaqueData>
   		<dataDescriptor>assignDD</dataDescriptor>
   		<dataValue>assignDV</dataValue>
	</opaqueData>
	</payment>
	</transactionRequest>
</createTransactionRequest>
XML;
        $transRequestXml=new SimpleXMLElement($transRequestXmlStr, LIBXML_NOWARNING);

        $loginId = "3Dh3gd4ZwG";
        $transactionKey = "82xL6Wk6A46r88t6";

        // $loginId = "2m7ULx4Bva";
        // $transactionKey = "224DSD4ns9bUk4K4";

        $transRequestXml->merchantAuthentication->addChild('name',$loginId);
        $transRequestXml->merchantAuthentication->addChild('transactionKey',$transactionKey);

        $transRequestXml->transactionRequest->amount=$_POST['amount'];
        $transRequestXml->transactionRequest->payment->opaqueData->dataDescriptor=$_POST['dataDesc'];
        $transRequestXml->transactionRequest->payment->opaqueData->dataValue=$_POST['dataValue'];

        $url="https://apitest.authorize.net/xml/v1/request.api";
        // $url="https://api.authorize.net/xml/v1/request.api";

        try{	//setting the curl parameters.
            $ch = curl_init();
            if (FALSE === $ch)
                throw new Exception('failed to initialize');
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/xml'));
            curl_setopt($ch, CURLOPT_POSTFIELDS, $transRequestXml->asXML());
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 300);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($ch, CURLOPT_DNS_USE_GLOBAL_CACHE, false );
            $content = curl_exec($ch);
            if (FALSE === $content)
                throw new Exception(curl_error($ch), curl_errno($ch));
            curl_close($ch);

            $xmlResult=simplexml_load_string($content);
            $jsonResult=json_encode($xmlResult);
            echo $jsonResult;
            // echo $content;

        } catch(Exception $e) {
            trigger_error(sprintf('Curl failed with error #%d: %s', $e->getCode(), $e->getMessage()), E_USER_ERROR);
        }
	}
    
//    function activate_account($encoded_email, $token) {
//        $this->load->model('UserInfo_model');
//        $data = $this->UserInfo_model->activate_account(rawurldecode($encoded_email), $token);
//        if (!empty($data)) {
//            $this->load->view('account_activated');
//        } else {
//            echo "An error occurred.";
//        }
//    }
    
//    function test_mimetype() {
//        echo "finfo:\t";
//        var_dump(finfo_open(FILEINFO_MIME_TYPE));
//    }
//	
//    function print_phpinfo() {
//        phpinfo();
//    }
}
/**
* 
*/

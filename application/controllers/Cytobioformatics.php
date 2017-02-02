<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cytobioformatics extends CI_Controller {

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
		$_SESSION['firstname'] = null;
		$_SESSION['lastname'] = null;
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
			$this->load->view('buyingAndPayment', $data);
		}
	}

	function Checkout(){

		if ($_POST['TotelCharge'] != 0) {

			$_SESSION['TotelCharge'] = $_POST['TotelCharge'];


			echo "success";

		}
		
	}

	function paymentPage(){

		$data['TotelCharge'] = $_SESSION['TotelCharge'];

		if (isset($_SESSION['firstname']) && !empty($_SESSION['firstname'])) {

			$data['firstname'] = $_SESSION['firstname'];
			$data['lastname'] = $_SESSION['lastname'];

			$this->load->model('getCustomerPaymentProfile_model');
			
			$response = $this->getCustomerPaymentProfile_model->getCustomerPaymentProfile();

			$data['response'] = $response;

			$this->load->view('paymentPage', $data);

		}

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

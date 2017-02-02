<?php

require '/Users/zhaohe/htdocs/Codeigniter/sdk/vendor/autoload.php';
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;

define("AUTHORIZENET_LOG_FILE", "phplog");

class getCustomerPaymentProfile_model extends CI_Model
{
  
	function getCustomerPaymentProfile($customerProfileId="1808946282", 
	   $customerPaymentProfileId= "1803706741")
	{
		// Common setup for API credentials (merchant)
		$merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
		$merchantAuthentication->setName('3Dh3gd4ZwG');
		$merchantAuthentication->setTransactionKey('82xL6Wk6A46r88t6');
		$refId = 'ref' . time();

		//request requires customerProfileId and customerPaymentProfileId
		$request = new AnetAPI\GetCustomerPaymentProfileRequest();
		$request->setMerchantAuthentication($merchantAuthentication);
		$request->setRefId( $refId);
		$request->setCustomerProfileId($customerProfileId);
		$request->setCustomerPaymentProfileId($customerPaymentProfileId);

		$controller = new AnetController\GetCustomerPaymentProfileController($request);
		$response = $controller->executeWithApiResponse( \net\authorize\api\constants\ANetEnvironment::SANDBOX);
		if(($response != null)){
			if ($response->getMessages()->getResultCode() == "Ok")
			{
				echo "GetCustomerPaymentProfile SUCCESS: " . "\n";
				echo "Customer Payment Profile Id: " . $response->getPaymentProfile()->getCustomerPaymentProfileId() . "\n";
				echo "Customer Payment Profile Billing Address: " . $response->getPaymentProfile()->getbillTo()->getAddress(). "\n";
				echo "Customer Payment Profile Card Last 4 " . $response->getPaymentProfile()->getPayment()->getCreditCard()->getCardNumber(). "\n";

				if($response->getPaymentProfile()->getSubscriptionIds() != null) 
				{
					if($response->getPaymentProfile()->getSubscriptionIds() != null)
					{

						echo "List of subscriptions:";
						foreach($response->getPaymentProfile()->getSubscriptionIds() as $subscriptionid)
							echo $subscriptionid . "\n";
					}
				}
			}
			else
			{
				echo "GetCustomerPaymentProfile ERROR :  Invalid response\n";
				$errorMessages = $response->getMessages()->getMessage();
			    echo "Response : " . $errorMessages[0]->getCode() . "  " .$errorMessages[0]->getText() . "\n";
			}
		}
		else{
			echo "NULL Response Error";
		}
		// var_dump($response);
		return $response->getPaymentProfile()->getPayment()->getCreditCard()->getCardNumber();
	}
}
// if(!defined('DONT_RUN_SAMPLES'))
//     getCustomerPaymentProfile();
?>


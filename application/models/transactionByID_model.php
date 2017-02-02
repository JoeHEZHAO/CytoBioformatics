<?php
  require '/Users/zhaohe/htdocs/Codeigniter/sdk/vendor/autoload.php';
  use net\authorize\api\contract\v1 as AnetAPI;
  use net\authorize\api\controller as AnetController;
  date_default_timezone_set('Africa/Lagos');
  define("AUTHORIZENET_LOG_FILE", "phplog");

class TransactionByID_model extends CI_Model
{  

  function chargeCustomerProfile($profileid, $paymentprofileid, $amount){
    // Common setup for API credentials

    $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
    $merchantAuthentication->setName('3Dh3gd4ZwG');
    $merchantAuthentication->setTransactionKey('82xL6Wk6A46r88t6');
    $refId = 'ref' . time();

    $profileToCharge = new AnetAPI\CustomerProfilePaymentType();
    $profileToCharge->setCustomerProfileId($profileid);
    $paymentProfile = new AnetAPI\PaymentProfileType();
    $paymentProfile->setPaymentProfileId($paymentprofileid);
    $profileToCharge->setPaymentProfile($paymentProfile);

    $transactionRequestType = new AnetAPI\TransactionRequestType();
    $transactionRequestType->setTransactionType("authCaptureTransaction"); 
    $transactionRequestType->setAmount($amount);
    $transactionRequestType->setProfile($profileToCharge);

    $request = new AnetAPI\CreateTransactionRequest();
    $request->setMerchantAuthentication($merchantAuthentication);
    $request->setRefId( $refId);
    $request->setTransactionRequest( $transactionRequestType);
    $controller = new AnetController\CreateTransactionController($request);
    $response = $controller->executeWithApiResponse( \net\authorize\api\constants\ANetEnvironment::SANDBOX);

    $TransactionRes = array();

    if ($response != null)
    {

      if($response->getMessages()->getResultCode() == 'Ok')
      {

        $tresponse = $response->getTransactionResponse();
        
        if ($tresponse != null && $tresponse->getMessages() != null)   
        {

          array_push($TransactionRes, " Transaction Response code : " . $tresponse->getResponseCode() . "\n");
          array_push($TransactionRes, " Charge Customer Profile APPROVED  :" . "\n");
          array_push($TransactionRes, " Charge Customer Profile AUTH CODE : " . $tresponse->getAuthCode() . "\n");
          array_push($TransactionRes, " Charge Customer Profile TRANS ID  : " . $tresponse->getTransId() . "\n");
          array_push($TransactionRes, " Code : " . $tresponse->getMessages()[0]->getCode() . "\n");
          array_push($TransactionRes, " Description : " . $tresponse->getMessages()[0]->getDescription() . "\n");

          // echo " Transaction Response code : " . $tresponse->getResponseCode() . "\n";
          // echo  "Charge Customer Profile APPROVED  :" . "\n";
          // echo " Charge Customer Profile AUTH CODE : " . $tresponse->getAuthCode() . "\n";
          // echo " Charge Customer Profile TRANS ID  : " . $tresponse->getTransId() . "\n";
          // echo " Code : " . $tresponse->getMessages()[0]->getCode() . "\n"; 
          // echo " Description : " . $tresponse->getMessages()[0]->getDescription() . "\n";
        }
        else
        {
          echo "Transaction Failed \n";
          if($tresponse->getErrors() != null)
          {
            echo " Error code  : " . $tresponse->getErrors()[0]->getErrorCode() . "\n";
            echo " Error message : " . $tresponse->getErrors()[0]->getErrorText() . "\n";            
          }
        }
      }
      else
      {
        echo "Transaction Failed \n";
        $tresponse = $response->getTransactionResponse();
        if($tresponse != null && $tresponse->getErrors() != null)
        {
          echo " Error code  : " . $tresponse->getErrors()[0]->getErrorCode() . "\n";
          echo " Error message : " . $tresponse->getErrors()[0]->getErrorText() . "\n";                      
        }
        else
        {
          echo " Error code  : " . $response->getMessages()->getMessage()[0]->getCode() . "\n";
          echo " Error message : " . $response->getMessages()->getMessage()[0]->getText() . "\n";
        }
      }
    }
    else
    {
      echo  "No response returned \n";
    }

    return $TransactionRes;
  }

}

?>

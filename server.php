<?php
require 'lib/nusoap.php';
require_once 'enrolment_form.php';

try{

    $Api = ONE_ZERO; 
    $username = $_POST['username'];
    $password = $_POST['password'];
    $amount = $_POST['amount'];
    $safeKey = $_POST['safeKey'];
    $transactionType = $_POST['transactionType'];
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $description = $_POST['description'];
    $cancelUrl = $_POST['cancelUrl'];
    $returnURL = $_POST['returnUrl'];
    $merchantReference = $_POST['merchantRefernce'];
    $demoMode = true;

    $client = new nusoap_client("https://staging.payu.co.za/service/PayUAPI?wsdl");

    $params = array('Api'=>$Api , 'username'=>$username , 'password'=>$password, 'amount'=>$amount , 'safeKey'=>$safeKey, 
    'transactionType'=>$transactionType , 'firstname'=>$firstname , 'email'=>$email , 'phone'=>$phone ,'description'=>$description , 'cancelUrl'=>$cancelUrl,
    'returnUrl'=>$returnUrl , 'merchantRefernce'=>$merchantReference , 'demoMode'=>$demoMode);

    $response = $client->setTransaction($params);

    $array = json_decode(json_encode($response), true);

    function getTransaction($Response){
            if($Response->transactionState == 'successful'){
                return "transaction successful";
            }else{
                echo "transactin not successful";
            }
            return $Response;
      }
     

}catch(Exeception $e){

    echo $e->getMessage();



}

?>
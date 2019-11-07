<?php
require 'lib/nusoap.php';
require_once 'enrolment_form.php';

$server = new nusoap_server();

$server->configureWSDL("soap request" ,"urn:soaprequest");

$server->register(
    'getResponse',
    array("data"=>"xsd:array"),
    array("return"=>"xsd:array")

);

function getResponse($TransactionResponse){
    $res = $TransactionResponse;
    
    if($res->status == '0')
    {
        return $res ;
    }else{
        echo "unable to complete Process";

    }
    
}

$server->service(file_get_contents("php://input"));

$client = new nusoap_client("https://staging.payu.co.za/service/PayUAPI?wsdl");


if(isset($_POST['submit']))
{
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
    $demoMode = true;
    

    $order = new stdClass();

    $order->data = array(
        $data->username = $username ,
        $data->password = $password ,
        $data->amount = $amount,
        $data->safeKey = $safeKey,
        $data->transactionType = $transactionType,
        $data->firstname = $firstname ,
        $data->email = $email ,
        $data->phone = $phone ,
        $data->description = $description ,
        $data->cancelUrl = $cancelUrl,
        $data->returnUrl = $returnUrl ,
        $data->demoMode =$demoMode ,
        $data->currency = "NGN"
    );

    $client->call('getResponse' , array($order));

    
}

	

?>
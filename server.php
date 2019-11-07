<?php
require 'lib/nusoap.php';
require 'enrolment_form.php';

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



	

?>
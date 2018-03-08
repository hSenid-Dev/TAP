<?php
/**
 *   (C) Copyright 1997-2018 hSenid International (pvt) Limited.
 *   All Rights Reserved.
 *
 *   These materials are unpublished, proprietary, confidential source code of
 *   hSenid International (pvt) Limited and constitute a TRADE SECRET of hSenid
 *   International (pvt) Limited.
 *
 *   hSenid International (pvt) Limited retains all title to and intellectual
 *   property rights in these materials.
 */

include_once '../../lib/sms/SmsSender.php';
include_once '../log.php';
ini_set('error_log', 'sms-app-error.log');
ini_set('date.timezone', 'Asia/Colombo');

try {
    
    //$responseMsg;
	$responseMsg = $_POST["message"];

    // Create the sender object server url
    $sender = new SmsSender("http://localhost:7000/sms/send");

    //sending a one message

    $applicationId = "APP_000001";
    $encoding = "240";
    $version =  "1.0";
    $password = "812efdff06r9cfn027dgg5121cc6f0e";
    $sourceAddress = "";
    $deliveryStatusRequest = "1";
    $charging_amount = "";
    $destinationAddresses = "tel:".$_POST["msisdn"];
    $binary_header = "";
    $jsonResponse = $sender->sms($responseMsg, $destinationAddresses, $password, $applicationId, $sourceAddress, $deliveryStatusRequest, $charging_amount, $encoding, $version, $binary_header);

} catch (SmsException $ex) {
    //throws when failed sending or receiving the sms
    error_log("ERROR: {$ex->getStatusCode()} | {$ex->getStatusMessage()}");
}

//logFile("[response=$responseMsg, $destinationAddresses, $password, $applicationId, $sourceAddress, $deliveryStatusRequest, $charging_amount, $encoding, $version]");
//$responseArray = json_decode($jsonResponse, true);

?>

<html>
<head>
    <link href='bootstrap/css/bootstrap.css' rel='stylesheet'>
    <link href='custom-css/custom.css' rel='stylesheet'>
</head>
<body class='boby-padding'>

<div class='query-content-unit'>
    
    <a href='html/MT_SMS_Sender(many).html' align='right'>
        <button class='btn btn-success' align='Right'>Back to MT(many)</button>
    </a>
	<a href='html/MT_SMS_Sender(one).html' align='right'>
        <button class='btn btn-success' align='Right'>Back to MT(one)</button>
    </a>
</div>
<div id='footer'>
    <div align='center' style='color: darkgreen'>
        <span>Copyright &#169 2018 hSenid Mobile Solutions (Pvt) Ltd. All Rights Reserved.</span>
    </div>
</div>
</html>
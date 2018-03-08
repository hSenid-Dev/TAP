<?php

ini_set('date.timezone', 'Asia/Colombo');

include_once "subscription.php";
include_once 'Log.php';
$sub = new Subscription();

$AppId = "APP_041584";
$Password = "785efeff06e9cfe027dffd5001cc6f0e";
$SubscriberId ="$receiver->getAddress()";

$logger = new Logger();

// Register new user
//$sub->RegisterUser($AppId,$Password,$SubscriberId);

// Unregister new user
//$sub->UnregisterUser($AppId,$Password,$SubscriberId);

$baseSize = $sub->getBaseSize($AppId,$Password);
$status = $sub->getStatus($AppId,$Password,$SubscriberId);  

$array =  json_decode(file_get_contents('php://input'), true);

$applicationId =$array['applicationId'];
$frequency= $array['frequency'];
$status= $array['status'];
$address= $array['subscriberId'];
$version= $array['version'];
$timeStamp= $array['timeStamp'];



$logger->WriteSubLog("***********************************************");
$logger->WriteSubLog($AppId);
$logger->WriteSubLog($frequency);
$logger->WriteSubLog($address);
$logger->WriteSubLog($status);
$logger->WriteSubLog($version);
$logger->WriteSubLog($baseSize);
$logger->WriteSubLog($timeStamp);
$logger->WriteSubLog("***********************************************");



//if($status=="REGISTERED") {
    // Do something

//}else if($status=="UNREGISTERED") {
    // Do something
//}

?>
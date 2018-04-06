<?php
/**
 * Created by PhpStorm.
 * User: c6s
 * Date: 2018/4/7
 * Time: 1:11
 */
require  'vendor/autoload.php';
include 'Calc/CaltulatorClient.php';
include 'GPBMetadata/Calculator.php';
include 'Calc/Request.php';
include 'Calc/Response.php';
$client = new Calc\CaltulatorClient("192.168.2.104:50051", ['credentials' => Grpc\ChannelCredentials::createInsecure(),]);
$request = new Calc\Request();
$request->setA(10);
$request->setB(100);

list($reply, $status) = $client->Add($request)->wait();
echo $reply->getSum()
?>
<?php

require __DIR__."/../vendor/autoload.php";

use Curl\Curl;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable('../');
$dotenv->load();

$token = getenv('TOKEN');
$price = $_GET['amount'];
$mail = $_GET['email'];

if(empty($_GET['_token']) || $token != $_GET['_token']){
  echo json_encode([
    'message' => "Token invalid" 
  ]);
  die();
}

if(empty($mail) || empty($price)){
  echo json_encode([
    'message' => 'email or amount is not defined'
  ]);
  die();
}

if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
  echo json_encode([
    'message' => "Invalid email format"
    ]);
  die();
}
  
$price = (int) str_replace([',','.'],'',$price);
if (!is_int($price)){
  echo json_encode([
    'message' => "Invalid price ".$price
  ]);
  die();
}

$authorization = getenv('API_KEY');

$curl = new Curl();
$curl->setHeader('Content-Type', 'application/json');
$curl->setHeader('Authorization', 'Basic '.$authorization);
$curl->post(getenv('END_POINT'), array(
    "amount" => $price,
    "sellReference" => "TESTE",
    "userIdentifier" => "24a0ea3f-7e69-46e2-9550-43e828171385",
    "paymentReceiptEmail" => $mail,
    "notificationUrl" => "http://" 
));

echo json_encode([
  'data' => $curl->response,
  'status' => 200
]);
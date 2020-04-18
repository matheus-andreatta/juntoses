<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require_once ('AppCreditCard.php');

    // $firstName = $_POST["firstName"];
    // $lastName = $_POST["lastName"];
    // $email = $_POST["email"];
    // $phone = $_POST["phone"];
    // $cpf = $_POST["cpf"];
    $amount = $_POST["amount"];
    $paymentMethod = $_POST["paymentMethod"];

    $transaction = new AppCreditCard;
    $transaction->transaction($amount);

    $json["redirect"] = url("/app/assinatura");
    echo json_encode($json);

} else {
    // Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    echo "Ocorreu algum erro com sua requisição. Tente novamente.";
}

?>
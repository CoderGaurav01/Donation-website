<?php

$payment_for = "Donation";
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$amount = $_POST['amount'];
$phone = $_POST['phone'];
include 'instamojo/Instamojo.php';
$api = new Instamojo\Instamojo('test_6940235fee966d038b4c30ae9e1', 'test_a6dd6862feb9fa3cce477b80c06', 'https://test.instamojo.com/api/1.1/');
try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $payment_for,
        "amount" => $amount,
        "send_email" => true,
        "phone" => $phone,
        "send_sms" =>true,
        "email" => $email,
        "buyer_name" => $first_name . " " . $last_name,
        "redirect_url" => "http://localhost/creditmanagement/thankyou.php"
    ));
    //print_r($response);
    $pay_url = $response['longurl'];
    header("location:$pay_url");
} catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
?>
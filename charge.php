<?php
require_once 'config.php';
 
if (isset($_POST['submit'])) {
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $phn=$_POST['phone'];
        $amount=$_POST['amount'];
        $sql="insert into donator(first_name,last_name,email,phone_no,amount) values('{$fname}','{$lname}','{$email}','{$phn}','{$amount}')";
        $result=mysqli_query($db,$sql);
    try {
        $response = $gateway->purchase(array(
            'amount' => $_POST['amount'],
            'currency' => PAYPAL_CURRENCY,
            'returnUrl' => PAYPAL_RETURN_URL,
            'cancelUrl' => PAYPAL_CANCEL_URL,
        ))->send();
 
        if ($response->isRedirect()) {
            $response->redirect(); // this will automatically forward the customer
        } else {
            // not successful
            echo $response->getMessage();
        }
    } catch(Exception $e) {
        echo $e->getMessage();
    }
}
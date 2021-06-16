<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Succesfull</title>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
    $(function()
    {
        $("#header").load("navbar.html"); 
       $("#footer").load("footer.php"); 
    });
  </script> 
  <style>
    .container{
           border-radius: 5px;
           /* background-color: #f2f2f2;*/
            padding:20px;
            margin-top: 80px;
            margin-bottom: 10px;

    }
    </style>
</head>
<body>
<div id="header"></div>
<?php
require_once 'config.php';
 
// Once the transaction has been approved, we need to complete it.
if (array_key_exists('paymentId', $_GET) && array_key_exists('PayerID', $_GET)) {
    $transaction = $gateway->completePurchase(array(
        'payer_id'             => $_GET['PayerID'],
        'transactionReference' => $_GET['paymentId'],
    ));
    $response = $transaction->send();
 
    if ($response->isSuccessful()) {
        // The customer has successfully paid.
        $arr_body = $response->getData();
 
        $payment_id = $arr_body['id'];
        $payer_id = $arr_body['payer']['payer_info']['payer_id'];
        $payer_email = $arr_body['payer']['payer_info']['email'];
        $amount = $arr_body['transactions'][0]['amount']['total'];
        $currency = PAYPAL_CURRENCY;
        $payment_status = $arr_body['state'];
 
        // Insert transaction data into the database
        $isPaymentExist = $db->query("SELECT * FROM payments WHERE payment_id = '".$payment_id."'");
 
        if($isPaymentExist->num_rows == 0) {
            $insert = $db->query("INSERT INTO payments(payment_id, payer_id, payer_email, amount, currency, payment_status) VALUES('". $payment_id ."', '". $payer_id ."', '". $payer_email ."', '". $amount ."', '". $currency ."', '". $payment_status ."')");
        }
 
       /* echo "Payment is successful. Your transaction id is: ". $payment_id;*/
    } else {
        echo $response->getMessage();
    }
} else {
    echo 'Transaction is declined';
}
?>
<br/><br/>
<div class="container">    
  <h1>Your Payment is Succesfull. Thank You for your donation</h1>    
  <table class="table table-striped">
      <tr>
        <th>E-mail</th>
        <td><?php echo $payer_email ?></td>
      </tr>
        <th>Transaction ID:</th>
        <td><?php echo $payment_id ?></td>
      </tr>
      <tr>
        <th>Donation Amount</th>
        <td><?php echo $amount ?></td>
      </tr>
      <tr>  
        <th>Currency</th>
        <td><?php echo $currency ?></td>
      </tr>
      <tr>
        <th>Payment Status</th>
        <td><button type="button" class="btn btn-success"><?php echo $payment_status ?></button></td>
      </tr>
  </table>
</div>
<div id="footer"></div>
</body>
</html>    
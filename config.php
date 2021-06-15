<!-- ?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "donation_grip";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error ".mysqli_connect_error());  -->

<?php
    require_once "vendor/autoload.php";
    
    use Omnipay\Omnipay;
    
    define('CLIENT_ID', 'AewC4bskSTQjp9VCMPAdUNMYNrzYHr-EYiahuphwfJ7xSdI283UL4sgnCkZNMx4VyMl7FrzcLlaByH6g');
    define('CLIENT_SECRET', 'EGn8JpmGm9dfvM8K1svEHRE4lUmBj8gYqQGqCaWQBh4sK6oHlJMDFSLwwD71Pkw7Lk1Wjy_tlkP0KWaS');
    
    define('PAYPAL_RETURN_URL', 'https://e-donation.herokuapp.com//success.php');
    define('PAYPAL_CANCEL_URL', 'https://e-donation.herokuapp.com/cancel.php');
    define('PAYPAL_CURRENCY', 'USD'); // set your currency here
    
    // Connect with the database
    $servername = "remotemysql.com";
	$username = "e9IpnahYdV";
	$password = "K9nZR8KZ1v";
	$dbname = "e9IpnahYdV";
    
	$db = mysqli_connect($servername, $username, $password, $dbname);
    /*$db = new mysqli('localhost', 'root', '', 'donation_grip');*/ 
    
    if ($db->connect_errno) {
        die("Connect failed: ". $db->connect_error);
    }
    
    $gateway = Omnipay::create('PayPal_Rest');
    $gateway->setClientId(CLIENT_ID);
    $gateway->setSecret(CLIENT_SECRET);
    $gateway->setTestMode(true); //set it to 'false' when go live

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
 
define('CLIENT_ID', 'PAYPAL_CLIENT_ID_HERE');
define('CLIENT_SECRET', 'PAYPAL_CLIENT_SECRET_HERE');
 
define('PAYPAL_RETURN_URL', 'YOUR_SITE_URL/success.php');
define('PAYPAL_CANCEL_URL', 'YOUR_SITE_URL/cancel.php');
define('PAYPAL_CURRENCY', 'USD'); // set your currency here
 
$servername = "remotemysql.com";
	$username = "e9IpnahYdV";
	$password = "K9nZR8KZ1v";
	$dbname = "e9IpnahYdV";

// Connect with the database
$db = new mysqli('$servername', '$username', '$password', '$dbname'); 
 
if ($db->connect_errno) {
    die("Connect failed: ". $db->connect_error);
}
 
$gateway = Omnipay::create('PayPal_Rest');
$gateway->setClientId(CLIENT_ID);
$gateway->setSecret(CLIENT_SECRET);
$gateway->setTestMode(true); //set it to 'false' when go live
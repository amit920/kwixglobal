<?php 


if(!empty($_POST)){

	
// $firstname = $_POST['firstname'];
// $lastname = $_POST['lastname'];
// $email = $_POST['email'];
// $phonenumber = $_POST['phonenumber'];
// $user = $_POST['user'];


// $to = $email;
// $subject = "My subject";
// $txt = "Hello world!";
// $headers = "From: info@kwixglobal.com" . "\r\n" .
// "CC: deepak@parangat.com";

// mail($to,$subject,$txt,$headers);




$from = "Sandra Sender <info@kwixglobal.com>";
$to = $email;
$subject = "Hi!";
$body = "Hi,\n\nHow are you?";
$host = "cp192.ezyreg.com";
$port = "587";
$username = "info@thewayivogue.com";
$password = "Keki#010567";

$headers = array ('From' => $from,
  'To' => $to,
  'Subject' => $subject);
	echo "<pre>";print_r($_POST);
die;
$smtp = Mail::factory('smtp',
  array ('host' => $host,
    'port' => $port,
    'auth' => true,
    'username' => $username,
    'password' => $password));

	echo "<pre>";print_r($smtp);die;



$mail = $smtp->send($to, $headers, $body);
if (PEAR::isError($mail)) {
  echo("<p>" . $mail->getMessage() . "</p>");
 } else {
  echo("<p>Message successfully sent!</p>");
 }
header('Location: http://dev.kwixglobal.com/contact.php');

 }
?>
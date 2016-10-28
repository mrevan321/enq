<?php
$name = $_POST['contactname'];
$email = $_POST['contactemail'];
$message = $_POST['contactmessage'];

$formcontent="From: $name \n Email: $email \n Message: $message";

$recipient = 'ehowlett@outlook.com'; //my email

$subject = "New Message for Eastern Noodle Que";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");




$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
  header('Location:http://evanhcodes.com/kl/thanks.html ');
  exit;



?>

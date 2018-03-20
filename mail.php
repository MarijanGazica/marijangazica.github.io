<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['Message'];
$formcontent="From: $name \n Message: $message";
$recipient = "marijan.gazica+1@gmail.com";
$subject = "Website Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
?>

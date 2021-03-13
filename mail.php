<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$phone = $_POST['phone'];
$formcontent="From: $name \n Message: $message";
$recipient = "amber.m.oestreich@gmail.com";
$subject = $_POST['subject'];
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error");
echo "Thank You!";
?>

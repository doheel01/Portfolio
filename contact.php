<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['comment']))
$message = $_POST['comment'];

$content="From: $name \n Email: $email \n Message: $comment";
$recipient = "doheel01@hotmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>
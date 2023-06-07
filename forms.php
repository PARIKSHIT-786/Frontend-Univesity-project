<?php
$name = $_POST['name'];
$visitor_email = $_POST['email';
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'parikshitkalia1192@gmail.com';

$email_subject = 'new subject';

$email_body = "user name: $name.\n" .
               "user email : $visitor_email.\n" .
               "subject : $subject .\n".
               "user message : $message .\n";

$to ='aadi.yogimahadev68@gmail.com';
$headers ="from: $email_from \r\n";
$headers .= "reply-to : $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("location :contact.html")
?>
<?php

	$name = @trim(stripslashes($_POST['name'])); 
	$email = @trim(stripslashes($_POST['email']));
	$subject = @trim(stripslashes($_POST['subject']));
	$website = @trim(stripslashes($_POST['website']));
	$message = @trim(stripslashes($_POST['message'])); 

	$email_from = $email;
	$email_to = 'fcwong@yahoo.com';//replace with your email

	$body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Website: ' . $website . "\n\n" . 'Message: ' . $message;

	$success = @mail($email_to, $body, 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Website: ' . $website . "\n\n" . 'Message: ' . $message);
	
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<script>alert("Thank you for contacting us! We greatly value your business, and we'll be in touch shortly!");</script>
	<meta HTTP-EQUIV="REFRESH" content="0; url=../index.html"> 
</head>
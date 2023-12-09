<?php 
//Get the form data
$name = $_POST['name'];
$name = $_POST['email'];
$name = $_POST['mobile'];
$name = $_POST['message'];
//set the recipient email address
$to ='undigreg@gmail.com';
//set the email subject 
$subject ='New message from' .$name;
//Built the email content
$email_content = "Name: $name\n";
$email_content = "Email: $email\n\n\n";
$email_content = "Message: \n$message\n";
//set the email headers
$email_headers = "From: $name <$email>";
//send the email
mail($to, $subject, $email_content, $email_headers);
?>
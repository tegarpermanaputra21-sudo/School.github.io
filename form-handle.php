<?php
$name = $_POST['username'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['messsage'];

$email_form = 'info@gmail.com';

$email_subject = 'New Form Submission';

$email_body  =  "Username : $username .\n".
                "User Email: $visitor_email .\n".
                "Subject : $subject .\n".
                "User Message : $message .\n".

$to = 'tegarpermanaputra21@gmail.com';

$headers = "From: $email_form \r\n";

$headers .= "Reply to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location : contact.html");
?>
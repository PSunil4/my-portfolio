<?php
if(isset($_POST['send'])) {
 
    $to = "sp@spanchal.me";
    $subject = "Email From the Portfolio-Site";
    $headers .= 'Content-Type: text/plain; charset=utf-8';
 
    $email_message = 'Name: ' . $_POST['name'] . "\r\r\r\n";
    $email_message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
    $email_message .= 'Comments: ' . $_POST['message'];

    echo $email_message;

    $success = mail($to, $subject, $email_message, $headers);
    } 
?>
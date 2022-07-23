<?php 
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $email_subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'https://eduford-university-byhasan.netlify.app/';
    $email_subject = "New form submission";
    $email_body = "user name: $name.\n".
                    "user email: $visitor_email.\n".
                    "subject: $subject.\n".
                    "user message: $message.\n";
    
    $to = 'programmerhasan.bd@gmail.com';

    $headers = "From: $email_from \r\n";
    $headers .= "Reply-to: $visitor_email";

    mail($to, $email_subject, $email_body,$headers);

    header("Location: contact.html");
?>
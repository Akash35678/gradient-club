<?php
    $name=$_POST['name'];
    $visitor_email=$_POST['email'];
    $message=$_POST['message'];
    $email_from='akashvg2001@gmail.com';
    $email_subject="Noble cause Foundation Contact Form";
    $email_body=" User Name: $name.\n".
                    "User Email: $vistor_email.\n".
                        "User Message: $message.\n";

    $to="akashvg2001@gmail.com";
    $headers="From: $email_from \r\n";
    $headers="Reply-To:$visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: contact.html");
    
?>
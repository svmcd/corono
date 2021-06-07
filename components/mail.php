<?php

    $message_sent = false;

    if(isset($_POST['email']) && $_POST['email'] != ''){

        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {


            $name = $_POST['naam'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'From: ' .$naam. '<contact@corono.nl>' . "\r\n"; 
        
            $to = "spolat0750@gmail.com";
            $body = "";
        
            $body .= "From: ".$naam. "\r\n";
            $body .= "Email: ".$email. "\r\n";
            $body .= "Message: ".$message. "\r\n";
        
            mail($to, $body, $headers);

            $message_sent = true;
        } 

    }

?>
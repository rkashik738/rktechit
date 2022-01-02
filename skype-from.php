<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = "rkashik738@gmail.com";
    $email_subject = "rktechit Email";
    $email_body = "User Name: $name.\n";
                "user email: $visitor_email.\n";
                "user message: $message.\n";
        $to = "rkashik738@gmail.com";
        $headers = "form: $email_\r\n";
        $headers.= "reply-to: $visitor_email\r\n";
        mail($to,$email_subject,$email_body,$headres);
        header("location: index skype.html");
    

?>
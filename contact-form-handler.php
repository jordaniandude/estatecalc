<?php
    $name = $_Post['name'];
    $visitor_email = $_Post['email'];
    $message = $_Post['message'];

    $email_from = 'estatecalc@gmail.com';
    $email_subject = 'eState Calc New Form Submission'
    $email_body = "Visitor Name: $name. \n".
                    "Visitor Email: $visitor_email. \n".
                      "Visitor Message: $message.\n";
    $email_to = 'ozeh.tariq@gmail.com';
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    mail($email_to,$email_subject,$email_body,$headers);
    header("Location: index.html");
?>

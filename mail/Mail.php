<?php

require 'composer/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

function sendMail($name, $email, $subject){
    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->Host = 'localhost';
    $mail->SMTPAuth = false;
    $mail->SMTPAutoTLS = false; 
    $mail->Port = 25;

    $mail->setFrom('support@ecomtrace.com', 'EcomTrace Support');
    $mail->addReplyTo('support@ecomtrace.com', 'EcomTrace Support');
    $mail->addAddress($email, $name);

    $mail->Subject = $subject;

    $mail->isHTML(true);

    $mailContent = "<h1>Here is your Free Quote </h1> <p>"
    . $name . ", this is your free quote for EcomTrace.</p>";
    $mail->Body = $mailContent;


    if($mail->send()){
        // echo 'Message has been sent';
    }else{
        // echo 'Message could not be sent.';
        // echo 'Mailer Error: ' . $mail->ErrorInfo;
    }

}





/*


'protocol' => 'mail',
'smtp_host' => 'mail.ecomtrace.com',
'smtp_port' => '465',
'smtp_user' => 'support@ecomtrace.com', 
'smtp_pass' => 'b?qC&K%I9Hv1',
'mailtype' => 'html',
'wordwrap' => TRUE


*/
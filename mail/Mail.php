<?php

require 'composer/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

function sendMail(){
    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->Host = 'mail.ecomtrace.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'support@ecomtrace.com';
    $mail->Password = 'b?qC&K%I9Hv1';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 465;

/*
    'protocol' => 'mail',
    // 'smtp_host' => 'mail.ecomtrace.com',
    // 'smtp_port' => '465',
    // 'smtp_user' => 'support@ecomtrace.com', 
    // 'smtp_pass' => 'b?qC&K%I9Hv1',
    'mailtype' => 'html',
    'wordwrap' => TRUE
*/

    $mail->setFrom('support@ecomtrace.com', 'EcomTrace Support');
    $mail->addReplyTo('info@mailtrap.io', 'Mailtrap');
    $mail->addAddress('janithswickramasinghe@gmail.com', 'Janith');
    // $mail->addCC('janithswickramasinghe@gmail.com', 'Janith');
    // $mail->addBCC('bcc1@example.com', 'Alex');

    $mail->Subject = 'Test Email via Mailtrap SMTP using PHPMailer';

    $mail->isHTML(true);

    $mailContent = "<h1>Send HTML Email using SMTP in PHP</h1>
    <p>This is a test email I’m sending using SMTP mail server with PHPMailer.</p>";
    $mail->Body = $mailContent;


    if($mail->send()){
        echo 'Message has been sent';
    }else{
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }

}

function jnt(){
    echo 'addCC';
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
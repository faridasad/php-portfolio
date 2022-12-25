<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'faridasaddd@gmail.com';                     
    $mail->Password   = 'hukrlnyghhzwucku';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom("$_POST[email]", "$_POST[name]");  //Add a recipient
    $mail->addAddress("faridasaddd@gmail.com");               //Name is optional
    $mail->addReplyTo("$_POST[email]", 'Information');
 /*    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com'); */

/*     //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name */

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $_POST["subject"];
    $mail->Body    = $_POST["message"];
    $mail->AltBody = $_POST["message"];

    $mail->send();
    echo "<script>
            alert('Message has been sent');
            window.location.href = '../index.php';
          </script>";
} catch (Exception $e) {
    echo "<script>
            alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');
            window.location.href = '../index.php';
          </script>";
}

?>
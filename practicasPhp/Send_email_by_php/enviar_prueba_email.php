<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'C:\xampp\htdocs\practicasPhp\Send_email_by_php\PHPMailer\PHPMailer\Exception.php';
require 'C:\xampp\htdocs\practicasPhp\Send_email_by_php\PHPMailer\PHPMailer\PHPMailer.php';
require 'C:\xampp\htdocs\practicasPhp\Send_email_by_php\PHPMailer\PHPMailer\SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'welkerperez97@gmail.com';                     //SMTP username
    $mail->Password   = 'clave';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('welkerperez97@gmail.com', 'WELKER_TO_ANGGIE');
    $mail->addAddress('castellanos.anggie17@gmail.com', 'Anggie Liseth Castellanos Camacho (mi vida)');     //Add a recipient

/*     //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
 */
    //Content

    
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Email para el amor de mi vida!';
    $mail->Body    = "Hola mi amor! <b>Te amo!</b>";
    /* $mail->AltBody = 'This is the body in plain text for non-HTML mail clients'; */

    
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>



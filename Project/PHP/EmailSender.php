<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

$mail = new PHPMailer(true);

$Email = $_POST['EmailAddress'];

try {
    $mail->SMTPDebug = 2;                                       
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                             
    $mail->Username   = 'atiejolo@gmail.com';                 
    $mail->Password   = 'npvg tlge mmwj vflj';                        
    $mail->SMTPSecure = 'tls';                              
    $mail->Port       = 587;  

    $mail->setFrom('atiejolo@gmail.com', 'Jolo');           
    $mail->addAddress($Email);
    $mail->addAddress('receiver2@gfg.com', 'Name');
     
    $mail->isHTML(true);                                  
    $mail->Subject = 'Email Confirmation';
    $mail->Body    = "<b>Good Day</b> 
                      <br>
                      <p> Thank you for signing in! We can't wait to offer you our utmost service!
                      <a href='Dashboard.html' type='button'>SignIn</button> ";
    $mail->AltBody = 'Body in plain text for non-HTML mail clients';
    $mail->send();
    echo "Mail has been sent successfully!";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
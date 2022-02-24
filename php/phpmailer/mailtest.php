<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';

    $mail = new PHPMailer();
    
    try {
        $mail->SMTPDebug = 2;                                       
        $mail->isSMTP();                                            
        $mail->Host       = 'in-v3.mailjet.com';                    
        $mail->SMTPAuth   = true;                             
        $mail->Username   = '';                 
        $mail->Password   = '';                        
        $mail->SMTPSecure = 'tls';                              
        $mail->Port       = 587;  
      
        $mail->setFrom('gopikrishnan5747@gmail.com', 'gopi');           
        $mail->addAddress('gopikrishnan8015@gmail.com');
        //$mail->addAddress('gopikrishnan8015@gmail.com', 'gopitest');
           
        $mail->isHTML(true);                                  
        $mail->Subject = 'Subject';
        $mail->Body    = 'Test 1 <b>bold</b> ';
        $mail->AltBody = 'Body in plain text for non-HTML mail clients';
        $mail->send();
        echo "Mail has been sent successfully!";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

?>
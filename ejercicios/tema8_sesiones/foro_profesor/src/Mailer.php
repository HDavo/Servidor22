<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    class Mailer{
        public static function SendEmail(
            $correo,
            $asunto,
            $cuerpo
        ){
            //Create an instance; passing `true` enables exceptions
    global  $CONFIG;
    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.educa.madrid.org';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = $CONFIG['usuario_correo'];                     //SMTP username
        $mail->Password   = $CONFIG['secreto'];                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //mirar las modificaciones que ha hecho sobre este aerchivo
        //Recipients
        // $mail->setFrom('henry.orbe@educa.madrid.org', 'Linkenin');
        // $mail->addAddress($correo, 'Querido usuario/o');     //Add a recipient
        // $mail->addReplyTo('info@example.com', 'Information');
        
        //Recipients
        $mail->setFrom($CONFIG['enviador'],'Linkenin');
        $mail->addAddress($correo, 'Querido Usuario/a');

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $asunto;
        $mail->Body    = $cuerpo;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients'; 
        //opción para

        $mail->send();
        // echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

        }
    }

?>
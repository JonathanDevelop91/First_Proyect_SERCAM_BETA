<?php

    $destino="seguridadsercamsr@gmail.com";
    
    
    //Recibimos los datos de los formularios

    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $correo=$_POST["email"];
    $telefono=$_POST["telefono"];
    $asunto=$_POST["asunto"];
    $mje=$_POST["msg"];

    //Estructurar el contenido de la información.
    $contenido="Nombre ". $nombre . "<br>Apellido: " . $apellido . "<br>Correo: " . $correo . "<br>Telefono: " . $telefono . "<br>MENSAJE: " . $mje;


    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'Mail/Exception.php';
    require 'Mail/PHPMailer.php';
    require 'Mail/SMTP.php';

    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
            //Server settings
            $mail->SMTPDebug = 0;                                        // Enable verbose debug output
            $mail->isSMTP();                                                              // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                                         // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                                     // Enable SMTP authentication
            $mail->Username   = 'Pruebasclientesercam@gmail.com';                         // SMTP username
            $mail->Password   = 'XRMISSION3.0';                                           // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                           // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                                      // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('Pruebasclientesercam@gmail.com', 'Administrador de Usuarios');
            $mail->addAddress($destino, $nombre);                                       // Add a recipient


            

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $asunto;
            $mail->Body    = $contenido;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo '<script>
            alert("El mensaje se envío correctamente");
            window.history.go(-2);
            </script>
            ';
           
            

        } catch (Exception $e) {
            echo '<script>
            alert("El mensaje no se envío");
            window.history.go(-1);
            </script>'." Mailer Error: {$mail->ErrorInfo}";
            
        }
        
        


?>
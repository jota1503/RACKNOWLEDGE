<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'racknowledge0@gmail.com';                     //SMTP username
    $mail->Password   = 'oxhh evmd vpgx ekmx';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($_POST["correo"], $_POST["nombre"]);
    $mail->addAddress('racknowledge0@gmail.com');  
    $mail->addReplyTo($_POST["correo"], $_POST["nombre"]);   //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $_POST["asunto"];
    $mail->Body    = $_POST["mensaje"];

    $mail->send();

    // Si llegamos aquí, el mensaje se envió correctamente
    echo 'El mensaje se envió correctamente';

    // Agregar script de JavaScript para mostrar la alerta y redirigir
    echo '<script>';
    echo 'alert("El mensaje se envió correctamente");';
    echo 'window.location.href = "soporte.html";';
    echo '</script>';
} catch (Exception $e) {
    echo "Hubo un error al enviar el mensaje: {$mail->ErrorInfo}";
}

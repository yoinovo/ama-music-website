<?php
require_once('../includes/mail.php');

$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$description = $_POST['description'];

$mail->Subject = 'Nuevo mensaje de pagina AMA Musical';
$mail->Body    = "Nombre: $username, E-mail: $email, Telefono: $phone, Descripcion del proyecto: $description";
$mail->AltBody = "Nombre: $username, E-mail: $email, Telefono: $phone, Descripcion del proyecto: $description";

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

header("location:http://www.amamusical.com/");
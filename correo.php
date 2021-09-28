<?php

$name = $_POST['name'];
$mail = $_POST['mail'];
$message = $_POST['message'];

$to = "miguelangel150598@gmail.com";
$subject = "Contacto desde pagina";
$text = "De" . $name . "\n Correo: " . $mail . "\n Mensaje: " . $message;
$hader = "Enviado desde mi portafolio";

mail($to, $subject, $text, $hader);
echo "<script> setTimeout(\"location.href='index.html'\", 1000)</script>";

?>
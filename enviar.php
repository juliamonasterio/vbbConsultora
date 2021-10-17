<?php

//Invocando los campos de información

$nombre= $_POST['Nombre'];
$mail = $_POST['email'];
$consulta = $_POST['consulta'];


$header = 'From: '.$mail . "\r\n";
$header .= "X-Mailer: PHP/".phpversion()."\r\n";
$header .= "Mime-Version: 1.0 \r \n";
$header .= "Content-Type: text/plain";

//Datos para el correo

$destinatario="julia_monasterio2@hotmail.com";
$asunto="Nuevo Contacto V&BB Consultora";

$mensaje = "De: ".$nombre ."\n";
$mensaje .= "Mail:" .$mail ."\n";
$mensaje .= "Consulta: " .$consulta ."\n";

//Enviando mail
mail($destinatario, $asunto, utf8_decode($mensaje), $header);

header("Location: index.html");

?>
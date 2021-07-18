<?php
$nombre = $_POST["nombre"];
$mail = $_POST["email"];
$consulta = $_POST["consulta"];

$header = "From: " . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Consulta: " . $_POST["consulta"] . " \r\n";
$mensaje .= "Enviado el " . date("d/m/Y", time());

$inbox = "benja.sarria@live.com.ar";
$asunto = "Consulta de IP Lawyers";

mail($inbox, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");

?>
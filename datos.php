<?php
$nombre = $_GET["nombre"];
$email = $_GET ["email"];
$telefono = $_GET ["telefono"];
$sitioweb = $_GET ["website"];
$asunto = $_GET ["asunto"];
$mensaje = $_GET ["mensaje"];

echo $nombre. "/" . $email. "/" . $telefono. "/" . $sitioweb. "/" . $asunto. "/" . $mensaje;
?>
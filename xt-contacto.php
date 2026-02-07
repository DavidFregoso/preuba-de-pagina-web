<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$body = "Nombre: " . utf8_decode($_REQUEST["txtNombre"]) . "<br>";
$body = $body . "Telefono: " . utf8_decode($_REQUEST["txtTelefono"]) . "<br>";
$body = $body . "E-mail: " . utf8_decode($_REQUEST["txtEmail"]) . "<br>";
$body = $body . "Asunto: " . utf8_decode($_REQUEST["txtAsunto"]);

mail("contacto@ziloe.com.mx", "naturistasziloe.com", $body, "From: Contacto <contacto@naturistasziloe.com>\nContent-Type: text/html; charset=iso-8859-1");

echo "1";
?>
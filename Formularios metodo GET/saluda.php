<?php
// ?: "desconocido" operador Elvis
$nombre = $_GET["nom"] ?: "desconocido";
$apellido1 = $_GET["cognom1"] ?: "desconocido";

echo "Hola $nombre $apellido1";
?>
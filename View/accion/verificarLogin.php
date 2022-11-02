<?php

include_once('../../configuracion.php');

$datos = $_POST;

$sesion = new Sesion();

$sesion->iniciar($datos['usnombre'], $datos['uspass']);
$verificacion = $sesion->validar();

if ($verificacion) {
    Header('Location: ../paginaSegura.php');
}

?>
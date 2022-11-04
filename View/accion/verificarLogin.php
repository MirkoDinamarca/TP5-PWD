<?php

include_once('../../configuracion.php');

$datos = data_submitted();
$sesion = new Sesion();
$objUsuario = new Usuario();

if (!empty($datos)) {
    $parametro = ['usnombre' => $datos['usnombre'], 'uspass' => $datos['uspass']];
    $usuarioExistente = $objUsuario->buscar($parametro);
}


// if (!empty($usuarioExistente['usuario'])) {
if (isset($usuarioExistente['usuario'])) {
    $sesion->iniciar($usuarioExistente['usuario'][0]->getIdUsuario(), $usuarioExistente['usuario'][0]->getUserNombre());
    // Header('Location: ../paginaSegura.php');
} else {
    // Header('Location: ../login.php');
}
$dato['Prueba'] = 'Hola Mirko';
echo json_encode($dato);

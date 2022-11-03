<?php
include_once('../../configuracion.php');
$datos = data_submitted();

$usuario = new Usuario();

$usuarioBuscado = ['idusuario' => $datos['idusuario']];

$listaUsuario = $usuario->buscar($usuarioBuscado);
$objUsuario = $listaUsuario[0];

$datos['usdeshabilitado'] = $objUsuario->getUserDeshabilitado() ;

$usuario->actualizarUsuario($datos);



?>


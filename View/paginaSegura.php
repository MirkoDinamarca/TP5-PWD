<?php
include_once('../configuracion.php');
include_once('../templates/header.php');


// $sesion = new Sesion();

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

?>

<form action="accion/cerrarSesion.php" method="POST">
    <input type="submit" value="Cerrar Sesión">
</form>

<?php
include_once('../templates/footer.php');
?>

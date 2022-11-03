<?php
include_once('../templates/header.php');
include_once('../configuracion.php');

$objUsuario = new Usuario();
$datos = data_submitted();
$datoUsuario = $objUsuario->buscar($datos);

if (!empty($datoUsuario)) {
    $idusuario['idusuario'] = $datoUsuario[0]->getIdUsuario();
}
 
?>
 <?php if ($datoUsuario) { ?>
    <h5>Actualizar datos </h5>
    <form id="form" class="needs-validation" novalidate action="accion/actualizarLogin.php" method="POST">
    <input type="number" class="form-control" id="idusuario" name="idusuario" value="<?php echo $datoUsuario[0]->getIdUsuario() ?>" hidden>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Usuario</label>
        <input type="text" class="form-control" id="usnombre" name="usnombre"  value="<?php echo $datoUsuario[0]->getUserNombre() ?>" required>
        <div class="invalid-feedback">
            Este campo es obligatorio
        </div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">E-Mail</label>
        <input type="text" class="form-control" id="usmail" name="usmail"   value="<?php echo $datoUsuario[0]->getUserMail() ?>" required>
        <div class="invalid-feedback">
            Este campo es obligatorio
        </div>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">contraseña</label>
        <input type="text" class="form-control" id="uspass"  name="uspass"   value="<?php echo $datoUsuario[0]->getUserPass() ?>"required>
        <div class="invalid-feedback">
            Este campo es obligatorio
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
    <?php } else { ?>
            <h1>¡Los datos ingresados no existe!</h1>
        <?php }  ?>

<?php

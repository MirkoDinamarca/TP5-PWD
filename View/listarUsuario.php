<?php
include_once('../configuracion.php');
include_once('../templates/header.php');

$objUsuario = new Usuario();
$listaUsuario = $objUsuario->buscar();

?>

<div class="m-0 row justify-content-center align-items-center">

    <div class="col-xs-12 col-md-12">
        <table class="table" style="text-align: center;">
            <thead>
                <tr style="border-bottom:2px solid black;">
                    <th scope="col" style="border-radius: 5px 0 0 0;">ID</th>
                    <th scope="col">Usuario</th>
                    <th scope="col" style="border-radius: 0 5px 0 0;">E-Mail</th>
                    <th scope="col" style="border-radius: 0 5px 0 0;">Acciones</th>

                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($listaUsuario)) {
                    foreach ($listaUsuario as $usuario) :
                ?>
                        <tr style="border-bottom:2px solid white;">
                            <th scope="row"><?= $usuario->getIdUsuario() ?></th>
                            <td><?= $usuario->getUserNombre() ?></td>
                            <td><?= $usuario->getUserMail() ?></td>
                            <td>
                                <div>
                                    <a href="#" class="btnEdit" data-bs-toggle="tooltip" data-bs-placement="left" title="Editar Usuario">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                    <a href="#" class="btnDelete" data-bs-toggle="tooltip" data-bs-placement="right" title="Eliminar Usuario">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                            <!-- <td><i class="fa-regular fa-pen-to-square"></i></td> -->
                        </tr>
                    <?php
                    endforeach;
                } else { ?>
                    <tr>
                        <td colspan="6" style="text-align: center;">No se encontraron autos registrados</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php
include_once('../templates/footer.php');
?>
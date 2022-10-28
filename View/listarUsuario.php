<?php

$objUsuario = new Usuario();
$listaUsuario = $objUsuario->buscar();

?>

<div class="m-0 row justify-content-center align-items-center">

    <div class="col-xs-12 col-md-8">
        <table class="table table-striped">
            <thead>
                <tr style="border-bottom:2px solid black;">
                    <th scope="col" style="border-radius: 5px 0 0 0;">id usuario</th>
                    <th scope="col">usuario</th>
                    <th scope="col">contraseña</th>
                    <th scope="col" style="border-radius: 0 5px 0 0;">mail</th>
                    <th scope="col" style="border-radius: 0 5px 0 0;">acciones</th>
                 
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
                            <td><?= $usuario->getUserPass() ?></td>
                            <td><?= $usuario->getUserMail() ?></td>
                           
        
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
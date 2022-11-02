<?php
include_once('../configuracion.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/estilos.css">
    <title>Grupo N°9</title>
</head>

<body>
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="p-4 pt-5">
                <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>
                <ul class="list-unstyled components mb-5">

                    <li>
                        <a href="../index.php">Inicio</a>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Usuarios<i class="fa-solid fa-angle-down" style="padding-left: 150px;"></i></a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a href="#">Lista Completa</a>
                            </li>
                            <li>
                                <a href="#">Page 2</a>
                            </li>
                            <li>
                                <a href="#">Page 3</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Portfolio</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <!-- <li class="active">
                        <a href="#homeSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Configuración</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href="#">Iniciar Sesión</a>
                            </li>
                            <li>
                                <a href="#">Cerrar Sesión</a>
                            </li>
                        </ul>
                    </li> -->
                </ul>

                <div class="footer">
                    <p>
                        Grupo N°9
                    </p>
                    <p>- Agustina Kilapi</p>
                    <p>- Agustina Rossi</p>
                    <p>- Mirko Dinamarca</p>
                </div>

            </div>
        </nav>

        <!-- Contenido de la página  -->
        <div id="content" class="p-4 p-md-5">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa-solid fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="View/listarUsuario.php">Usuarios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Roles</a>
                            </li>
                            <li class="nav-item">
                                <?php 
                                // $sesion = new Sesion();
                                if ($sesion->activa()) { ?>
                                    <a class="nav-link" href="../View/accion/cerrarSesion.php">Cerrar Sesión</a>
                                <?php } else { ?>
                                    <a class="nav-link" href="../View/login.php">Iniciar Sesión</a>
                                <?php } ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
<?php
include_once('configuracion.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <title>Grupo N°9</title>
</head>

<body>
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="p-4 pt-5">
                <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>
                <ul class="list-unstyled components mb-5">

                    <li>
                        <a href="#">Inicio</a>
                    </li>
                    <!-- <li>
                        <a href="#pageSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Usuarios<i class="fa-solid fa-angle-down" style="padding-left: 150px;"></i></a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a href="View/listarUsuario.php">Lista Completa</a>
                            </li>
                            <li>
                                <a href="#">No se</a>
                            </li>
                            <li>
                                <a href="#">Page 3</a>
                            </li>
                        </ul>
                    </li> -->
                    <!-- <li>
                        <a href="#">Roles</a>
                    </li> -->
                    <!-- <li>
                        <a href="#">Parámetros</a>
                    </li> -->
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
                        <i class="fa-solid fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Inicio</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="View/login.php">Iniciar Sesión</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="View/listarUsuario.php">Usuarios</a>
                            </li> -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#">Roles</a>
                            </li> -->

                        </ul>

                    </div>

                </div>

                <!-- <div class="dropdown" >
                    <p class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">Iniciar Sesión</p>
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                    Dropdown form
                </button>
                    <form style="width: 300px;" class="dropdown-menu p-4">
                        <div class="mb-3">
                            <label for="exampleDropdownFormEmail2" class="form-label">E-Mail</label>
                            <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleDropdownFormPassword2" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                    </form>
                </div> -->
            </nav>



            <h2 class="mb-4">Grupo N°9</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
</body>

</html>

<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/fontawesome.min.js"></script>
<script src="assets/js/all.min.js"></script>
<script src="assets/js/popper.js"></script>
<script src="assets/js/main.js"></script>
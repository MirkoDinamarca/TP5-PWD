<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/estilos.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Grupo N°9</title>
</head>

<body>
    <div class="m-0 row vh-100 justify-content-center align-items-center">

        <div class="col-xs-12 col-md-5" style="padding: 20px; border: 1px solid gray; border-radius: 10px;">
            <form id="form" class="needs-validation" novalidate action="" method="POST">

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="usnombre" name="usnombre" placeholder="Ingrese el usuario" required>
                    <div class="invalid-feedback">
                        Este campo es obligatorio
                    </div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="uspass" name="uspass" placeholder="Ingrese la contraseña" required>
                    <div class="invalid-feedback">
                        Este campo es obligatorio
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            </form>
        </div>
    </div>
</body>

</html>

<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/popper.js"></script>
<script src="../assets/js/main.js"></script>
<div class="m-0 row justify-content-center align-items-center">

    <div class="col-xs-12 col-md-5" style="padding: 20px; border: 1px solid gray; border-radius: 10px;">
        <form id="form" class="needs-validation" novalidate action="" method="POST">

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">usuario</label>
                <input type="text" class="form-control" id="usnombre" name="usnombre" placeholder="Ingrese el usuario" required>
                <div class="invalid-feedback">
                    Este campo es obligatorio
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">contraseña</label>
                <input type="password" class="form-control" id="uspass" name="uspass" placeholder="Ingrese la contraseña" required>
                <div class="invalid-feedback">
                    Este campo es obligatorio
                </div>
            </div>
           
            <button type="submit" class="btn ">login</button>
        </form>
    </div>
</div>
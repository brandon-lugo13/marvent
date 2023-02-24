<!DOCTYPE html>
<html lang="es">
<?php
include_once "./Helpers/headers.php"
?>

<body>
    <form action="registrar.php" method="POST" class="form-box2">
        <div class="text-center">
            <img class="img-login" src="imagenes/logo.jpg" alt="logo">
            <br>
            <br>
            <h1 class="Form-tittle"> REGISTRO </h1>
        </div>
        <div>
            <label class="form-title3">Nombre completo</label>
            <input type="text" class="form-control" required placeholder="" name="nombre">
            <br>
            <label class="form-title3">Telefono Personal</label>
            <input type="text" class="form-control" required placeholder="" name="tel_personal">
            <br>
            <label class="form-title3">Correo electronico</label>
            <input type="email" class="form-control" required placeholder="" name="email">
            <br>
            <label class="form-title3">Direccion</label>
            <input type="text" class="form-control" required placeholder="" name="direccion">
            <br>
            <label class="form-title3">Contraseña</label>
            <input type="password" class="form-control" required placeholder="" name="contrasena">
            <br>
            <label class="form-title3"> Rol (Admin/Empleado)</label>
            <select class="form-control" name="rol">
                <option value="1"> Administrador </option>
                <option value="2"> Empleado </option>
            </select>
            <br>
            <div class="text-center">
                <p>Si ya tiene cuenta <a class="button2" href="login.php"> Ingresar</a></p>
            </div>
            <div class="text-center d-grid gap-2">
                <button type="submit" class="btn btn-dark">
                    Registrar
                </button>
            </div>

        </div>



    </form>

</body>

</html>
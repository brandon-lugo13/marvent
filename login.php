<!DOCTYPE html>
<html lang="es">

<?php
include_once "./Helpers/headers.php"
?>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5">

            </div>
            <div class="col-sm-2">
                <form action="validar.php" method="post" class="form-box">
                    <div class="text-center">
                        <h1 class="form-title">Marvent</h1>
                        <img src="imagenes/logo.jpg" alt="logo" class="img-login">
                        <br>
                        <br>
                        <h1 class="form-tittle2"> Iniciar sesion </h1>
                    </div>
                    <br>
                    <div>
                        <h3 class="form-title3">USUARIO</h3>
                        <input type="text" required placeholder="" name="usuario" class="form-control">
                        <br>
                        <h3 class="form-title3">CONTRASEÑA</H3>
                        <input type="password" required placeholder="" name="contrasena" class="form-control">
                        <br>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-dark" type="submit">INGRESAR</button>
                    </div>
                  
                    <div class="text-center">
                        <br>
                        <li class="res">
                            <a href="registrarse.php">
                                <p> Registrarme</p>
                            </a>
                        </li>
                        <li class="olv">
                            <a href="olvidosucontraseña.html">
                                <p> ¿Olvido su contraseña?</p>
                            </a>
                        </li>
                    </div>

                </form>

            </div>
            <div class="col-sm-5">

            </div>
        </div>
    </div>


</body>

</html>
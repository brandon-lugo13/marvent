<?php
include('./home.php');
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$contrasena=md5($_POST['contrasena']);
$rol=$_POST['rol'];
$direccion=$_POST['direccion'];
$tel_personal=$_POST ['tel_personal'];


$consulta="INSERT INTO `usuarios`(`Id_Usuario`, `UsuNombre`, `UsuTel_Personal` , `UsuEmailPersonal`, `UsuDireccion`, `UsuContrasena`) VALUES (null, '$nombre', '$tel_personal', '$email', '$direccion', '$contrasena')";
$resultado=mysqli_query($conexion,$consulta);

if($resultado == 1){
    echo "<script>alert('Usuario registrado')</script>";
    header('Location: login.php');

}else{
    echo "<script>alert('Usuario no registrado')</script>";
}



//$_SESSION['usuario']=$usuario;
?>
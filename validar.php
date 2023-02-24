<?php

include('home.php');
session_start();
$usuario=$_POST['usuario'];
$contrasena=md5($_POST['contrasena']);


$consulta="SELECT*FROM usuarios where UsuEmailPersonal='$usuario' and UsuContrasena='$contrasena'";
$resultado=mysqli_query($conexion,$consulta);

if($resultado){
    $row_cnt = mysqli_num_rows($resultado);
    if($row_cnt!=0){
        
        $_SESSION["UsuEmailPersonal"]=$usuario;
        header('Location: principal.php');

    }else{
        echo "<script>alert('No existen usuarios');</script>";
        header('Location: login.php');
    }
}else{
    echo "<script>alert('No existen usuarios')</script>";
}




//$_SESSION['usuario']=$usuario;
<?php
session_start();
//ver el captcha
if(isset($_POST['captcha'])){
    $varIngreso = $_POST['captcha'];
    $varSession = $_SESSION['captcha'];
    if($varIngreso!=$varSession){
        header("Location:index.php?error=captcha");
    }
}else{
    header("Location:index.php?error=registro");
}
require_once("conexion.php");



if(isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    //Comprobar si existe mail o usuario
    $sqlDuplicado = "SELECT * FROM usuarios WHERE (usuario='$usuario' OR email='$email');";
    $queryDuplicado = mysqli_query($conexion, $sqlDuplicado);
    //print_r($queryDuplicado, false);
    //die();
    if(mysqli_num_rows($queryDuplicado)<1){
        $sql = "INSERT INTO phpintermedio VALUES (DEFAULT, '$nombre', '$apellido', '$email', '$usuario', '$contrasena');";
        $query = mysqli_query($conexion, $sql);
        if($query == true){
            $_SESSION['usuario'] = $usuario;
            header("Location:inicio_sesion.php?registro=true");
        }else{
            header("Location:index.php?error=registro");
        }
    }else{
        header("Location:index.php?error=duplicado");
    }
        
}else{
    header("Location:index.php");
}

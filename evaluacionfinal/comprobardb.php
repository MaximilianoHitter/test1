<?php
session_start();
require_once("conexion.php");
if(isset($_POST['submit'])){
    $usuarioValidar = $_POST['usuario'];
    $passwordValidar = $_POST['contrasena'];
    $sqlValidar = "SELECT COUNT(*) FROM usuarios WHERE (usuario = '$usuarioValidar' AND contrasena = '$passwordValidar');";
    $validacionUsuario = mysqli_query($conexion, $sqlValidar);
    if(mysqli_num_rows($validacionUsuario)>0){
        
        $_SESSION['usuario'] = $usuarioValidar;
        header("Location:inicio_sesion.php");
    }else{
        header("Location:login.php?error=contrasena");
    }
    
}else{
    header("Location:login.php");
}


?>
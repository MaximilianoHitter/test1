<?php
session_start();
if(isset($_GET['registro'])){
    if($_GET['registro']=="true"){
        $usuarioSession = $_SESSION['usuario'];
    }
}else{
    $usuarioSession = $_POST['usuario'];
}

header("Location:contenido_usuario.php");
?>
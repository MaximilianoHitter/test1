<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Registro</title>
</head>

<body>
    <div class="container">
        <header>
            <h1>PHP y MySQL - Nivel Intemedio</h1>
           
        </header>
        <section>
        <div class="error">
            <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "registro") {
                    echo "Ups, algo salió mal al intentar crear su registro...";
                } else if ($_GET['error'] == "noregistro") {
                    echo "No tenemos ningún usuario registrado con ese email, registrese para acceder";
                } else if ($_GET['error'] == "duplicado") {
                    echo "Ya tenemos un registro con ese email o usuario, por favor seleccione otro.";
                } else if($_GET['error'] == "captcha"){
                    echo "Ha ingresado un captcha erróneo, vuelva a completar el formulario.";
                }
            }
            ?>

        </div>
        <form action="crear_usuario.php" method="POST">
            <h2>Ingrese sus datos</h2>
            <p>
                <input type="text" name="nombre" placeholder="Nombre..." required>
            </p>
            <p>
                <input type="text" name="apellido" placeholder="Apellido..." required>
            </p>
            <p>
                <input type="email" name="email" placeholder="Email..." required>
            </p>
            <p>
                <input type="text" name="usuario" placeholder="Usuario..." required>
            </p>
            <p>
                <input type="password" name="contrasena" placeholder="Contraseña..." required>
            </p>
            <p>
                <input type="text" name="captcha" placeholder="captcha" required>
            </p>
            <p>
                <img src="gencaptcha.php" alt="Captcha">
            </p>
            <p>
                <input type="submit" value="Registrar..." name="submit">
            </p>

        </form>
        <a href="login.php">¿Ya tienes cuenta? Ingresa aquí.</a>
        </section>
    </div>
</body>

</html>
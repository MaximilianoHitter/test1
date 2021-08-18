<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <header>
            <h2>¡Bienvenido nuevamente!</h2>
        </header>
        <section>
            <div class="error">
                <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "contrasena") {
                        echo "Parece que esta no es la contraseña que tenemos guardada, pruebe con otro valor...";
                    } else if ($_GET['error'] == "nologin") {
                        echo "Por favor inicie sesion con sus datos.";
                    }
                }
                ?>
            </div>
            <form action="comprobardb.php" method="post" class="login">

                <p>
                    <input type="text" name="usuario" placeholder="Usuario...">
                </p>
                <p>
                    <input type="password" name="contrasena" placeholder="Contraseña...">
                </p>
                <p>
                    <input type="submit" value="¡Acceder!" name="submit">
                </p>
            </form>
        </section>
    </div>
</body>

</html>
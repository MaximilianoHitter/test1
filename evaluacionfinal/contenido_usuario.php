<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location:login.php?error=nologin");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Contenido para usuarios</title>
</head>

<body>
    <div class="container">
        <header>
            <h1>Bienvenido <?php echo $_SESSION['usuario']; ?></h1>
        </header>
        <section>
            <p>El siguiente contenido es solo para usuarios, así que si podes ver esto es porque de alguna forma
                te has loggeado en la página, sea mediante el registro de un usuario nuevo o utilizando tu usuario y contraseña.
            </p>
            <p>
                Perdón profesor si el código se encuentra un tanto desordenado, he comenzado a hacerlo desde cero, he tenido incontables problemas con la generación de la imagen
                del captcha en php, alrededor de 10 horas me llevó resolver la actividad y por el final, cuando iba a la mitad de la resolución del problema con el captcha me di cuenta que
                había una sección en la pag de la evaluación que contenía algunos archivos para usarlos de base, copie algo de código pero no pude integrarlo del todo así que tiene un diseño un 
                tanto diferente.
            </p>
            <p>
                A continuación comentaré los problemas que mas me ha costado resolver:
            </p>
            <p>
                1-Comprobación de base de datos: el primer problema con el que me encontré fue, luego de enviar por post los datos del formulario, el poder comprobar
                si se encontraba ya creado un registro en la db con mismo usuario o email, después de muchos errores pude encontrar una forma de solucionarlo, así ya no se crearán registros con
                mismo usuario o email. No he incluido el atributo "UNIQUE" para estos datos en la db.
            </p>
            <p>
                2-Problema de sesion: el segundo problema fue como implementar debidamente la sesion, por cuestiones de tiempo las actividades opcionales del módulo 2 no las he realizado y me ha costado 
                terminar de interpretar como implementar bien el tema de las sesiones.
            </p>
            <p>
                3-Problema de imágen/captcha: el tercer problema fue el que mas tiempo me ha llevado resolver, diría que casi un 80% del tiempo que me llevó realizar la actividad. Mi principal problema era 
                que podía crear la imagen con un código aleatorio conformado por 2 números, una letra y 2 números mas, pero al implementarla en el html se me rompían todos los estilos, básicamente lo único que 
                veía era un cuadrado blanco de 16x16 en medio de toda la pantalla negra, busqué mil formas de arreglarlo hasta que me di cuenta que yo creaba la imagen e intentaba cargarla, cuando en la etiqueta 
                de html solo debía poner el src del archivo de php y no de la imagen.
            </p>
            <br>
            <br>
            <br>
            <br>
        </section>
        <footer>
            <p>
                Si usted desea salir de su sesion <a href="salir.php">¡de click aqui!</a>
            </p>
        </footer>
    </div>
</body>

</html>
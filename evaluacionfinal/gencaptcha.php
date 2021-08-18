<?php
header('Content-type: image/jpg');
$numeros = rand(10,99);
$letras = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","ñ","o","p","q","r","s","t","u","v","w","x","y","z");
$numeroDos = rand(10,99);
$randLetras = rand(0,26);
//Generar codigo.
$cadena = "$numeros"."$letras[$randLetras]"."$numeroDos";
$_SESSION['captcha'] = $cadena;

//Generar imagen.
$im = @imagecreate(100, 30);
$color_fondo = imagecolorallocate($im, 240, 240, 240);
$color_texto = imagecolorallocate($im, 0, 128, 6);
imagestring($im, 10, 10, 5, $cadena, $color_texto); 
imagepng($im);
imagedestroy($im);
?>

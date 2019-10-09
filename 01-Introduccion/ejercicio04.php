<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios PHP</title>
</head>
<body>
<h1>Soluciones de ejercicios PHP</h1>
<h2>Tema 1: Introducción a PHP</h2>
<h3>Ejercicio 4</h3>
<h4>Enunciado:</h4>
<p>
    04. Escribe una función que reciba como parámetro dos cadenas de texto y devuelva la concatenación de dichas cadenas. Muestra el resultado obtenido por pantalla.</p>
</p>
<h4>Solución:</h4>
<?php

function concatenar($texto1, $texto2) {
    return $texto1 . $texto2;
}
?>

<ul>
    <li>Concatenar "¿Hola qué " y "tal estás?": <b><?php echo concatenar("¿Hola qué ","tal estás?") ?></b></li>
</ul>

</body>
</html>
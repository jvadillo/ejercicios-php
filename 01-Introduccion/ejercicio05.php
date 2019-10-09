<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios PHP</title>
</head>
<body>
<h1>Soluciones de ejercicios PHP</h1>
<h2>Tema 1: Introducción a PHP</h2>
<h3>Ejercicio 5</h3>
<h4>Enunciado:</h4>
<p>
    05. Modifica la función anterior para que establezca un valor por defecto a una de las cadenas.
</p>


</p>
<h4>Solución:</h4>
<?php

function concatenar($texto1, $texto2="texto por defecto") {
    return $texto1 . $texto2;
}
?>

<ul>
    <li>Concatenar "¿Hola qué " y "tal estás?": <b><?php echo concatenar("¿Hola qué ","tal estás?") ?></b></li>
    <li>Concatenar "¿Hola qué " y nada más: <b><?php echo concatenar("¿Hola qué ") ?></b></li></li>
</ul>

</body>

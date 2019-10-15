<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios PHP</title>
</head>
<body>
<h1>Soluciones de ejercicios PHP</h1>
<h2>Tema 1: Introducción a PHP</h2>
<h3>Ejercicio 15</h3>
<h4>Enunciado:</h4>
<p>
    15. Crea un array con marcas de coches y una función que imprima por pantalla una lista con todos los nombres utilizando la sentencia do-while.
</p>
<h4>Solución:</h4>

<?php

$marcas = ["Audi", "Seat", "Mercedes", "Volkswagen", "BMW", "Fiat"];

function imprimir($elementos) {

    $posicion = 0;
    do {
        echo "<li>{$elementos[$posicion]}</li>";
        $posicion++;
    } while($posicion < count($elementos));
}

?>

<ul>
    <?php imprimir($marcas) ?>
</ul>

</body>
</html>
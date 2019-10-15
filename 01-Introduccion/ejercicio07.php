<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios PHP</title>
</head>
<body>
<h1>Soluciones de ejercicios PHP</h1>
<h2>Tema 1: Introducción a PHP</h2>
<h3>Ejercicio 8</h3>
<h4>Enunciado:</h4>
<p>
    07. Crea dos arrays, uno con 4 tipos de animales ($animales) y otro con 4 nombres de colores ($colores).
</p>
<ul>
    <li>Calcula el número de elementos de cada array.</li>
    <li>Añade un elemento al final del array $animales utilizando una función.</li>
    <li>Añade un elemento al principio del array $colores utilizando una función.</li>
    <li>Crea un tercer array que incluya los elementos de los dos arrays.</li>
</ul>

</p>
<h4>Solución:</h4>
<?php

$animales = array('Tigre','Perro','Gato','Oso');
$colores = array('Azul','Verde','Rojo','Naranja');

?>

<ul>
    <li>Tamaño primer array: <?php echo count($animales) ?></li>
    <li>Tamaño primer array: <?php echo count($colores) ?></li>

    <?php
    array_push($animales, "Zorro");
    ?>

    <li>Añadido animal al array: <?php print_r($animales) ?></li>

    <?php
    array_unshift($colores, "Rosa");
    ?>

    <li>Añadido color al array: <?php print_r($colores) ?></li>

    <?php
    $resultado = array_merge($animales, $colores);
    ?>

    <li>Dos arrays unidos: <?php  print_r($resultado) ?></li>
</ul>

</body>
</html>
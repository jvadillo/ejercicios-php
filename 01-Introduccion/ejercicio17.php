<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios PHP</title>
</head>
<body>
<h1>Soluciones de ejercicios PHP</h1>
<h2>Tema 1: Introducción a PHP</h2>
<h3>Ejercicio 17</h3>
<h4>Enunciado:</h4>
<p>
    17. Modifica el ejercicio número 15 para obtener el mismo resultado empleando una estructura foreach.
</p>
<h4>Solución:</h4>

<?php

$marcas = ["Audi", "Seat", "Mercedes", "Volkswagen", "BMW", "Fiat"];

function imprimir($elementos) {

   foreach($elementos as $el) {
        echo "<li>{$el}</li>";
    }
}

?>

<ul>
    <?php imprimir($marcas) ?>
</ul>

</body>
</html>
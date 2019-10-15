<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios PHP</title>
</head>
<body>
<h1>Soluciones de ejercicios PHP</h1>
<h2>Tema 1: Introducción a PHP</h2>
<h3>Ejercicio 18</h3>
<h4>Enunciado:</h4>
<p>
    18. Crea un array con el nombre de 8 grupos de música y una función que imprima por pantalla todos los elementos utilizando la estructura foreach.
</p>
<h4>Solución:</h4>

<?php

$marcas = ["ACDC", "Platero y tu", "Berri Txarrak", "Bob Marley $ The Wailers", "Foo Fighters", "Muse", "Sutagar", "Kortatu"];

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
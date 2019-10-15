<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios PHP</title>
</head>
<body>
<h1>Soluciones de ejercicios PHP</h1>
<h2>Tema 1: Introducción a PHP</h2>
<h3>Ejercicio 12</h3>
<h4>Enunciado:</h4>
<p>
    12. Crea un array con nombres de países y a continuación una función que reciba el nombre de un país y recorra el array, comprobando valor por valor si alguno de ellos es igual al del parámetro recibido. Devolverá la posición en la que se encuentre o el valor -1 en caso de no encontrarlo.
</p>
<h4>Solución:</h4>

<?php

$paises = ["Brasil", "Portugal", "Islandia", "Mexico", "Filipinas", "Marruecos"];

function encuentraPosicion($paises, $pais) {

    for($x = 0; $x < count($paises); $x++) {
        if($paises[$x] == $pais) {
            return $x;
        }

    }
}

?>

<ul>
    <li>La posición de Islandia es: <?= encuentraPosicion($paises, "Islandia") ?></li>
    <li>La posición de Islandia es: <?= encuentraPosicion($paises, "Marruecos") ?></li>
    <li>La posición de Islandia es: <?= encuentraPosicion($paises, "Brasil") ?></li>
</ul>

</body>
</html>
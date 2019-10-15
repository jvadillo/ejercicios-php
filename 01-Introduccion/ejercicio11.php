<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios PHP</title>
</head>
<body>
<h1>Soluciones de ejercicios PHP</h1>
<h2>Tema 1: Introducción a PHP</h2>
<h3>Ejercicio 11</h3>
<h4>Enunciado:</h4>
<p>
    11. Crea una función que reciba un número indicando el día de la semana y que muestre por pantalla el día de la semana. Utiliza un switch para ello.
<h4>Solución:</h4>
<?php

function diaSemana($numero) {
    switch ($numero) {
        case 1:
            echo "Es lunes";
            break;
        case 2:
            echo "Es martes";
            break;
        case 3:
            echo "Es miércoles";
            break;
        case 4:
            echo "Es jueves";
            break;
        case 5:
            echo "Es viernes";
            break;
        case 6:
            echo "Es sábado";
            break;
        case 7:
            echo "Es domingo";
            break;
        default:
            echo "No es ningún día de la semana";
            break;
    }
}

?>

<ul>
    <li>Número 4: <?php diaSemana(4) ?></li>
    <li>Número 2: <?php diaSemana(2) ?></li>
    <li>Número 6: <?php diaSemana(6) ?></li>
    <li>Número 9: <?php diaSemana(9) ?></li>
    <li>Número X: <?php diaSemana('X') ?></li>
</ul>

</body>
</html>
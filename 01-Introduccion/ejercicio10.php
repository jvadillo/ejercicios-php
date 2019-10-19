<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios PHP</title>
</head>
<body>
<h1>Soluciones de ejercicios PHP</h1>
<h2>Tema 1: Introducción a PHP</h2>
<h3>Ejercicio 10</h3>
<h4>Enunciado:</h4>
<p>
    10. Crea un array con 5 números. A continuación, crea una función que reciba 2 parámetros: el primero indicará la posición del array y el segundo un número entero. La función deberá comprobar si el número ubicado en la posición indicada del array es mayor, igual o menor que el segundo parámetro. Devolverá  una frase como la siguiente: “El número de la posición 4 es mayor que 9.”</p>
<h4>Solución:</h4>
<?php

$datos = [5, 2, 9, -10, 24];


function comparar($datos, $posicion, $numero) {
    if($datos[$posicion] > $numero) {
        $resultado = "mayor";
    } elseif($datos[$posicion] == $numero) {
        $resultado = "igual";
    } else {
        $resultado = "menor";
    }

    echo "El número de la posición " . $posicion . " es " . $resultado . " que " . $numero;


}

?>

<ul>
    <li>Array de números: <?= print_r($datos) ?></li>
    <li><?php comparar($datos, 0, 5) ?></li>
    <li><?php comparar($datos, 1, 5) ?></li>
    <li><?php comparar($datos, 2, 5) ?></li>
    <li><?php comparar($datos, 3, 2) ?></li>
</ul>

</body>
</html>
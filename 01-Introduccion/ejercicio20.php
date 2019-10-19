<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios PHP</title>
</head>
<body>
<h1>Soluciones de ejercicios PHP</h1>
<h2>Tema 1: Introducción a PHP</h2>
<h3>Ejercicio 20</h3>
<h4>Enunciado:</h4>
<p>
    20. Crea un programa que reciba un número como argumento y haga la suma de los siguientes 100 números (incluyendo el número pasado como argumento) . Ejemplo: 15 → Suma del 15 al 115 = 6565</p>
<h4>Solución:</h4>

<?php

function sumar($numero) {
    $resultado = 0;
    for($posicion = $numero; $posicion <= ($numero+100); $posicion++) {
        $resultado += $posicion;
    }
    return $resultado;
}

?>

<ul>
    <li>Suma del 15 al 115 = <?php echo sumar(15) ?></li>
    <li>Suma del 28 al 128 = <?php echo sumar(28) ?></li>
    <li>Suma del 1 al 101 = <?php echo sumar(1) ?></li>
</ul>

</body>
</html>
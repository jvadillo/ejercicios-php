<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios PHP</title>
</head>
<body>
<h1>Soluciones de ejercicios PHP</h1>
<h2>Tema 1: Introducción a PHP</h2>
<h3>Ejercicio 6</h3>
<h4>Enunciado:</h4>
<p>
    06. Crea un array con 5 nombres distintos. A continuación crea dos funciones:
</p>
<ul>
    <li>getValor($array, $posicion): recibe un número como parámetro y devuelve el valor almacenado en el array en dicho índice.</li>
    <li>setValor($array, $posicion, $valor): establece el valor del elemento indicado en la posición y devuelve el array.</li>
</ul>

</p>
<h4>Solución:</h4>
<?php

function getValor($array, $posicion) {
    return $array[$posicion];
}

function setValor($varrayValores, $posicion, $valor) {
    $varrayValores[$posicion] = $valor;
    return $varrayValores;
}

$valores = array('Paris','Berlin','Amsterdam','Praga');

?>

<ul>
    <li>Primer elemento: <?php echo getValor($valores,0) ?></li>
    <li>Segundo elemento: <?php echo getValor($valores,1) ?></li>
    <li>Establecer "Vitoria" como segundo elemento. <?php $valores = setValor($valores,1,"Vitoria") ?></li>
    <li>Valor del segundo elemento: <?php echo getValor($valores,1) ?></li>
</ul>

</body>
</html>
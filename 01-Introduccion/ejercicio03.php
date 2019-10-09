<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios PHP</title>
</head>
<body>
<h1>Soluciones de ejercicios PHP</h1>
<h2>Tema 1: Introducción a PHP</h2>
<h3>Ejercicio 3</h3>
<h4>Enunciado:</h4>
<p>
    03. Crea una función llamada esMayor() que reciba como parámetros dos números y devuelva TRUE si el primer número es mayor que el segundo.
</p>


</p>
<h4>Solución:</h4>
<?php

function esMayor($num1, $num2) {
    return $num1 > $num2;
}

?>

<ul>
    <li>5 es mayor que 3: <?php echo var_export(esMayor(5,3)) ?></li>
    <li>3 es mayor que 5: <?php echo var_export(esMayor(3,5)) ?></li>
</ul>

</body>
</html>
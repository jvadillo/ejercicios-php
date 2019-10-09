<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios PHP</title>
</head>
<body>
<h1>Soluciones de ejercicios PHP</h1>
<h2>Tema 1: Introducción a PHP</h2>
<h3>Ejercicio 2</h3>
<h4>Enunciado:</h4>
<p>
    02. Crea dos variables, a y b con los valores 5 y 8 respectivamente. Almacena el resultado de las siguientes operaciones en una nueva variable y muéstrala por pantalla.
</p>
<ul>
    <li>Resta de a y b</li>
    <li>División de a entre b</li>
    <li>Resultado de a mayor que b</li>
    <li>Resultado de a menor o igual que b</li>
</ul>

</p>
<h4>Solución:</h4>
<?php
$a = 5;
$b = 8;

$resta = $a - $b;
$division = $a / $b;
$mayor = $a>$b;
$menorIgual = $a <= $b;
?>

<ul>
    <li>Resta de a y b: <?php echo $resta ?></li>
    <li>División de a entre b: <?php echo $division ?></li>
    <li>Resultado de a mayor que b: <?php echo var_export($mayor) ?></li>
    <li>Resultado de a menor o igual que b: <?php echo var_export($menorIgual) ?></li>
</ul>

</body>
</html>
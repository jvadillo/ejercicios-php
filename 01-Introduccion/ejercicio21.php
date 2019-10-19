<?php
include 'funciones.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios PHP</title>
</head>
<body>
<h1>Soluciones de ejercicios PHP</h1>
<h2>Tema 1: Introducción a PHP</h2>
<h3>Ejercicio 21</h3>
<h4>Enunciado:</h4>
<p>
    21. Crea un programa que a partir del número indicado, recorra todos los números desde dicho número hasta el 1 y sume todos los que sean primos.  Mostrará la suma por pantalla. Nota: La función que determine si un número es primo o no deberá estar en un fichero aparte llamado “funciones.php”<h4>Solución:</h4>

<?php


function sumar($numero) {
    $resultado = 0;
    for($posicion = $numero; $posicion > 1; $posicion--) {
        if(esprimo($posicion)) {
            $resultado += $posicion;
        }
    }
    return $resultado;
}

?>

<ul>
    <li>Suma de primos desde el 10 = <?php echo sumar(10) ?></li>
    <li>Suma de primos desde el 50 = <?php echo sumar(50) ?></li>
    <li>Suma de primos desde el 100 = <?php echo sumar(100) ?></li>
</ul>

</body>
</html>
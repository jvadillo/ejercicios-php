<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios PHP</title>
</head>
<body>
<h1>Soluciones de ejercicios PHP</h1>
<h2>Tema 1: Introducción a PHP</h2>
<h3>Ejercicio 22</h3>
<h4>Enunciado:</h4>
<p>
    22. Crea una aplicación que genere un array con 20 números aleatorios con valores entre 1 y 999, utilizando la función random_int(1, 999) para generar los valores. A continuación recorre el array utilizando la sentencia foreach y muestra por pantalla el valor más alto y el más bajo.
</p>

<?php

// Le pasamos el tamaño como argumento para que sea una función más reutilizable.
function generarArrayNumerosAleatorios($tamaño = 20){
    $numeros = [];
    for($i = 0; $i < $tamaño; $i++) {
        $numeros[$i] = random_int(1,999);
    }
    return $numeros;
}

function valorMasAlto($numeros) {
    $valor = $numeros[0];
    foreach ($numeros as $numero) {
        if($numero > $valor) {
            $valor = $numero;
        }
    }
    return $valor;
}

function valorMasBajo($numeros) {
    $valor = $numeros[0];
    foreach ($numeros as $numero) {
        if($numero < $valor) {
            $valor = $numero;
        }
    }
    return $valor;
}

$numeros = generarArrayNumerosAleatorios(20);

?>

<ul>
    <li>El array generado es: <?php echo implode(',',$numeros) ?></li>
    <li>El valor más bajo del array es <?php echo valorMasBajo($numeros) ?></li>
    <li>El valor más alto del array es <?php echo valorMasAlto($numeros) ?></li>
</ul>

</body>
</html>
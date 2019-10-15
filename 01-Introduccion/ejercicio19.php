<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios PHP</title>
</head>
<body>
<h1>Soluciones de ejercicios PHP</h1>
<h2>Tema 1: Introducción a PHP</h2>
<h3>Ejercicio 16</h3>
<h4>Enunciado:</h4>
<p>
    16. Modifica el ejercicio número 13 para obtener el mismo resultado empleando una estructura foreach.
</p>
<h4>Solución:</h4>

<?php


$notas = [
    "Amaia" => 6.5,
    "Ane" => 7.5,
    "Maite" => 5.2,
    "Lorea" => 9.1,
    "Markel" => 6.8,
    "Urtzi" => 8.4,
];

function imprimir($notas) {

    foreach ($notas as $nombre => $nota) {
        echo "<li>La nota media de {$nombre} es {$nota}</li>";
    }
}

?>

<ul>
    <?php imprimir($notas) ?>
</ul>

</body>
</html>
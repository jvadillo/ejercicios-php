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
    19. Crea un array asociativo con el nombre de 6 estudiantes y la nota media de cada uno. Recorre el array utilizando la estructura foreach y mostrando una lista con frases con la siguiente estructura: “La nota media de Julen es 6.8”.
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
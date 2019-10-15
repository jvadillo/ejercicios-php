<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios PHP</title>
</head>
<body>
<h1>Soluciones de ejercicios PHP</h1>
<h2>Tema 1: Introducción a PHP</h2>
<h3>Ejercicio 13</h3>
<h4>Enunciado:</h4>
<p>
    13. Crea un array con nombres de personas y una función que imprima por pantalla todos los nombres utilizando la sentencia while.
</p>
<h4>Solución:</h4>

<?php


$agenda = [
    0 => [
        "nombre" => "Amaia",
        "apellidos" => "Gorbea Jainaga",
        "telefono" => "945010101",
        "email" => "agorbea@php.net"
    ],
    1 => [
        "nombre" => "Ane",
        "apellidos" => "Larrain Ogeta",
        "telefono" => "945010101",
        "email" => "alarrain@php.net"
    ],
    2 => [
        "nombre" => "Maite",
        "apellidos" => "Murgiondo Lekue",
        "telefono" => "945010102",
        "email" => "mmurgiondo@php.net"
    ],
    3 => [
        "nombre" => "Lorea",
        "apellidos" => "Aranceta Otxoa",
        "telefono" => "945010102",
        "email" => "laranceta@php.net"
    ],
    4 => [
        "nombre" => "Markel",
        "apellidos" => "Gurrutxaga Abarra",
        "telefono" => "945010102",
        "email" => "mgurrutxaga@php.net"
    ],
    5 => [
        "nombre" => "Urtzi",
        "apellidos" => "Iriondo Baiona",
        "telefono" => "945010102",
        "email" => "uriondo@php.net"
    ]
];

function imprimir($agenda) {

    $posicion = 0;
    while($posicion < count($agenda)) {
        echo "<tr>";
        echo "<td>{$agenda[$posicion]['nombre']}</td>";
        echo "<td>{$agenda[$posicion]['apellidos']}</td>";
        echo "<td>{$agenda[$posicion]['telefono']}</td>";
        echo "<td>{$agenda[$posicion]['email']}</td>";
        echo "</tr>";
        $posicion++;
    }
}

?>

<ul>
    <table border="1">
        <thead>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Teléfono</th>
            <th>Email</th>
        </thead>
        <tbody>
            <?php imprimir($agenda) ?>
        </tbody>
    </table>
</ul>

</body>
</html>
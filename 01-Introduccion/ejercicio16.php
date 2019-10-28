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

// Estructura de datos
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

    foreach ($agenda as $clave => $contacto) {
        echo "<tr>
            <td>{$clave}</td>
            <td>{$contacto['nombre']}</td>
            <td>{$contacto['apellidos']}</td>
            <td>{$contacto['telefono']}</td>
            <td>{$contacto['email']}</td>
        </tr>";
    }
}

?>


<table border="1">
    <thead>
        <th>Clave</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Teléfono</th>
        <th>Email</th>
    </thead>
    <tbody>
        <?php imprimir($agenda) ?>
    </tbody>
</table>


</body>
</html>
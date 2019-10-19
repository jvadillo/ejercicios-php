<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios PHP</title>
</head>
<body>
<h1>Soluciones de ejercicios PHP</h1>
<h2>Tema 1: Introducción a PHP</h2>
<h3>Ejercicio 9</h3>
<h4>Enunciado:</h4>
<p>
    09. Crea un array multidimensional que almacene para cada usuario su nombre, apellidos e email. A continuación crea una función llamada “diccionario” que reciba el nombre de usuario, el dato a obtener (nombre/apellidos/email) y lo muestre por pantalla.
</p>

<h4>Solución:</h4>
<?php

$diccionario = [
    "user1" => [
        "nombre" => "Jon",
        "apellidos" => "Larrain Ogeta",
        "email" => "jlarrain@php.net"
    ],
    "user2" => [
        "nombre" => "Amaia",
        "apellidos" => "Arbizu Urarte",
        "email" => "aarbizu@php.net"
    ]
];


function getDatos($diccionario, $usuario, $tipoDato) {
    return $diccionario[$usuario][$tipoDato];
}

?>

<ul>
    <li>El nombre de user1 es: <?php echo getDatos($diccionario, "user1", "nombre") ?></li>
    <li>El apellido de user1 es: <?= getDatos($diccionario, "user1", "apellidos") ?></li>
    <li>El email de user1 es: <?= getDatos($diccionario, "user1", "email") ?></li>
    <li>El nombre de user2 es: <?= getDatos($diccionario, "user2", "nombre") ?></li>
    <li>El apellido de user2 es: <?= getDatos($diccionario, "user2", "apellidos") ?></li>
    <li>El email de user2 es: <?= getDatos($diccionario, "user2", "email") ?></li>
</ul>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios PHP</title>
</head>
<body>
<h1>Soluciones de ejercicios PHP</h1>
<h2>Tema 1: Introducción a PHP</h2>
<h3>Ejercicio 23</h3>
<h4>Enunciado:</h4>
<p>
    23. Crea un array asociativo que almacene los nombres de 4 estudiantes y las notas de dos exámenes. A continuación,
    crea de forma dinámica una tabla como la de la imagen utilizando los valores del array y la estructura de repetición
    que creas conveniente. Cuando la nota sea inferior a 5, esta deberá mostrarse en rojo.
</p>

<?php

$estudiantes = array(
    "Luis Scola" => [9, 8],
    "Pablo Prigioni" => [8, 4],
    "Sergi Vidal" => [7, 6],
    "Ramón Rivas" => [3.5, 6]
);
function crearFila($nombre, $nota1, $nota2)
{
    $estiloNota1 = "";
    $estiloNota2 = "";
    if ($nota1 > 5) {
        $estiloNota1 = "color: red";
    }
    if ($nota2 > 5) {
        $estiloNota2 = "color: red";
    }
    $notaMedia = $nota1 / $nota2;
    return "<tr>
        <td>{$nombre}</td>
        <td style='{$estiloNota1}'>{$nota1}</td>
        <td style='{$estiloNota2}'>{$nota2}</td>
        <td>{$notaMedia}</td>
    </tr>";
}

function crearFilas($estudiantes)
{
    foreach ($estudiantes as $nombre => $notas) {
        echo crearFila($nombre, $notas[0], $notas[1]);
    }
}

?>

<table border="1">
    <thead>
        <th>Nombre</th>
        <th>Nota 1</th>
        <th>Nota 2</th>
        <th>Nota media</th>
    </thead>
    <tbody>
    <?php crearFilas($estudiantes); ?>
    </tbody>
</table>

</body>
</html>
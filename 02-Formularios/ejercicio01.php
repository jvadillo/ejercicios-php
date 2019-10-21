<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicios PHP</title>
</head>
<body>
<h1>Soluciones de ejercicios PHP</h1>
<h2>Tema 2: Formularios</h2>
<h3>Ejercicio 1</h3>
<h4>Enunciado:</h4>
<p>
    01. Crea un convertidor de grados Celsius a Farenheit (y viceversa). La aplicación pedirá una cantidad al usuario y la unidad mediante un formulario. Una vez enviado, mostrará el resultado de la conversión realizada. El formulario siempre se mostrará, de forma que el usuario pueda seguir introduciendo valores.
</p>
<h4>Solución:</h4>

<?php

function convertirTemperatura($temperatura, $unidad) {
    if($unidad == 'celsius') {
        return round(1.8 * $temperatura + 32, 2);
    } else {
        return round(($temperatura - 32) / 1.8, 2);
    }
}


if (isset($_GET["temperatura"]) && isset($_GET["unidad"])) {
    $temperatura = $_GET["temperatura"];
    $unidad = $_GET["unidad"];
    $resultado = convertirTemperatura(intval($temperatura), $unidad);
?>
<p>
    <b>Resultado de la conversión (<?= $temperatura ?> <?= $unidad ?>): <?= $resultado ?></b>
</p>

<?php
}
?>

<form action="ejercicio01.php" method="GET">
    <p>
        <label for="temperatura">Introduce la temperatura:</label>
        <input type="temperatura" id="temperatura" name="temperatura" required>
    </p>
    <p>
        <label for="unidad">Indica la unidad de la temperatura introducida:</label>
        <select id="unidad" name="unidad" required>
            <option value="celsius">Celsius</option>
            <option value="farenheit">Farenheit</option>
        </select>
    </p>
    <p>
        <input type="submit" value="Enviar">
    </p>
</form>

</body>
</html>
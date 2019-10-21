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
<h3>Ejercicio 2</h3>
<h4>Enunciado:</h4>
<p>
    02. Crea una aplicación web que simule una calculadora. La calculadora estará representada por un formulario con dos campos numéricos y un desplegable para indicar la operación que se desea realizar (suma, resta, multiplicación o división). La aplicación deberá mostrar el resultado de la operación realizada.
</p>
<h4>Solución:</h4>
<h5>Calculadora</h5>

<?php

function realizarOperacion($operacion, $numero1, $numero2) {
    switch ($operacion) {
        case "suma":
            return $numero1+$numero2;
        case "resta":
            return $numero1-$numero2;
        case "multiplicacion":
            return $numero1*$numero2;
        case "division":
            if($numero2 != 0) {
                return $numero1/$numero2;
            } else {
                return "No es posible dividir entre cero";
            }
        default:
            return "Ha habido un error. Por favor, asegúrese de que introduce una operación válida.";
    }
}


if (isset($_GET["numero1"]) && isset($_GET["numero2"]) && isset($_GET["operacion"])) {
    $resultado = realizarOperacion($_GET["operacion"], intval($_GET["numero1"]), intval($_GET["numero2"]));
?>
<p>
    Último resultado: <?= $resultado ?>
</p>

<?php
}
?>

<form action="ejercicio02.php" method="GET">
    <p>
        <label for="numero1">Primer número:</label>
        <input type="number" id="numero1" name="numero1" required>
    </p>
    <p>
        <label for="numero2">Segundo número:</label>
        <input type="number" id="numero2" name="numero2" required>
    </p>
    <p>
        <label for="operacion">Seleccione la operación deseada:</label>
        <select id="operacion" name="operacion" required>
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select>
    </p>
    <p>
        <input type="submit" value="Enviar">
    </p>
</form>

</body>
</html>
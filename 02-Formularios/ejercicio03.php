<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios PHP</title>
</head>
<body>
<h1>Soluciones de ejercicios PHP</h1>
<h2>Tema 2: Formularios</h2>
<h3>Ejercicio 2</h3>
<h4>Enunciado:</h4>
<p>
    02. Crea un array con 20 números aleatorios entre el 1 y el 10. El usuario introducirá en el formulario
    un número y al darle a “Enviar” la aplicación comprobará cuántas veces aparece el número introducido en el array.
    En caso contrario mostrará el mensaje: “Inténtelo de nuevo”.
</p>
<h4>Solución:</h4>

<?php

function crearArrayNumeros($tamaño = 20){
    $listadoNumeros = [];
    for($i = 0; $i<$tamaño; $i++) {
        $listadoNumeros[$i] = random_int(1,10);
    }
    return $listadoNumeros;
}

function contarAparicionesEnArray($listadoNumeros, $numero){
    $contador = 0;
    foreach($listadoNumeros as $num) {
        if($num == $numero) {
            $contador++;
        }
    }
    return $contador;
}

/**
 * Comprobar si ya hemos creado el array de números anteriormente.
 * Si es así, asignamos el valor a la variable $listadoNumeros y contamos
 * la cantidad de veces que aparece el número enviado en el array.
 */
if(isset($_GET["numeros"])) {
    $listadoNumeros = explode(",", $_GET["numeros"]);
    $apariciones = contarAparicionesEnArray($listadoNumeros, intval($_GET["numero"]));
?>

<p>
    El número aparece <?= $apariciones ?> veces en el array.
</p>

<?php

} else { //Si es la primera vez, creamos el array de números:
    $listadoNumeros = crearArrayNumeros();
}
?>

<form action="ejercicio03.php" method="GET">
    <label for="numero">Introduce tu número: </label>
    <input id="numero" name="numero" type="number" required>
    <input type="hidden" name="numeros" value="<?=  implode(",", $listadoNumeros);?>">
    <input type="submit" value="¡Probar suerte!">
</form>

</body>
</html>
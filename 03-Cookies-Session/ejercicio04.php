<?php
// Iniciar o cargar sesión
session_start();

/*** FUNCIONES ***/
function inicializarLista(){
    if(!isset($_SESSION["listaPersonas"])){
        $_SESSION["listaPersonas"] = array();
    }
}

function realizarAccion($accion){
    switch ($accion) {
        case "insertar":
            if(isset($_GET["persona"])) {
                $nombrePersona = $_GET["persona"];
                array_push($_SESSION["listaPersonas"], $nombrePersona);
            }
            break;
        case "vaciar":
            unset($_SESSION["listaPersonas"]);
            break;
    }
}

function generarListaPersonas($personas){
    if($personas > 0) {
        echo "<ul>";
        foreach ($personas as $persona) {
            crearElementoLista($persona);
        }
        echo "</ul>";
    } else {
        echo "<p>No hay asistentes</p>";
    }
}

function crearElementoLista($texto){
    echo "<li>{$texto}</li>";
}

/*** INICIO DE LA APLICACION ***/

if(isset($_GET["accion"])) {
    $accion = $_GET["accion"];
    realizarAccion($accion);
}
inicializarLista();

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            padding: 15px;
        }
    </style>
</head>
<body>
<h1>Soluciones de ejercicios PHP</h1>
<h2>Tema 2: Formularios</h2>
<h3>Ejercicio 4</h3>
<h4>Enunciado:</h4>
<p>
    04. Crea  una  aplicación  de  control  de  asistencia para un evento.
    La aplicación tendrá que mostrar la lista de personas (el nombre de cada una) que
    han acudido al evento. Tendrá un campo de texto para escribir  el  nombre  de  la
    persona  y  así  añadir personas a la lista. La lista se almacenará en sesión, y
    existirá un botón que borre la lista completa
</p>
<h4>Solución:</h4>
<hr>

<h4>Lista de asistentes</h4>
<?php generarListaPersonas($_SESSION["listaPersonas"]) ?>
<br>
<h5>Añadir asistente</h5>
<form action="ejercicio04.php" method="get">
    <input type="text" name="persona">
    <input type="hidden" name="accion" value="insertar">
    <input type="submit" value="Añadir">
</form>
<br>
<a href="ejercicio04.php?accion=vaciar">Vaciar lista</a>
</body>
</html>
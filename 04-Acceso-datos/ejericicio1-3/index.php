<?php
require_once 'db_functions.php';

$db = connect();

// Comprobamos si el usuario a realizado alguna acción:
if(isset($_GET["accion"])) {
    $accion = $_GET["accion"];
    switch ($accion) {
        case 'insertar':
            $texto = $_GET["texto"];
            insert($db,$texto);
            break;
        case 'eliminar':
            $id = $_GET["id"];
            deleteById($db,$id);
            break;
        case 'vaciar':
            deleteAll($db);
    }
}

$items = getAll($db);

require "views/index.view.php";
?>



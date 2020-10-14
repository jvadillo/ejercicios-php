<?php
function concatenar($a, $b = "anónimo"){
    return $a.$b;

}

$textoA = $_GET["textoA"];
$textoB = $_GET["textoB"];
$frase = concatenar($textoA);

require "ejercicio11_.view.php";


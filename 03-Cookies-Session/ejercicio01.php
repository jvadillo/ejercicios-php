<?php

if(isset($_GET["texto"])) {
    setcookie("textoAlmacenado", $_GET["texto"]);
}

?>
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
<h2>Tema 3: Cookies y sesiones</h2>
<h3>Ejercicio 1</h3>
<h4>Enunciado:</h4>
<p>
    01. Crea una página que tenga un formulario con un textarea. La aplicación guardará en una cookie el texto introducido y mostrará el último valor almacenado siempre que la cookie contenga algún valor.
</p>
<h4>Solución:</h4>

<?php

if(isset($_COOKIE["textoAlmacenado"])) {
    echo "<p>Valor almacenado: " . $_COOKIE["textoAlmacenado"] . "</p>";
} else {
    echo "<p>No hay ningún valor almacenado</p>";
}
?>


<form action="ejercicio01.php" method="GET">
    <label for="texto">Introduce el texto que deseas almacenar: </label>
    <textarea name="texto" id="texto"></textarea>
    <input type="submit" value="Almacenar">
</form>


</body>
</html>
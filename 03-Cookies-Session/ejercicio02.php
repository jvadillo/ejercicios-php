<?php

if(isset($_GET["texto"])) {
    setcookie("usuario", $_GET["texto"]);
}

if(isset($_GET["accion"])&& $_GET["accion"] == 'borrarCookie') {
    setcookie("usuario", null, -1);
}

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios PHP</title>
</head>
<body>
<h1>Soluciones de ejercicios PHP</h1>
<h2>Tema 3: Cookies y sesiones</h2>
<h3>Ejercicio 2</h3>
<h4>Enunciado:</h4>
<p>
    02. Añade a la aplicación anterior un botón o enlace para borrar la cookie..
</p>
<h4>Solución:</h4>

<?php

if(isset($_COOKIE["usuario"])) {
    echo "<p>Usuario almacenado: " . $_COOKIE["usuario"] . "</p>";
} else {
    echo "<p>No hay ningún valor almacenado</p>";
}
?>

<form action="ejercicio02.php" method="GET">
    <label for="texto">Introduce el texto que deseas almacenar: </label>
    <input type="text" name="texto"></input>
    <input type="submit" value="Guardar">
</form>
<a href="ejercicio02.php?accion=borrarCookie">BORRAR COOKIE</a>


</body>
</html>
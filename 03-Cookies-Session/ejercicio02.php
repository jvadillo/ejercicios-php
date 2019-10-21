<?php

if(isset($_GET["texto"])) {
    setcookie("textoAlmacenado", $_GET["texto"]);
}

if(isset($_GET["accion"])&& $_GET["accion"] == 'borrarCookie') {
    setcookie("textoAlmacenado", null, -1);
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
<h3>Ejercicio 2</h3>
<h4>Enunciado:</h4>
<p>
    02. Añade a la aplicación anterior un botón o enlace para borrar la cookie..
</p>
<h4>Solución:</h4>

<?php

if(isset($_COOKIE["textoAlmacenado"])) {
    echo "<p>Valor almacenado: " . $_COOKIE["textoAlmacenado"] . "</p>";
} else {
    echo "<p>No hay ningún valor almacenado</p>";
}
?>

<form action="ejercicio02.php" method="GET">
    <P>
        <label for="texto">Introduce el texto que deseas almacenar: </label>
        <textarea name="texto" id="texto"></textarea>
    </P>
    <input type="submit" value="Almacenar">
</form>
<a href="ejercicio02.php?accion=borrarCookie">BORRAR COOKIE</a>


</body>
</html>
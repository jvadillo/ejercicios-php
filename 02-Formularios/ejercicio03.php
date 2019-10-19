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
<h3>Ejercicio 3</h3>
<h4>Enunciado:</h4>
<p>
    03. Crea una pantalla de login con dos campos: usuario y contraseña. El programa deberá validar los datos de acceso
    contra un diccionario de datos como el de la imagen. El programa deberá mostrar un mensaje de bienvenida con su
    nombre y apellidos en caso de que los datos sean correctos.
    También indicará si el usuario introducido no existe o si la contraseña introducida es incorrecta.
</p>
<h4>Solución:</h4>

<?php

$login = false;
$error = false;

$usuarios = array(
    "user1" => array(
        "nombre" => 'Ane',
        "apellidos" => 'López',
        "password" => '123Abc'
    ),
    "user2" => array(
        "nombre" => 'Amaia',
        "apellidos" => 'Otsoa',
        "password" => '456Xyz'
    )
);

if (isset($_POST["usuario"]) && isset($_POST["password"])) {
    $usuario = $_POST["usuario"];
    if (array_key_exists($usuario, $usuarios)) {
        if ($usuarios[$usuario]["password"] == $_POST["password"]) {
            $login = true;
        } else {
            $error = "La contraseña no es correcta.";
        }

    } else {
        $error = "El usuario no existe.";
    }
}

if ($login) {
    ?>

    <p>Bienvenid@, <?= $usuarios[$usuario]["nombre"] ?></p>

    <?php

} else {

    if ($error) {
        ?>
        <p style="color:red;"><?= $error ?></p>
        <?php
    }

    ?>

    <form action="./ejercicio03.php" method="post">
        <fieldset>
            <legend>Login</legend>
            <p>Introduce tu usuario y contraseña:</p>
            <p>
                <label for="usuario">Introduce el usuario:</label>
                <input type="text" id="usuario" name="usuario" required>
            </p>
            <p>
                <label for="password">Introduce la contraseña:</label>
                <input type="password" id="password" name="password" required>
            <p>
            <p>
                <input type="submit" value="Enviar">
            </p>
        </fieldset>
    </form>

    <?php
}
?>

</body>
</html>
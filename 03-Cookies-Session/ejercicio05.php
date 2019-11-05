<?php
session_start();

// Datos de acceso de los usuarios:
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

// Codigos de los errores. En función del error se muestra su mensaje correspondiente.
$ERROR_TYPES = [
    1 => "La contraseña no es correcta.",
    2 => "El usuario no existe."
];

/**
 * Devuelve 0 si el login es correcto, 1 si la contraseña es incorrecta o 2 si el usuario no existe.
 *
 * @param $usuario
 * @param $password
 * @param $usuarios
 * @return int
 */
function comprobarLogin($usuario, $password, $usuarios) {
    if (array_key_exists($usuario, $usuarios)) {
        if ($usuarios[$usuario]["password"] == $password) {
            $_SESSION["usuario"] = $usuario;
            return 0;
        } else {
            return 1;
        }
    } else {
        return 2;
    }
}

function mostrarFormulario(){
    echo "<form action='./ejercicio05.php' method='post'>
        <fieldset>
            <legend>Login</legend>
            <p>Introduce tu usuario y contraseña:</p>
            <p>
                <label for='usuario'>Introduce el usuario:</label>
                <input type='text' id='usuario' name='usuario' required>
            </p>
            <p>
                <label for='password'>Introduce la contraseña:</label>
                <input type='password' id='password' name='password' required>
            <p>
            <p>
                <input type='submit' value='Enviar'>
            </p>
        </fieldset>
    </form>";
}

if(!isset($_SESSION["login"]) || isset($_GET["accion"])) {
    $_SESSION["login"] = -1; // Utilizamos esta variable para almacenar el estado (login correcto, error)
    $_SESSION["usuario"] = "";
}

if (isset($_POST["usuario"]) && isset($_POST["password"])) {
    $_SESSION["login"] = comprobarLogin($_POST["usuario"], $_POST["password"], $usuarios);
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
<h2>Tema 2: Formularios</h2>
<h3>Ejercicio 5</h3>
<h4>Enunciado:</h4>
<p>
    05. Desarrolla una página de login con un formulario compuesto por los
    campos de usuario y contraseña. La aplicación no dejará continuar hasta
    que se inicie sesión con un nombre de usuario y contraseña correctos
    (a comprobar contra un array asociativo). Una vez el usuario haya accedido
    correctamente, en lugar del formulario de acceso la aplicación mostrará un mensaje
    de bienvenida y un enlace para cerrar sesión. Al hacer click en el enlace para
    cerrar sesión, la aplicación destruirá información de la sesión almacenada.
</p>
<h4>Solución:</h4>

<?php

// Si el usuario ha accedido correctamente, únicamente mostramos el mensaje de bienvenida:
if ($_SESSION["login"] == 0) {
    echo "<p>Bienvenid@, {$usuarios[$_SESSION['usuario']]['nombre']}</p>";
    echo "<a href='ejercicio05.php?accion=cerrar'>Cerrar sesión</a>";
} else {
    if($_SESSION["login"] != -1) {
        echo "<p style='color:red;'>{$ERROR_TYPES[$_SESSION['login']]}</p>";
    }
    mostrarFormulario();
}

?>

</body>
</html>
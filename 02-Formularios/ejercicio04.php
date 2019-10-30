<?php

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
            return 0;
        } else {
            return 1;
        }
    } else {
        return 2;
    }
}

function mostrarFormulario(){
    echo "<form action='./ejercicio04.php' method='post'>
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
<h3>Ejercicio 4</h3>
<h4>Enunciado:</h4>
<p>
    04. Crea una pantalla de login con dos campos: usuario y contraseña. El programa deberá validar los datos de acceso
    contra un diccionario de datos como el de la imagen. El programa deberá mostrar un mensaje de bienvenida con su
    nombre y apellidos en caso de que los datos sean correctos.
    También indicará si el usuario introducido no existe o si la contraseña introducida es incorrecta.
</p>
<h4>Solución:</h4>

<?php

$login = -1; // Utilizamos esta variable para almacenar el estado (login correcto, error)

if (isset($_POST["usuario"]) && isset($_POST["password"])) {
    $login = comprobarLogin($_POST["usuario"], $_POST["password"], $usuarios);
}

// Si el usuario ha accedido correctamente, únicamente mostramos el mensaje de bienvenida:
if ($login == 0) {
    echo "<p>Bienvenid@, {$usuarios[$_POST['usuario']]['nombre']}</p>";
} else {
    if($login != -1) {
        echo "<p style='color:red;'>{$ERROR_TYPES[$login]}</p>";
    }
    mostrarFormulario();
}

?>

</body>
</html>
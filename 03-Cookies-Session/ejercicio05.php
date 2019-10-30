<?php
require_once 'ejercicio05-datos.php';
session_start();

function inicializarCesta(){
    if(!isset($_SESSION["productosCesta"])){
        $_SESSION["productosCesta"] = array();
    }
}

inicializarCesta();

if(isset($_GET["idProducto"])) {
    $idProductoComprado = $_GET["idProducto"];
    array_push($_SESSION["productosCesta"], $idProductoComprado);
}

if(isset($_GET["accion"])) {
   unset($_SESSION["productosCesta"]);
}

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
<h3>Ejercicio 5</h3>
<h4>Enunciado:</h4>
<p>
    Desarrolla una tienda online con un catálogo de productos y un carrito de la compra.
    Cada producto tendrá la siguiente información: nombre, descripción y precio (puedes
    almacenar otra información extra que te sirva de ayuda, como un ID). Se podrán adquirir
    tantas unidades de cada producto como se desee (también podrá eliminarse un producto añadido
    o una unidad del mismo).
</p>
<h4>Solución:</h4>
<hr>
<?php
function generarCestaCompra($productosComprados, $catalogoProductos){
    if($productosComprados > 0) {
        $precioTotal = 0;
        echo "<ul>";
        foreach ($productosComprados as $idProducto) {
            //crearElementoCesta($key, $producto);
            crearElementoCesta($idProducto, $catalogoProductos);
            $precioTotal += $catalogoProductos[$idProducto]['precio'];
        }
        echo "</ul>";
        echo "<h5>Precio total: " . $precioTotal . "</h5>";
        echo "<a href='ejercicio05.php?accion=comprar' class='btn btn-primary'>Comprar</a>";
    }
}

function crearElementoCesta($idProducto, $catalogoProductos){
    echo "<li>{$catalogoProductos[$idProducto]['nombre']} </li>";
}

function generarTablaProductos($productos) {
    echo "
        <table class='table'>
            <thead>
                <tr><th>Nombre</th><th>Descripción</th><th>Precio</th><th>Cantidad</th></tr>
            </thead>
            <tbody>
    ";
    foreach ($productos as $id => $producto) {
        crearProducto($id, $producto);
    }
    echo "</tbody></table>";
}

function crearProducto($id, $producto) {
    echo "<tr>
            <td>{$producto['nombre']}</td>
            <td>{$producto['descripción']}</td>
            <td>{$producto['precio']}</td>
            <td><a href='ejercicio05.php?idProducto={$id}'>Comprar</a></td>
        </tr>";
}
?>

<h4>Cesta de la compra</h4>
<?php if(isset($_SESSION["productosCesta"])) {
    generarCestaCompra($_SESSION["productosCesta"], $productos);
} else {
    echo "No hay productos en la cesta";
}
?>
<h4 class="mt-4">Catálogo de productos</h4>
<?php generarTablaProductos($productos) ?>

</body>
</html>
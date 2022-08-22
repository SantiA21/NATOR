<?php
include('db.php');

session_start();

$sumatotal = $_GET['s'];
$idUsuario = $_SESSION['USUARIO'];

$sql = "SELECT *  FROM carrito_usuarios WHERE ID_PERSONA = '$idUsuario'";
$getUser = "SELECT * FROM personas WHERE USUARIO = '$idUsuario'";
$executeGet = mysqli_query($conexion, $getUser);
$rowUser = mysqli_fetch_array($executeGet);

$num = $rowUser['TELEFONO'];

$resultado2 = mysqli_query($conexion, $sql);
$resultado3 = mysqli_query($conexion, $sql);
$pedido = "";

while ($row = mysqli_fetch_array($resultado2)) {
    $cod = $row['CODIGO_PRODUCTO'];
    $getProduct = "SELECT * FROM productos WHERE ID = '$cod'";
    $resultadoGetProduct = mysqli_query($conexion, $getProduct);
    $rowGetRow = mysqli_fetch_array($resultado3);

    while ($rowProduct = mysqli_fetch_array($resultadoGetProduct)) {
        $pedido = $rowProduct['NOMBRE'] . " x " . $row['CANTIDAD'];
    }

    $sql2 = "INSERT INTO pedidos_carrito(CLIENTE, TELEFONO, PEDIDO, PRECIO, ESTADO) VALUES ('$idUsuario','$num','$pedido','$sumatotal','PENDIENTE')";
    $execute = mysqli_query($conexion, $sql2);
}


$consulta = "DELETE FROM carrito_usuarios WHERE ID_PERSONA = '$idUsuario'";
$resultado = mysqli_query($conexion, $consulta);

header("location:OrderPlaced.php");

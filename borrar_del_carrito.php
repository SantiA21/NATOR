<?php

include('db.php');

$idProducto = $_GET["ID"];

$sql = "SELECT * FROM carrito_usuarios WHERE CODIGO_PRODUCTO = '$idProducto'";
$consulta = mysqli_query($conexion, $sql);
$row = mysqli_fetch_array($consulta);

if ($row['CANTIDAD'] == 1) {
    $consulta2 = "DELETE FROM carrito_usuarios WHERE CODIGO_PRODUCTO = '$idProducto'";
    $resultado = mysqli_query($conexion, $consulta2);
} else {
    $cantidad = $row['CANTIDAD'];
    $cantidad_disminuida = $cantidad - 1;
    $sql2 = "UPDATE carrito_usuarios SET CANTIDAD = '$cantidad_disminuida' WHERE CODIGO_PRODUCTO = '$idProducto'";
    $consulta2 = mysqli_query($conexion, $sql2);
}

header("location:shoppingCart.php#tu-compra");

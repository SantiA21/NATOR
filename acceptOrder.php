<?php
include('db.php');

$id = $_GET["ID"];
session_start();


$consulta = "DELETE FROM pedidos_carrito WHERE ID = '$id' ";
$resultado = mysqli_query($conexion, $consulta);
header("Location:allOrders.php");
?>

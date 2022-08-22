<?php
include('db.php');

$id = $_GET["ID"];

$consulta = "DELETE FROM productos WHERE ID = '$id'";
$resultado = mysqli_query($conexion, $consulta);

header("Location:products.php#hero");

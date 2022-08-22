<?php
include('db.php');

$id = $_GET["id"];

$consulta = "DELETE FROM personas WHERE ID = '$id'";
$resultado = mysqli_query($conexion, $consulta);

header("Location:employeesAdmin.php#hero");

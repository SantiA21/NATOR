<?php
include('db.php');

$id = $_GET["ID"];
session_start();
$usuario = $_SESSION['USUARIO'];


$consulta = "UPDATE peticiones_muebles SET ESTADO = 'ACTIVA', EMPLEADO = '$usuario' WHERE ID = '$id' ";
$resultado = mysqli_query($conexion, $consulta);

?>

<script type="text/javascript">
    window.location.href = 'allRequest.php#awaiting-requests'
    alert("La solicitud que seleccionaste ha sido activada")
</script>
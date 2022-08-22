<?php
include('db.php');

$id = $_GET["ID"];

$consulta = "UPDATE peticiones_muebles SET ESTADO = '', EMPLEADO = '' WHERE ID = $id ";
$resultado = mysqli_query($conexion, $consulta);

?>
<script type="text/javascript">
    window.location.href = 'activeRequests.php#awaiting-requests'
    alert("La solicitud ha sido eliminada de sus solicitudes activas")
</script>

<?php
include("db.php");

if (isset($_POST['pedido_button'])) {
    if (strlen($_POST['info']) >= 20) {

        session_start();

        $usuario = $_SESSION['USUARIO'];
        $info = $_POST['info'];

        $consulta = "INSERT INTO peticiones_muebles(USUARIO, INFO) VALUES ('$usuario','$info')";

        $resultado = mysqli_query($conexion, $consulta);
        echo mysqli_error($conexion);

        if ($resultado) {
?>
            <script type="text/javascript">
                function alerta_info_enviada();
            </script>
        <?php
            header("Location:OrderPlaced.php");
        } else {
        ?>
            <script type="text/javascript">
                window.location.href = 'customerOrders.php'
                alert("Hubo un error al realizar la peticion. Vuelve a intentarlo")
            </script>
        <?php
        }
    } else {
        ?>
        <script type="text/javascript">
            window.location.href = 'customerOrders.php'
            alert("Debe tener mas de 20 caracteres su peticion")
        </script>
<?php
    }
}

mysqli_close($conexion);
?>
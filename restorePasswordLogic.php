<?php
include("db.php");
include("sendEmailRecover.php");
if (isset($_POST['recuperar'])) {
    if (strlen($_POST['contraseñaNueva']) >= 1) {
        $contrasenia =  md5($_POST['contraseñaNueva']);

        session_start();

        $EmailSession = $_SESSION['emailColocadoParaRecuperar'];

        $consulta2 = "UPDATE personas SET CONTRASEÑA='$contrasenia' WHERE EMAIL = '$EmailSession'";
        $resultado2 = mysqli_query($conexion, $consulta2);

        if ($resultado2) {

?>
            <script type="text/javascript">
                function alerta_restaurar_contraseña();
            </script>
        <?php
            header("Location:https://natorfurtniture.000webhostapp.com/login.php");
        } else {
        ?>
            <script type="text/javascript">
                function alerta_error_restaurar_contraseña();
            </script>
<?php
            header("Location:https://natorfurtniture.000webhostapp.com/restorePw.php");
            echo mysqli_error($conexion);
        }

        mysqli_close($conexion);
    }
}

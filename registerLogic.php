<?php
include("db.php");


if (isset($_POST['enviar'])) {
    if (strlen($_POST['usuario']) >= 1 && strlen($_POST['contraseña']) >= 1 && strlen($_POST['email']) >= 1) {

        $usuario = $_POST['usuario'];
        $contrasenia = $_POST['contraseña'];
        $email = $_POST['email'];
        $rol = "CLIENTE";
        $codigo = $_POST['codigoArea'];
        $telefono = $_POST['phone'];
        $compras_realizadas = 0;
        $compras_pendientes = 0;
        $telefonoYCodigo = $codigo . $telefono;


        function buscaRepetido($usuario, $email)
        {
            include("db.php");
            $consulta1 = "SELECT * from personas where USUARIO = '$usuario' or EMAIL='$email'";
            $resultado1 = mysqli_query($conexion, $consulta1);
            if (mysqli_num_rows($resultado1) > 0) {
                return 1;
            } else {
                return 0;
            }
        }

        if (buscaRepetido($usuario, $email) == 1) {
?>

            <?php
            header("Location:register.php"); /*Resolver este location*/

        } else {

            $consulta2 = "INSERT INTO personas (ROL, USUARIO, CONTRASEÑA, TELEFONO, EMAIL, COMPRAS_REALIZADAS,COMPRAS_PENDIENTES) VALUES ('$rol','$usuario','$contrasenia','$telefonoYCodigo','$email','$compras_realizadas','$compras_pendientes')";
            $resultado2 = mysqli_query($conexion, $consulta2);

            if ($resultado2) {

            ?>
            <script type="text/javascript">
                function alerta_usuario_creado();
            </script>
            <?php
                header("Location:login.php");
            } else {
            ?>
            <script type="text/javascript">
                function alerta_error_crear_usuario();
            </script>
<?php
                echo mysqli_error($conexion);
            }

            mysqli_close($conexion);
        }
    }
}

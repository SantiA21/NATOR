<?php

include("db.php");
if (isset($_POST['enviar'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['usuario']) >= 1 && strlen($_POST['password']) >= 1) {

        $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
        $nombre = $_POST['nombre'];
        $usuario = $_POST['usuario'];
        $email = $_POST['email'];
        $numero = $_POST['numero'];
        $password = $_POST['password'];
        $ROL = "EMPLEADO";
        $ventas_realizadas = 0;
        $ventas_pendientes = 0;

        $consulta2 = "INSERT INTO personas (ROL,IMAGEN_PERFIL,NOMBRE, USUARIO, CONTRASEÑA, TELEFONO, EMAIL, VENTAS_REALIZADAS,VENTAS_PENDIENTES) VALUES ('$ROL','$imagen','$nombre','$usuario','$password','$numero','$email','$ventas_realizadas','$ventas_pendientes')";
        $resultado2 = mysqli_query($conexion, $consulta2);

        if ($resultado2) {
?>
            <script type="text/javascript">
                window.location.href='employees.php'
                alert("Empleado Guardado")
            </script>
        <?php

        } else {
        ?>
            <script type="text/javascript">
                function alerta_error_crear_usuario();
            </script>
<?php
            echo mysqli_error($conexion);
        }
    }
}

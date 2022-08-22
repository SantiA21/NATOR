<?php
include("db.php");
if (isset($_POST['enviar'])) {
    $id = $_GET["ID"];

    if (empty($_FILES['input-file']['tmp_name'])) {
        $consulta1 = "SELECT * FROM personas WHERE ID = '$id'";
        $resultado1 = mysqli_query($conexion, $consulta1);
        $row = mysqli_fetch_array($resultado1);
        $img = addslashes($row['IMAGEN_PERFIL']);
    } else {
        #si seleccionaste, guarda la nueva en $img
        $img = addslashes(file_get_contents($_FILES['input-file']['tmp_name']));
    }

    #asigno variables con la info que me pasaron los value por defecto
    $user = $_POST['input-user'];
    $email = $_POST['input-email'];
    #estos echo son para hacer pruebas a ver si me pasaba bien los datos y si lo hace
    $telef = $_POST['input-telef'];

    $consulta = "UPDATE `personas` SET `IMAGEN_PERFIL`='$img',`USUARIO`='$user',`EMAIL`='$email',`TELEFONO`='$telef' WHERE ID = $id";

    $resultado = mysqli_query($conexion, $consulta);

    echo mysqli_error($conexion);


?>
    <script type="text/javascript">
        window.location.href = 'myAccount.php';
        alert("Datos modificados");
    </script>
<?php
}

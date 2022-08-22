<?php

include("db.php");
if (isset($_POST['enviar'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['descripcion']) >= 1 && strlen($_POST['precio']) >= 1) {

        $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $altura = $_POST['altura'];
        $anchura = $_POST['anchura'];
        $profundidad = $_POST['profundidad'];
        $precio = $_POST['precio'];
        $codigo = strval($nombre . $precio);

        $consulta2 = "INSERT INTO productos (CODIGO,NOMBRE,IMAGEN,DESCRIPCION,ALTO,ANCHO,PROFUNDO,PRECIO) VALUES ('$codigo','$nombre','$imagen','$descripcion','$altura','$anchura','$profundidad','$precio')";
        $resultado2 = mysqli_query($conexion, $consulta2);

        if ($resultado2) {
?>
            <script type="text/javascript">
                window.location.href = 'loadProduct.php'
                alert("Producto Guardado")
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

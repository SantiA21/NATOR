    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <div class="modal fade" id="miModal" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Bienvenido a mi sitio</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia odio ut quos eos exercitationem, id a obcaecati, officia tenetur incidunt fugiat dolores odit quam modi! Sit alias obcaecati ipsam et!
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <?php
    #esto trabaja con el formulario que hay en functions.php en la funcion MostrarProductoById linea 466

    #Esta es la funcion de editar producto logre que cambie la imagen pero a la hora de cambiar
    #otro dato te tira el error que marque en la linea 38

    include("db.php");
    if (isset($_POST['enviar'])) {
        $id = $_GET["ID"];
        $cod = $_GET['cod'];

        #Si no le envias contenido en el input file, selecciona la imagen anterior y la guarda para 
        #updatear la consulta con la imagen que ya tenia ya que no seleccionaste una nueva para cambiar
        if (empty($_FILES['input-file']['tmp_name'])) {
            $consulta1 = "SELECT * FROM productos WHERE ID = '$id'";
            $resultado1 = mysqli_query($conexion, $consulta1);
            $row = mysqli_fetch_array($resultado1);
            $img = addslashes($row['IMAGEN']);
        } else {
            #si seleccionaste, guarda la nueva en $img
            $img = addslashes(file_get_contents($_FILES['input-file']['tmp_name']));
        }

        #asigno variables con la info que me pasaron los value por defecto
        $name = $_POST['input-name'];
        $desc = $_POST['input-desc'];
        #estos echo son para hacer pruebas a ver si me pasaba bien los datos y si lo hace
        $precio = $_POST['input-precio'];
        $alto = $_POST['input-alto'];
        $ancho = $_POST['input-ancho'];
        $prof = $_POST['input-prof'];

        $consulta = "UPDATE `productos` SET `ID`='$id',`CODIGO`='$cod',`NOMBRE`='$name',`IMAGEN`='$img',`DESCRIPCION`='$desc',`ALTO`='$alto',`ANCHO`='$ancho',`PROFUNDO`='$prof',`PRECIO`='$precio' WHERE ID = $id";

        $resultado = mysqli_query($conexion, $consulta);

        echo mysqli_error($conexion);



    ?>
        <script type="text/javascript">
            window.location.href = 'products.php'
            alert("producto modificado")
        </script>
    <?php
    }

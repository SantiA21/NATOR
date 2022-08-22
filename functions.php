<?php

function navbar()
{
?>
    <div class="wave-container">
        <div class="nav-bar">
            <a href="index.php"><img class="logo" src="img/logo-white.png" width="200" heigth="100" alt="logo"></a>
            <nav>

                <a href="index.php">Home</a>
                <a href="contact.php">Contactanos</a>
                <a href="productsShop.php">Productos</a>
                <a href="shoppingCart.php"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                    </svg>Mi Carrito</a>
                <a href="myAccount.php"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg> Mi cuenta</a>
                <a href="logout.php"><button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                        </svg></button></a>
            </nav>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1" d="M0,160L60,176C120,192,240,224,360,240C480,256,600,256,720,229.3C840,203,960,149,1080,149.3C1200,149,1320,203,1380,229.3L1440,256L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
        </svg>
    </div>
<?php
}
?>

<?php

function navbarAdmin()
{
?>
    <div class="wave-container">
        <div class="nav-bar">
            <a href="indexAdmin.php"><img class="logo" src="img/logo-white.png" width="200" heigth="100" alt="logo"></a>
            <nav>

                <a href="indexAdmin.php">Home</a>
                <a href="employeesAdmin.php">Empleados</a>
                <a href="products.php">Productos</a>
                <a href="logout.php"><button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                        </svg></button></a>
            </nav>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1" d="M0,160L60,176C120,192,240,224,360,240C480,256,600,256,720,229.3C840,203,960,149,1080,149.3C1200,149,1320,203,1380,229.3L1440,256L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
        </svg>
    </div>


<?php
}
?>

<?php

function navbarEmployees()
{
?>
    <div class="wave-container">
        <div class="nav-bar">
            <a href="indexEmployees.php"><img class="logo" src="img/logo-white.png" width="200" heigth="100" alt="logo"></a>
            <nav>

                <a href="indexEmployees.php">Home</a>
                <a href="products.php">Productos</a>
                <a href="logout.php"><button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                        </svg></button></a>
            </nav>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1" d="M0,160L60,176C120,192,240,224,360,240C480,256,600,256,720,229.3C840,203,960,149,1080,149.3C1200,149,1320,203,1380,229.3L1440,256L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
        </svg>
    </div>


<?php
}
?>

<!--------------------------RECOVER INFO PERSON---------------------------->

<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
#Aca traigo informacion de la bdd basandome en la variable de sesion 'usuario' que creo cuando
#inicia sesion y gestiono las variables con su informacion para utilizarla
include('db.php');
session_start();
$usuario = $_SESSION['USUARIO'];
$contraseña = $_SESSION['CONTRASEÑA'];

$sql = "SELECT * FROM personas WHERE USUARIO='$usuario'";

$resultado = mysqli_query($conexion, $sql);
$row = mysqli_fetch_array($resultado);

$ID = $row['ID'];

$_SESSION['ID'] = $ID;
$USUARIO = $row['USUARIO'];
$EMAIL = $row['EMAIL'];
$TELEFONO = $row['TELEFONO'];
$COMPRAS_REALIZADAS = $row['COMPRAS_REALIZADAS'];
$COMPRAS_PENDIENTES = $row['COMPRAS_PENDIENTES'];
$CONTRASEÑA = $contraseña;

?>



<!--------------------------RECOVER EMPLOYEES---------------------------->

<?php
include('db.php');
$totalEmpleados = 0;

$sql = "SELECT * FROM personas WHERE ROL = 'EMPLEADO'";

$resultado2 = mysqli_query($conexion, $sql);
$resultado = mysqli_query($conexion, $sql);

$row = mysqli_fetch_array($resultado2);


if (empty($row)) {
    $totalEmpleados = 0;
} else {
    while ($row = mysqli_fetch_array($resultado)) {
        $totalEmpleados++;
    }
}
function mostrarEmpleadosInfo()
{
    include('db.php');
?>

    <script>
        function asegurar() {
            rc = confirm("¿Seguro que desea Eliminar?");
            return rc;
        }
    </script>

    <?php
    $sql = "SELECT * FROM personas WHERE ROL = 'EMPLEADO'";

    $resultado2 = mysqli_query($conexion, $sql);
    $resultado = mysqli_query($conexion, $sql);

    $row = mysqli_fetch_array($resultado2);


    if (empty($row)) {
    ?>
        <h2>¡Todavia no tienes empleados! Carga uno para empezar =)</h2>

        <?php
    } else {
        while ($row = mysqli_fetch_array($resultado)) {
        ?>
            <div class="div-empleados">
                <h7><?php echo $row['ID']; ?></h7>
                <div class="img-empleados">
                    <img heigth="120px" width="120px" src="data:image/jpg;base64, <?php echo base64_encode($row['IMAGEN_PERFIL']) ?>" />
                </div>
                <div class="tarjeta-empleado">
                    <div class="nombre-empleado">
                        <div class="Nombre">
                            <h2><?php echo $row['NOMBRE']; ?><br></h2>
                            <p>Trabaja desde <?php echo $row['FECHA_ALTA']; ?></p>
                        </div>
                    </div>
                    <div class="div-info-empleado">
                        <h6>Usuario <?php echo $row['USUARIO']; ?></h6>
                        <div class="ventas-hechas-empleado">
                            <h6>Ventas totales&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6><span><?php echo $row['VENTAS_REALIZADAS']; ?></span>
                        </div>
                        <div class="info-empleado">
                            <h6>Ventas pendientes&nbsp;&nbsp;</h6><span><?php echo $row['VENTAS_PENDIENTES']; ?></span>
                        </div>

                    </div>
                    <a href="deleteEmployeesBDD.php?id=<?php echo $row['ID'] ?>"><button onclick="javascript:return asegurar();"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-x-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6.146-2.854a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z" />
                            </svg></button></a>
                </div>
            </div>

<?php
        }
    }
}
?>

<?php
function mostrarEmpleados()
{
    include('db.php');
?>

    <?php

    $sql = "SELECT * FROM personas WHERE ROL = 'EMPLEADO'";
    $resultado2 = mysqli_query($conexion, $sql);
    $resultado = mysqli_query($conexion, $sql);
    $row = mysqli_fetch_array($resultado2);
    if (empty($row)) {
    ?>
        <h2>¡Todavia no tienes empleados! Carga uno para empezar =)</h2>

        <?php
    } else {
        while ($row = mysqli_fetch_array($resultado)) {


        ?>
            <div class="div-empleados">
                <h7><?php echo $row['ID']; ?></h7>
                <div class="img-empleados">
                    <img heigth="120px" width="120px" src="data:image/jpg;base64, <?php echo base64_encode($row['IMAGEN_PERFIL']) ?>" />
                </div>
                <div class="tarjeta-empleado">
                    <div class="nombre-empleado">
                        <div class="Nombre">
                            <h2><?php echo $row['NOMBRE']; ?><br></h2>
                        </div>
                    </div>
                </div>
            </div>

    <?php
        }
    }
}

function mostrarXEmpleados($cant)
{
    include('db.php');
    ?>

    <?php

    $sql = "SELECT * FROM personas WHERE ROL = 'EMPLEADO'";
    $resultado2 = mysqli_query($conexion, $sql);
    $resultado = mysqli_query($conexion, $sql);
    $row = mysqli_fetch_array($resultado2);
    if (empty($row)) {
    ?>
        <h2>¡Todavia no tienes empleados! Carga uno para empezar =)</h2>

        <?php
    } else {
        for ($i = 1; $i <= $cant; $i++) {
            $row = mysqli_fetch_array($resultado)

        ?>
            <div class="div-empleados">
                <h7><?php echo $row['ID']; ?></h7>
                <div class="img-empleados">
                    <img heigth="120px" width="120px" src="data:image/jpg;base64, <?php echo base64_encode($row['IMAGEN_PERFIL']) ?>" />
                </div>
                <div class="tarjeta-empleado">
                    <div class="nombre-empleado">
                        <div class="Nombre">
                            <h2><?php echo $row['NOMBRE']; ?><br></h2>
                        </div>
                    </div>
                </div>
            </div>

<?php
        }
    }
}
?>


<!--------------------------RECOVER PRODUCTS---------------------------->

<?php

$totalProductos = 0;

include('db.php');
?>

<script>
    function asegurar() {
        rc = confirm("¿Seguro que desea Eliminar?");
        return rc;
    }
</script>

<?php

include('db.php');
$sql = "SELECT USUARIO, INFO FROM peticiones_muebles";

$resultado2 = mysqli_query($conexion, $sql);
$resultado = mysqli_query($conexion, $sql);

$row = mysqli_fetch_array($resultado2);

if (empty($row)) {
    $totalProductos = 0;
} else {
    while ($row = mysqli_fetch_array($resultado)) {
        $totalProductos++;
    }
}

function mostrarProductosInfo()
{
    include('db.php');
    $sql = "SELECT * FROM productos";

    $resultado2 = mysqli_query($conexion, $sql);
    $resultado = mysqli_query($conexion, $sql);

    $row = mysqli_fetch_array($resultado2);

    if (empty($row)) {
?>
        <h2>¡Todavia no tienes productos! Carga uno para empezar =)</h2>

        <?php
    } else {
        while ($row = mysqli_fetch_array($resultado)) {
        ?>
            <div class="div-producto">
                <div class="img-producto">
                    <img heigth="120px" width="120px" src="data:image/jpg;base64, <?php echo base64_encode($row['IMAGEN']) ?>" />
                </div>
                <div class="tarjeta-producto">
                    <div class="nombre-producto">
                        <div class="Nombre">
                            <h2><?php echo $row['NOMBRE']; ?><br></h2>
                        </div>
                    </div>
                </div>
                <div class="precio-producto">
                    <h6>$ <?php echo number_format($row['PRECIO'], 2) ?>
                        <a href="deleteProductsBDD.php?ID=<?php echo $row['ID'] ?>"><button onclick="javascript:return asegurar();"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                </svg></button></a>
                        <a href="editProducts.php?ID=<?php echo $row['ID'] ?>#hero"><button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg></button></a>
                    </h6>
                </div>

            </div>


<?php
        }
    }
}
?>

<?php
function mostrarProductos()
{
    include('db.php');
?>

    <script>
        function asegurar() {
            rc = confirm("¿Seguro que desea Eliminar?");
            return rc;
        }
    </script>

    <?php

    $sql = "SELECT * FROM productos";
    $resultado2 = mysqli_query($conexion, $sql);
    $resultado = mysqli_query($conexion, $sql);
    $row = mysqli_fetch_array($resultado2);
    if (empty($row)) {
    ?>
        <h2>¡Todavia no tienes productos! Carga uno para empezar =)</h2>

        <?php
    } else {

        for ($i = 1; $i <= 4; $i++) {
            $row = mysqli_fetch_array($resultado)
        ?>
            <div class="div-producto">
                <div class="img-producto">
                    <a href="productSelected.php?ID=<?php echo $row['ID'] ?>"><img heigth="120px" width="120px" src="data:image/jpg;base64, <?php echo base64_encode($row['IMAGEN']) ?>" /></a>
                </div>
                <div class="tarjeta-producto">
                    <div class="nombre-producto">
                        <div class="Nombre">
                            <h4><?php echo $row['NOMBRE']; ?><br></h4>
                        </div>
                        <div class="Precio">
                            <h6>$<?php echo number_format($row['PRECIO'], 2); ?><br></h6>
                        </div>
                    </div>
                </div>
            </div>

    <?php

        }
    }
}

function mostrarProductosShop()
{
    include('db.php');
    ?>

    <script>
        function asegurar() {
            rc = confirm("¿Seguro que desea Eliminar?");
            return rc;
        }
    </script>

    <?php

    $sql = "SELECT * FROM productos";
    $resultado2 = mysqli_query($conexion, $sql);
    $resultado = mysqli_query($conexion, $sql);
    $row = mysqli_fetch_array($resultado2);
    if (empty($row)) {
    ?>
        <h2>No hay productos en stock. Vuelve a intentarlo mas tarde.</h2>

        <?php
    } else {

        while ($row = mysqli_fetch_array($resultado)) {
        ?>
            <div class="div-producto">

                <div class="img-producto">
                    <a href="productSelected.php?ID=<?php echo $row['ID'] ?>"><img heigth="120px" width="120px" src="data:image/jpg;base64, <?php echo base64_encode($row['IMAGEN']) ?>" /></a>
                </div>
                <div class="tarjeta-producto">
                    <div class="nombre-producto">
                        <div class="Nombre">
                            <h4><?php echo $row['NOMBRE']; ?><br></h4>
                        </div>
                        <div class="Precio">
                            <h6>$<?php echo number_format($row['PRECIO'], 2); ?><br></h6>
                        </div>

                        <form action="agregar_al_carrito.php" method="post">
                            <input type="hidden" name="id_producto" value="<?php echo $row['ID'] ?>">
                            <div class="">
                                <a href=""><button class="card-button"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                            <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                        </svg></button></a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        <?php

        }
    }
}



function mostrarProductosNombrePrecio()
{
    include('db.php');

    $sql = "SELECT * FROM productos";
    $resultado2 = mysqli_query($conexion, $sql);
    $resultado = mysqli_query($conexion, $sql);
    $row = mysqli_fetch_array($resultado2);
    if (empty($row)) {
        ?>
        <h2>¡Todavia no tienes productos! Carga uno para empezar =)</h2>

        <?php
    } else {

        while ($row = mysqli_fetch_array($resultado)) {

        ?>
            <div class="div-producto">
                <form action="agregar_al_carrito.php" method="post">
                    <input type="hidden" name="id_producto" value="<?php echo $row['ID'] ?>">
                    <div class="button-addCart">
                        <a href=""><button><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                    <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                </svg></button></a>
                    </div>
                </form>
                <div class="img-producto">
                    <img src="data:image/jpg;base64, <?php echo base64_encode($row['IMAGEN']) ?>" />
                </div>
                <div class="tarjeta-producto">
                    <div class="nombre-producto">
                        <div class="Nombre">
                            <h4><?php echo $row['NOMBRE']; ?><br></h4>
                        </div>
                        <div class="Precio">
                            <h6>$<?php echo number_format($row['PRECIO'], 2); ?><br></h6>
                        </div>
                    </div>
                </div>
            </div>

<?php

        }
    }
}
?>

<?php
function mostrarProductosImg()
{
    include('db.php');

    $sql = "SELECT * FROM productos";
    $resultado2 = mysqli_query($conexion, $sql);
    $resultado = mysqli_query($conexion, $sql);
    $row = mysqli_fetch_array($resultado2);
    if (empty($row)) {
?>
        <h2>No hay productos en stock. Vuelve a intentarlo mas tarde.</h2>

        <?php
    } else {
        for ($i = 1; $i <= 3; $i++) {
            $row = mysqli_fetch_array($resultado)

        ?>
            <div class="div-producto">
                <div class="img-producto">
                    <a href="productSelected.php?ID=<?php echo $row['ID'] ?>"><img src="data:image/jpg;base64, <?php echo base64_encode($row['IMAGEN']) ?>" /></a>
                </div>
                <div class="tarjeta-producto">
                    <div class="nombre-producto">
                        <div class="Nombre">
                            <h4><?php echo $row['NOMBRE']; ?><br></h4>
                        </div>
                        <div class="Precio">
                            <h6>$<?php echo number_format($row['PRECIO'], 2); ?><br></h6>
                        </div>

                        <form action="agregar_al_carrito.php" method="post">
                            <input type="hidden" name="id_producto" value="<?php echo $row['ID'] ?>">
                            <div class="">
                                <a href=""><button class="card-button"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                            <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                        </svg></button></a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        <?php

        } ?>

    <?php
    }
}

function mostrarProductoById($id)
{
    include('db.php');
    $sql = "SELECT * FROM productos WHERE ID='$id'";
    $resultado = mysqli_query($conexion, $sql);

    if (empty($resultado)) {
    ?>
        <h2>No hay productos seleccionados para editar =(</h2>
        <?php
    } else {
        while ($row = mysqli_fetch_array($resultado)) {
        ?>
            <div class="div-producto">
                <form id="form-product" action="save.php?ID=<?php echo $id ?>&cod=<?php echo $row['CODIGO'] ?>" method="POST" enctype="multipart/form-data">
                    <div class="img-producto">
                        <img src="data:image/jpg;base64, <?php echo base64_encode($row['IMAGEN']) ?>" />
                        <div class="editar-img-producto"><a href="javascript:document.getElementById('input-file').style.display='inline';document.getElementById('ocultar-file').style.display='inline';void 0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg></a></h6>
                            <input type="file" name="input-file" id="input-file" value="">

                            <a id="ocultar-file" href="javascript:document.getElementById('input-file').style.display='none';document.getElementById('ocultar-file').style.display='none';document.getElementById('form-product').reset();void 0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                </svg></a>
                        </div>
                    </div>
            </div>

            <div class="div-info-producto">
                <div class="info-producto">
                    <h1><?php echo $row['NOMBRE'] ?><a href="javascript:document.getElementById('input-name').style.display='inline';document.getElementById('ocultar-name').style.display='inline';void 0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg></a></h6>
                        <input type="text" maxlength="50" value="<?php echo $row['NOMBRE'] ?>" name="input-name" id="input-name" required>

                        <a id="ocultar-name" href="javascript:document.getElementById('input-name').style.display='none';document.getElementById('ocultar-name').style.display='none';document.getElementById('form-product').reset();void 0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                            </svg></a>
                    </h1>
                </div>
                <div class="info-producto">
                    <h5><?php echo $row['DESCRIPCION'] ?><a href="javascript:document.getElementById('input-desc').style.display='inline';document.getElementById('ocultar-desc').style.display='inline';void 0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg></a></h6>
                        <input type="text" maxlength="500" value="<?php echo $row['DESCRIPCION'] ?>" name="input-desc" id="input-desc" required>
                        <a id="ocultar-desc" href="javascript:document.getElementById('input-desc').style.display='none';document.getElementById('ocultar-desc').style.display='none';document.getElementById('form-product').reset();void 0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                            </svg></a>
                    </h5>
                </div>
                <div class="info-producto">
                    <h5>$<?php echo $row['PRECIO'] ?><a href="javascript:document.getElementById('input-precio').style.display='inline';document.getElementById('ocultar-precio').style.display='inline';void 0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg></a></h6>
                        <input type="number" maxlength="30" value="<?php echo $row['PRECIO'] ?>" name="input-precio" id="input-precio" required>
                        <a id="ocultar-precio" href="javascript:document.getElementById('input-precio').style.display='none';document.getElementById('ocultar-precio').style.display='none';document.getElementById('form-product').reset();void 0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                            </svg></a>
                </div>
                <div class="info-producto">
                    <h6>Alto: <?php echo $row['ALTO'] ?><a href="javascript:document.getElementById('input-alto').style.display='inline';document.getElementById('ocultar-alto').style.display='inline';void 0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg></a></h6>
                    <input type="text" maxlength="10" required name="input-alto" value="<?php echo $row['ALTO'] ?>" id="input-alto">
                    <a id="ocultar-alto" href="javascript:document.getElementById('input-alto').style.display='none';document.getElementById('ocultar-alto').style.display='none';document.getElementById('form-product').reset();void 0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                        </svg></a>

                </div>
                <div class="info-producto">
                    <h6>Ancho: <?php echo $row['ANCHO'] ?><a href="javascript:document.getElementById('input-ancho').style.display='inline';document.getElementById('ocultar-ancho').style.display='inline';void 0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg></a></h6>
                    <input type="text" maxlength="10" value="<?php echo $row['ANCHO'] ?>" id="input-ancho" name="input-ancho" required>
                    <a id="ocultar-ancho" href="javascript:document.getElementById('input-ancho').style.display='none';document.getElementById('ocultar-ancho').style.display='none';document.getElementById('form-product').reset();void 0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                        </svg></a></h6>

                </div>
                <div class="info-producto">
                    <h6>Profundo: <?php echo $row['PROFUNDO'] ?><a href="javascript:document.getElementById('input-prof').style.display='inline';document.getElementById('ocultar-prof').style.display='inline';void 0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg></a></h6>
                    <input type="text" maxlength="10" id="input-prof" value="<?php echo $row['PROFUNDO'] ?>" name="input-prof" required>
                    <a id="ocultar-prof" href="javascript:document.getElementById('input-prof').style.display='none';document.getElementById('ocultar-prof').style.display='none';document.getElementById('form-product').reset();void 0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                        </svg></a></h6>
                </div>
                <input type="submit" name="enviar" value="Guardar cambios" data-bs-toggle="modal" data-bs-target="#miModal">
            </div>


            </form>
            </div>

        <?php

        }
    }
}

function mostrarProductoByIdCliente($id)
{
    include('db.php');
    $sql = "SELECT * FROM productos WHERE ID='$id'";
    $resultado = mysqli_query($conexion, $sql);

    if (empty($resultado)) {
        ?>
        <h2>No hay productos seleccionados para editar =(</h2>
        <?php
    } else {
        while ($row = mysqli_fetch_array($resultado)) {
        ?>
            <div class="div-producto">
                <form action="agregar_al_carrito.php" method="post">
                    <div class="img-producto">
                        <img src="data:image/jpg;base64, <?php echo base64_encode($row['IMAGEN']) ?>" />
                    </div>

            </div>

            <div class="div-info-producto">
                <div class="info-producto">
                    <h1><?php echo $row['NOMBRE'] ?></h1>
                </div>
                <div class="info-producto">
                    <h5><?php echo $row['DESCRIPCION'] ?></h5>
                </div>
                <div class="info-producto">
                    <h5>$<?php echo $row['PRECIO'] ?></h5>
                </div>
                <div class="info-producto">
                    <h6>Alto: <?php echo $row['ALTO'] ?></h6>
                </div>
                <div class="info-producto">
                    <h6>Ancho: <?php echo $row['ANCHO'] ?></h6>
                </div>
                <div class="info-producto">
                    <h6>Profundo: <?php echo $row['PROFUNDO'] ?></h6>
                </div>
            </div>
            </form>
            </div>

<?php

        }
    }
}
?>
<?php
function mostrarPersonaPorIdEdit($id)
{
    include('db.php');
    $sql = "SELECT * FROM personas WHERE ID='$id'";
    $resultado = mysqli_query($conexion, $sql);

    if (empty($resultado)) {
?>
        <h2>No hay personas seleccionadas =(</h2>
        <?php
    } else {
        while ($row = mysqli_fetch_array($resultado)) {
        ?>
            <form action="savePerson.php?ID=<?php echo $row['ID']; ?>" id="form-product" method="POST" enctype="multipart/form-data">
                <div class="div-profile">
                    <div class="container-profile">
                        <img src="data:image/jpg;base64, <?php echo base64_encode($row['IMAGEN_PERFIL']) ?>" />
                        <input type="file" id="input-file" value="" name="input-file" name="archivo">
                        <a href="javascript:document.getElementById('input-file').style.display='inline';document.getElementById('ocultar-file').style.display='inline';void 0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg></a>
                        <a id="ocultar-file" href="javascript:document.getElementById('input-file').style.display='none';document.getElementById('ocultar-file').style.display='none';document.getElementById('form-product').reset();void 0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                            </svg></a>
                    </div>

                    <div class="container-info-person">
                        <div class="user-person">
                            <span>usuario</span><br>
                            <h3 id="h3-user"><?php echo $row['USUARIO']; ?></h3>
                            <input type="text" required id="input-user" value="<?php echo $row['USUARIO']; ?>" name="input-user" placeholder="<?php echo $row['USUARIO']; ?>" maxlength="13">
                            <a href="javascript:document.getElementById('input-user').style.display='inline';document.getElementById('h3-user').style.display='none';document.getElementById('ocultar-user').style.display='inline';void 0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg></a>
                            <a id="ocultar-user" href="javascript:document.getElementById('input-user').style.display='none';document.getElementById('h3-user').style.display='inline-block';document.getElementById('ocultar-user').style.display='none';document.getElementById('form-product').reset();void 0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                </svg></a>
                        </div>
                        <div class="user-email">
                            <span>email</span><br>
                            <h3 id="h3-email"><?php echo $row['EMAIL']; ?></h3>
                            <input type="email" id="input-email" value="<?php echo $row['EMAIL']; ?>" name="input-email" required placeholder="<?php echo $EMAIL; ?>">
                            <a href="javascript:document.getElementById('input-email').style.display='inline';document.getElementById('h3-email').style.display='none';document.getElementById('ocultar-email').style.display='inline';void 0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg></a>
                            <a id="ocultar-email" href="javascript:document.getElementById('input-email').style.display='none';document.getElementById('h3-email').style.display='inline-block';document.getElementById('ocultar-email').style.display='none';document.getElementById('form-product').reset();void 0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                </svg></a>
                        </div>
                        <div class="user-num">
                            <span>numero</span><br>
                            <h3 id="h3-num"><?php echo $row['TELEFONO']; ?></h3>
                            <input type="numero" id="input-telef" value="<?php echo $row['TELEFONO']; ?>" name="input-telef" required placeholder="<?php echo $TELEFONO; ?>">
                            <a href="javascript:document.getElementById('input-telef').style.display='inline';document.getElementById('h3-num').style.display='none';document.getElementById('ocultar-telef').style.display='inline';void 0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg></a>
                            <a id="ocultar-telef" href="javascript:document.getElementById('input-telef').style.display='none';document.getElementById('h3-num').style.display='inline-block';document.getElementById('ocultar-telef').style.display='none';document.getElementById('form-product').reset();void 0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="div-buttons">
                    <input type="submit" id="enviar" name="enviar" value="Guardar cambios">
                </div>
            </form>
        <?php
        }
    }
}

function mostrarPersonaPorId($ID)
{
    include('db.php');
    $sql = "SELECT * FROM personas WHERE ID='$ID'";
    $resultado = mysqli_query($conexion, $sql);

    if (empty($resultado)) {
        ?>
        <h2>No hay personas seleccionadas =(</h2>
        <?php
    } else {
        while ($row = mysqli_fetch_array($resultado)) {
        ?>


            <div class="container-profile">
                <img src="data:image/jpg;base64, <?php echo base64_encode($row['IMAGEN_PERFIL']) ?>" />
            </div>

            <div class="container-info-person">
                <div class="user-person">
                    <span>usuario</span>
                    <h3><?php echo $row['USUARIO']; ?></h3>
                </div>
                <div class="user-email">
                    <span>email</span>
                    <h3><?php echo $row['EMAIL']; ?></h3>
                </div>
                <div class="user-num">
                    <span>numero</span>
                    <h3><?php echo $row['TELEFONO']; ?></h3>
                </div>
                <div class="botones">
                    <a href="myAccountEdit.php?ID=<?php echo $row['ID']; ?>"><button> <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                            </svg> Editar</button></a>
                </div>
            </div>




<?php
        }
    }
}
?>
<!--------------------------RECOVER REQUEST---------------------------->
<?
include('db.php');
?>

<?php

include('db.php');
$sql = "SELECT ID, USUARIO, INFO FROM peticiones_muebles";

$totalSolicitudesPendientes = 0;
$resultado2 = mysqli_query($conexion, $sql);
$resultado = mysqli_query($conexion, $sql);

$row = mysqli_fetch_array($resultado2);

if (empty($row)) {
    $totalSolicitudesPendientes = 0;
} else {
    while ($row = mysqli_fetch_array($resultado)) {
        $totalSolicitudesPendientes++;
    }
}

function mostrarSolicitudes()
{
    include('db.php');
    $sql = "SELECT ID, USUARIO, INFO, ESTADO FROM peticiones_muebles WHERE ESTADO = ''";

    $resultado2 = mysqli_query($conexion, $sql);
    $resultado = mysqli_query($conexion, $sql);

    $row = mysqli_fetch_array($resultado2);

    if (empty($row)) {
?>
        <h2>No hay solicitudes de muebles</h2>

        <?php
    } else {
        while ($row = mysqli_fetch_array($resultado)) {
        ?>
            <div class="tarjeta-solicitudes">
                <div class="nombre">
                    <h2><?php echo $row['USUARIO']; ?><br></h2>
                </div>
                <div class="solicitud">
                    <span><?php echo $row['INFO']; ?><br></span>
                </div>
            </div>


        <?php
        }
    }
}


function mostrarSolicitudesPendientes()
{
    include('db.php');
    $sql = "SELECT ID, USUARIO, INFO, ESTADO, EMPLEADO FROM peticiones_muebles WHERE ESTADO = ''";

    $resultado2 = mysqli_query($conexion, $sql);
    $resultado = mysqli_query($conexion, $sql);

    $row = mysqli_fetch_array($resultado2);

    if (empty($row)) {
        ?>
        <h2>No hay solicitudes de muebles</h2>

        <?php
    } else {
        while ($row = mysqli_fetch_array($resultado)) {
        ?>
            <div class="tarjeta-solicitudes">
                <div class="nombre">
                    <h2><?php echo $row['USUARIO']; ?><br></h2>
                </div>
                <div class="solicitud">
                    <span><?php echo $row['INFO']; ?><br></span>
                </div>
                <div class="buttons">
                    <a href="acceptRequest.php?ID=<?php echo $row['ID'] ?>"><button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg></button></a>
                </div>
            </div>


<?php
        }
    }
}
?>

<?php
function mostrarSolicitudesActivas()
{
    include('db.php');
    $sql = "SELECT ID, USUARIO, INFO, ESTADO, EMPLEADO FROM peticiones_muebles WHERE ESTADO ='ACTIVA'";

    $resultado2 = mysqli_query($conexion, $sql);
    $resultado = mysqli_query($conexion, $sql);

    $row = mysqli_fetch_array($resultado2);

    if (empty($row)) {
?>
        <h2>No hay solicitudes de muebles activas</h2>

        <?php
    } else {
        while ($row = mysqli_fetch_array($resultado)) {
        ?>
            <div class="tarjeta-solicitudes">
                <div class="nombre">
                    <h2><?php echo $row['USUARIO']; ?><br></h2>
                </div>
                <div class="solicitud">
                    <h2><?php echo $row['INFO']; ?><br></h2>
                </div>
                <div class="buttons">
                    <a href="rejectRequest.php?ID=<?php echo $row['ID'] ?>"><button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                            </svg></button></a>
                    <h6>Tarea aceptada por: <?php echo $row['EMPLEADO'] ?></h6>
                </div>
            </div>


<?php
        }
    }
}
?>

<?php
function mostrarSolicitudesActivasUsuario()
{
    include('db.php');
    session_start();
    $usuario = $_SESSION['USUARIO'];
    $sql = "SELECT ID, USUARIO, INFO, ESTADO, EMPLEADO FROM peticiones_muebles WHERE ESTADO = 'ACTIVA' AND EMPLEADO = '$usuario'";

    $resultado2 = mysqli_query($conexion, $sql);
    $resultado = mysqli_query($conexion, $sql);

    $row = mysqli_fetch_array($resultado2);

    if (empty($row)) {
?>
        <h2>No hay solicitudes de muebles activas</h2>

        <?php
    } else {
        while ($row = mysqli_fetch_array($resultado)) {
        ?>
            <div class="tarjeta-solicitudes">
                <div class="nombre">
                    <h2><?php echo $row['USUARIO']; ?><br></h2>
                </div>
                <div class="solicitud">
                    <h2><?php echo $row['INFO']; ?><br></h2>
                </div>
                <div class="buttons">
                    <a href="rejectRequest.php?ID=<?php echo $row['ID'] ?>"><button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                            </svg></button></a>
                    <h6>Tarea aceptada por: <?php echo $row['EMPLEADO'] ?></h6>
                </div>
            </div>


<?php
        }
    }
}
?>


<!--------------------------AGREGAR ARTICULO AL CARRITO ---------------------------->
<?php

function agregarProductoAlCarrito($idProducto)
{
    // Ligar el id del producto con el usuario a través de la sesión
    include('db.php');

    $nombre_persona = $_SESSION['USUARIO'];

    $sql2 = "SELECT * FROM carrito_usuarios WHERE CODIGO_PRODUCTO = '$idProducto' AND ID_PERSONA = '$nombre_persona'";
    $consulta2 = mysqli_query($conexion, $sql2);
    $row = mysqli_fetch_array($consulta2);

    if (empty($row)) {
        $sql = "INSERT INTO carrito_usuarios (ID_PERSONA, CODIGO_PRODUCTO, CANTIDAD) VALUES ('$nombre_persona', '$idProducto', 1)";
        $consulta = mysqli_query($conexion, $sql);
    } else {
        $cantidad = $row['CANTIDAD'];
        $cantidad_incrementada = $cantidad + 1;
        $sql3 = "UPDATE carrito_usuarios SET CANTIDAD = '$cantidad_incrementada' WHERE CODIGO_PRODUCTO = '$idProducto'";
        $consulta3 = mysqli_query($conexion, $sql3);
    }
}
?>
<!--------------------------MOSTRAR CARRITO ---------------------------->
<?php
function mostrarCarrito()
{
    include('db.php');

    $idUsuario = $_SESSION['USUARIO'];

    $sql = "SELECT *  FROM carrito_usuarios WHERE ID_PERSONA = '$idUsuario'";

    $resultado2 = mysqli_query($conexion, $sql);
    $resultado3 = mysqli_query($conexion, $sql);


    $sumaTotal = 0;

    while ($row = mysqli_fetch_array($resultado2)) {
        $cod = $row['CODIGO_PRODUCTO'];
        $getProduct = "SELECT * FROM productos WHERE ID = '$cod'";
        $resultadoGetProduct = mysqli_query($conexion, $getProduct);
        $rowGetRow = mysqli_fetch_array($resultado3);
        if (empty($resultadoGetProduct)) {
?>
            <h2>No hay productos en el carrito.</h2>
            <?php
        } else {

            while ($rowProduct = mysqli_fetch_array($resultadoGetProduct)) {
            ?>
                <div class="div-productos">
                    <div class="img-productos">
                        <img heigth="120px" width="120px" src="data:image/jpg;base64, <?php echo base64_encode($rowProduct['IMAGEN']) ?>" />
                    </div>
                    <div class="info-producto">
                        <div class="precio">
                            <h5><?php echo $rowProduct['NOMBRE'];  ?></h5>
                        </div>
                        <div class="unidad">
                            <span>X&nbsp; <?php echo $rowGetRow['CANTIDAD']; ?></span>
                        </div>
                        <div class="unidad">
                            <?php
                            $precioTotal = intval($rowGetRow['CANTIDAD']) * intval($rowProduct['PRECIO']);
                            ?>
                            <span>$<?php echo number_format($precioTotal, 2); ?></span>
                        </div>

                    </div>
                    <div class="button-delete">
                        <a href="borrar_del_carrito.php?ID=<?php echo $rowProduct['ID'] ?>"><button><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                </svg></button></a>
                    </div>

                </div>
    <?php

                $sumaTotal += $precioTotal;
            }
        }
    }
    ?>
    <div class="info-final">
        <div class="precio-total">
            <h4>Precio Total:&nbsp; </h4>
        </div>
        <div class="precio-final">
            <h4>$<?php echo number_format($sumaTotal, 2); ?></h4>
        </div>
        <div class="button-realizar-pedido">
            <a href="realizar_pedido.php?s=<?php echo $sumaTotal ?>"><button id="enviar" name="enviar">Realizar pedido</button></a>
        </div>
    </div>
    <?php
}

function mostrarPedidos()
{
    include('db.php');

    $sql = "SELECT *  FROM pedidos_carrito";

    $resultado2 = mysqli_query($conexion, $sql);
    $resultado3 = mysqli_query($conexion, $sql);

    $row = mysqli_fetch_array($resultado2);

    if (empty($row)) {
    ?>
        <h2>No hay pedidos de muebles</h2>

        <?php
    } else {
        while ($row = mysqli_fetch_array($resultado3)) {
        ?>
            <div class="tarjeta-solicitudes">
                <div class="nombre">
                    <h2><?php echo $row['CLIENTE']; ?><br></h2>
                    <h3><?php echo $row['TELEFONO']; ?><br></h3>
                </div>
                <div class="solicitud">
                    <span><?php echo $row['PEDIDO']; ?><br></span>
                </div>
                <div class="solicitud">
                    <span><?php echo 'total: $' .  number_format($row['PRECIO'], 2); ?><br></span>
                </div>
                <div class="solicitud">
                    <span><?php echo $row['ESTADO']; ?><br></span>
                </div>
            </div>


        <?php
        }
    }
}
function mostrarTodosLosPedidos()
{
    include('db.php');

    $sql = "SELECT *  FROM pedidos_carrito";

    $resultado2 = mysqli_query($conexion, $sql);
    $resultado3 = mysqli_query($conexion, $sql);

    $row = mysqli_fetch_array($resultado2);

    if (empty($row)) {
        ?>
        <h2>No hay pedidos de muebles</h2>

        <?php
    } else {
        while ($row = mysqli_fetch_array($resultado3)) {
        ?>
            <div class="tarjeta-solicitudes">
                <div class="nombre">
                    <h2><?php echo $row['CLIENTE']; ?><br></h2>
                    <h3><?php echo $row['TELEFONO']; ?><br></BR></h3>
                </div>
                <div class="solicitud">
                    <span><?php echo $row['PEDIDO']; ?><br></span>
                </div>
                <div class="solicitud">
                    <span><?php echo 'total: $' .  number_format($row['PRECIO'], 2); ?><br></span>
                </div>
                <div class="solicitud">
                    <span><?php echo $row['ESTADO']; ?><br></span>
                </div>
                <a href="acceptOrder.php?ID=<?php echo $row['ID'] ?>"><button onclick="javascript:return asegurar();"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg></button></a>
            </div>


<?php
        }
    }
}
?>
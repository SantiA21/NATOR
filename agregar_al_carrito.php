<?php
include_once "functions.php";
$id_product = $_POST["id_producto"];
agregarProductoAlCarrito($id_product);

header('Location: shoppingCart.php');
?>
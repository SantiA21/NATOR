<?php
include('recoverInfoPerson.php');

if (isset($_POST['recuperar'])) {
    session_start();
    $codigo = rand(1000,9999);
    $_SESSION['CODIGO'] = $codigo;
    $titulo = "Recuperación de contraseña";
    $mensaje = "¡Hola! Tu codigo de verificación para recuperar tu contraseña es: $codigo";
    $emailColocadoParaRecuperar = $_POST['emailColocadoParaRecuperar'];

    $destino = $emailColocadoParaRecuperar;
    $enviarEmail = mail($destino, $titulo, $mensaje);

    if ($enviarEmail == true) {
        header("Location:https://natorfurtniture.000webhostapp.com/confirmCodeRecover.php");
    } else {
        echo "Hubo un error al enviar el mensaje.";
    }
}

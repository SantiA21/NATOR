<?php
if (isset($_POST['recuperar'])) {
    session_start();
    if($_SESSION['CODIGO']==$_POST['codeColocadoParaRecuperar']){
        header("Location:https://natorfurtniture.000webhostapp.com/restorePw.php");
    }else{
        echo  $_SESSION['CODIGO'];
        echo "Codigo ingresado es incorrecto";
    }
}

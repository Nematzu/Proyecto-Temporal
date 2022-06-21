<?php

require_once('../modelo/Administrador.php');

if($_POST){
    $Modelo = new Administrador();

    $admin_codigo = $_POST['admin_codigo'];
    $Modelo->delete($admin_codigo);
}
else{
    header('Location ../../index.php');
}
?>
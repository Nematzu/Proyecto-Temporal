<?php

require_once('../modelo/Administrador.php');

if($_POST){
    $ModeloAdministradores = new Administrador();


    $Identificacion = $_POST['Identificacion'];
    $Tipo_Identificacion = $_POST['Tipo_Identificacion'];
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Celular = $_POST['Celular'];
    $Direccion = $_POST['Direccion'];


    $ModeloAdministradores->add($Identificacion, $Tipo_Identificacion, $Nombre, $Apellido, $Celular, $Direccion);
}else{
    header('Location ../../index.php');
}

?>
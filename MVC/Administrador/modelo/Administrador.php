<?php

require_once('../../Conexion.php');

class Administrador extends Conexion{

    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function add($Identificacion, $tipo_identificacion, $nombre, $apellido, $celular, $direccion){
        $statement = $this->db->prepare("INSERT INTO  administrador (admin_Identificacion, admin_tipo_identificacion, 
        admin_nombre, admin_apellido, admin_celular, admin_direccion) VALUE (:identificacion, :tipo_identificacion, :nombre, :apellido, :celular, :direccion)");

        $statement->bindParam(':identificacion', $Identificacion);
        $statement->bindParam(':tipo_identificacion', $tipo_identificacion);
        $statement->bindParam(':nombre', $nombre);
        $statement->bindParam(':apellido', $apellido);
        $statement->bindParam(':celular', $celular);
        $statement->bindParam(':direccion', $direccion);

        if($statement->execute()){
            header('Location: ../vista/CRUDUsuarios.php');
        }else{
            header('Location: ../vista/CRUDUsuarios.php');
        }
    }

    public function get(){
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM  administrador");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function getByID($ID){
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM  administrador WHERE admin_codigo =:ID");
        $statement->bindParam(':ID',$ID);
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function update($ID, $Identificacion, $tipo_identificacion, $nombre, $apellido, $celular, $direccion){
        $statement = $this->db->prepare("UPDATE administrador SET admin_identificacion = :identificacion, admin_tipo_identificacion = :tipo_identificacion,
        admin_nombre = :nombre, admin_apellido = :apellido, admin_celular = :celular, admin_direccion = :direccion WHERE admin_codigo =:ID");
        $statement->bindParam(':ID', $ID);
        $statement->bindParam(':identificacion', $Identificacion);
        $statement->bindParam(':tipo_identificacion', $tipo_identificacion);
        $statement->bindParam(':nombre', $nombre);
        $statement->bindParam(':apellido', $apellido);
        $statement->bindParam(':celular', $celular);
        $statement->bindParam(':direccion', $direccion);
        if($statement->execute()){
            header('Location: ../vista/CRUDUsuarios.php');
        }else{
            header('Location: ../Pages/edit.php');
        }
    }

    public function delete($ID){
        $statement = $this->db->prepare("DELETE FROM administrador WHERE admin_codigo = :ID ");
        $statement->bindParam(':ID',$ID);
        if($statement->execute()){
            header('Location: ../vista/CRUDUsuarios.php');
        }else{
            header('Location: ../Pages/delete.php');
        }
    }
    



}
 
?>
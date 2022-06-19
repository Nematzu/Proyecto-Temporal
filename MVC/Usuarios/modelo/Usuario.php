<?php

require_once('../../Conexion.php');
session_start();

class Usuario extends Conexion{

    public function __construct(){
        $this->db = parent::__construct();
    }

    public function login($Usuario, $Password){
        $statement = $this->db->prepare("SELECT * FROM usuario WHERE usua_nombre =:Usuario AND usua_clave = :Password");
        $statement->bindParam(':Usuario',$Usuario);
        $statement->bindParam(':Password',$Password);
        $statement->execute();
        
        if ($statement->rowCount() == 1) {
            $result = $statement->fetch();
            $_SESSION['NOMBRE'] = $result['usua_nombre'];
            $_SESSION['ID'] = $result['usua_codigo'];
            $_SESSION['ROL'] = $result['usua_rol'];
            return true;
        }
        return false;
    }

    public function getNombre(){
        return $_SESSION['NOMBRE'];
    }

    public function getID(){
        return $_SESSION['ID'];
    }

    public function getRol(){
        return $_SESSION['ROL'];
    }


    public function validateSession(){
        if($_SESSION['ID'] == null){
            header('Location: ../../login.php');
        }
    }

    public function validateSessionAdministrador(){
        if($_SESSION['ID'] != null){
            if($_SESSION['ROL'] == 'Administrador'){
                header('Location ../../Administrador/vista/index.php');
            }else{
                header('../../index.php');
            }
        }
    }
}

?>
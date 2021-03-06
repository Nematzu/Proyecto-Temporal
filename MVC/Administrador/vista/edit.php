<?php

require_once('../../Usuarios/modelo/Usuario.php');
require_once('../modelo/Administrador.php');

$ModeloUsuarios = new Usuario();
$ModeloUsuarios->validateSession();

$Modelo = new Administrador();

$admin_codigo = $_GET['admin_codigo'];
$InformacionAdministrador = $Modelo->getByID($admin_codigo);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos3.css">
    <title>Document</title>
</head>
<body>

    <header>
        <div>
        <a href="menuadmin.html" class="logo">
            <img src="imagenes/tienda1.png" alt="" srcset="">
            <b>Tiendita Don Chucho</b>
        </a>
        </div>
    </header>
    <div class="CRUD-MAIN">
        <div class="CRUD-sidebar">
            <div class="CRUD-sidebar-contenedor"><img src="imagenes/CU/usuarios.png" alt=""><a href="">Usuarios</a></div>
            <div class="CRUD-sidebar-contenedor"><img src="imagenes/CU/productos.png" alt=""><a href="">Productos</a></div>
            <div class="CRUD-sidebar-contenedor"><img src="imagenes/CU/clientes.png" alt=""><a href="">Clientes</a></div>
            <div class="CRUD-sidebar-contenedor"><img src="imagenes/CU/ventas.png" alt=""><a href="">Ventas</a></div>
        </div>
        <div class="CRUD-dashboard">
            <div class="CRUD-dashboard-main">
                <h1>Usuarios</h1>
                <div class="CRUD-dashboard-button-contenedor">
                <label for="checkbox-registrar" class="CRUD-dashboard-button">
                    Registrar
                </label>
                </div>
                    <div class="dashboard-table">
                        <table>
                            <tr>
                                <th>ID_Admin</th>
                                <th>Identificacion</th>
                                <th>Tipo_Identificacion</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Celular</th>
                                <th>Direccion</th>
                                <th>ID_usuario</th>
                                <th>Acciones</th>
                            </tr>
                            <?php
                            $Administradores = $Modelo->get();
                            if($Administradores != null){
                            foreach ($Administradores as $Administrador){

                            ?>
                            <tr>
                                <td><?php echo $Administrador['admin_codigo']?></td>
                                <td><?php echo $Administrador['admin_identificacion']?></td>
                                <td><?php echo $Administrador['admin_tipo_identificacion']?></td>
                                <td><?php echo $Administrador['admin_nombre']?></td>
                                <td><?php echo $Administrador['admin_apellido']?></td>
                                <td><?php echo $Administrador['admin_celular']?></td>
                                <td><?php echo $Administrador['admin_direccion']?></td>
                                <td><?php echo $Administrador['usua_codigo_fk']?></td>
                                <td>
                                    <div class="dashboard-table-button">
                                    <!-- <label for="checkbox-editar"  class="editar"></label> -->
                                    <a href="edit.php?admin_codigo=<?php echo $Administrador['admin_codigo']?>" class="editar">Editar</a>
                                    <a href="edit.php?admin_codigo=<?php echo $Administrador['admin_codigo']?>" class="eliminar">Eliminar</a>
                                    </div>
                                </td>
                            </tr>

                            <?php
                            
                                    }
                                }
                            ?>
                        </table>
                    </div>
            </div>
                <div class="footer-menu">
                    <h2>INFORMACION DE CONTACTO</h2>
                       <p>Telefono: 7438787</p>
                       <a href="#">Direccion: Cra. 91 #128D-34, Bogot??, Cundinamarca</a>
                       <a href="#">Tiendita Don Chucho ?? 2022</a>
                    </div>
    
        </div>
                
                
        
    </div>

 
    
    <!-- Modulo Crear -->
    <input type="checkbox" id="checkbox-registrar">
    <div class="contenedor-cuestionario-registrar">
        <div class="cuestionario">
            <div class="header-cuestionario-registrar">
                Registrar Persona
            </div>
            <div class="body-cuestionario">
                <form method="POST" action="../controladores/add.php">

                    <label for="">Identificacion</label>
                    <input type="text" name="Identificacion">
                    <label for="">Tipo_Identificacion</label>
                    <input type="text" name="Tipo_Identificacion">
                    <label for="">Nombre</label>
                    <input type="text" name="Nombre">
                    <label for="">Apellido</label>
                    <input type="text" name="Apellido">
                    <label for="">Celular</label>
                    <input type="text" name="Celular">
                    <label for="">Direccion</label>
                    <input type="text" name="Direccion">

                    <div class="footer-cuestionario">
                        <label for="checkbox-registrar" class="CRUD-dashboard-button">
                            Cancelar
                        </label>
                            <input type="submit" class="CRUD-dashboard-button">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Modulo Editar -->
    <input type="checkbox" id="checkbox-editar">
    <div class="contenedor-cuestionario-editar2">
        <div class="cuestionario">
            <div class="header-cuestionario-editar">
                Editar Persona
            </div>
            <div class="body-cuestionario">
                <form method="POST" action="../controladores/edit.php">
                <?php
                    if($InformacionAdministrador != null){
                        foreach ($InformacionAdministrador as $Info){
                            

                    ?>
                    <input type="hidden" name="admin_codigo" value="<?php echo $admin_codigo; ?>" >
                    <label for="">Identificacion</label>
                    <input type="text" name="Identificacion" value="<?php echo $Info['admin_identificacion']?>" >
                    <label for="">Tipo_Identificacion</label>
                    <input type="text" name="Tipo_Identificacion" value="<?php echo $Info['admin_tipo_identificacion']?>" >
                    <label for="">Nombre</label>
                    <input type="text" name="Nombre" value="<?php echo $Info['admin_nombre']?>">
                    <label for="">Apellido</label>
                    <input type="text" name="Apellido" value="<?php echo $Info['admin_apellido']?>" >
                    <label for="">Celular</label>
                    <input type="text" name="Celular" value="<?php echo $Info['admin_celular']?>" >
                    <label for="">Direccion</label>
                    <input type="text" name="Direccion" value="<?php echo $Info['admin_direccion']?>" >
                    <?php
                    
                        }
                    }   
                    ?>
                    <div class="footer-cuestionario">
                        <a href="CRUDUsuarios.php" class="CRUD-dashboard-button-editar">Cancelar</a>
                        <input type="submit" class="CRUD-dashboard-button-editar">
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
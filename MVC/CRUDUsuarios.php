<?php

require_once('Usuarios/modelo/Usuario.php');

$ModeloUsuarios = new Usuario();
$ModeloUsuarios->validateSession();

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
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Clave</th>
                                <th>Acciones</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Nicolas</td>
                                <td>2312321</td>
                                <td>
                                    <div class="dashboard-table-button">
                                        <label for="checkbox-editar" class="editar">Editar</label>
                                        <label for="" class="eliminar">Eliminar</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Juan</td>
                                <td>666</td>
                                <td>
                                    <div class="dashboard-table-button">
                                        <label for="checkbox-editar" class="editar">Editar</label>
                                        <label for="" class="eliminar">Eliminar</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Juli??n</td>
                                <td>V92301V</td>
                                <td>
                                    <div class="dashboard-table-button">
                                        <label for="checkbox-editar" class="editar">Editar</label>
                                        <label for="" class="eliminar">Eliminar</label>
                                    </div>
                                </td>
                            </tr>
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
                <form action="">
                    <label for="">Nombre</label>
                    <input type="text">
                    <label for="">Clave</label>
                    <input type="text">
                    <div class="footer-cuestionario">
                        <label for="checkbox-registrar" class="CRUD-dashboard-button">
                            Cancelar
                        </label>
                        <label for="checkbox-registrar" class="CRUD-dashboard-button">
                            Guardar
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Modulo Editar -->
    <input type="checkbox" id="checkbox-editar">
    <div class="contenedor-cuestionario-editar">
        <div class="cuestionario">
            <div class="header-cuestionario-editar">
                Editar Persona
            </div>
            <div class="body-cuestionario">
                <form action="">
                    <label for="">Nombre</label>
                    <input type="text">
                    <label for="">Clave</label>
                    <input type="text">
                    <div class="footer-cuestionario">
                        <label for="checkbox-editar" class="CRUD-dashboard-button">
                            Cancelar
                        </label>
                        <label for="checkbox-editar" class="CRUD-dashboard-button">
                            Guardar
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
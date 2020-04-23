<?php
include "conexion.php";
$link  = conectarse();
$resul = $link->query("select * from articulos");
session_start();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
            <meta charset="utf-8">
                <title>
                    CRUD
                </title>
            </meta>
        </link>
    </head>
    <body>
        <div class="container">
            <a class="btn btn-primary" href="index.php">Cerrar sesion</a>
            <div class="row">
                <div class="jumbotron ">
                    <h1>
                        Listado de Productos
                    </h1>
                </div>
                <div>
                    <form class="form-inline" action="" method="post">
                    <div class="form-group">
                        <input class="form-control" id="b" name="b" placeholder="Ingrese un codigo o Nombre a buscar" type="text">
                                            <button type="submit" type="button" name="buscar" class="btn btn-primary" >
  Buscar
  <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
</button>
                                   </div>

           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Nuevo
</button>
                       
                    </form>
                </div>            
               
 
                <table class="table table-striped col-md-4 col-xs-6">
                    <thead>
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>
                                descripcion
                            </th>
                            <th>
                                Precio
                            </th>
                            <th>
                                Stock
                            </th>
                            <th>
                                Acciones
                            </th>
                        </tr>
                    </thead>

                        <?php
while ($fila = $resul->fetch_object()) {
    echo '<tr>
        <td>' . $fila->id . '</td>
        <td>' . $fila->descripcion . '</td>
        <td>S/.' . $fila->precio . '</td>
        <td>' . $fila->stock . '</td>
        <td>
       <!-- <a class="btn btn-info" href="update.php?id='.$fila->id.'">Editar</a> -->
      <a class="btn btn-info" href="delete.php?id='.$fila->id.'">Eliminar</a>
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#update">
  Editar
</button>
        </td>
       
    </tr>';
}
?>

                </table>
            </div>
        </div>

         <script crossorigin="anonymous" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" src="https://code.jquery.com/jquery-3.2.1.js">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
        </script>
 
        <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ingreso de datos</h4>
      </div>
      <div class="modal-body">
          <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <h3>
                        Insertar un producto
                    </h3>
                    <form action="insertar.php" id="formulario" method="POST" name="formulario">
                        <div class="form-group">
                            <label for="nombre">
                                ID
                            </label>
                            <input class="form-control" id="codigo" name="codigo" required="" type="text">
                            </input>
                        </div>
                        <div class="form-group">
                            <label for="asunto">
                                Descripcion
                            </label>
                            <input class="form-control" id="descripcion" name="descripcion" required="" type="text">
                            </input>
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Precio
                            </label>
                            <input class="form-control" id="precio" name="precio" required="" type="text">
                            </input>
                        </div>
                        <div class="form-group">
                            <label for="mensaje">
                                Stock
                            </label>
                            <input class="form-control" id="stock" name="stock" required="" type="text">
                            </input>
                        </div>
                        <input class="btn btn-primary" id="enviar" name="guardar" type="submit" value="Guardar datos"/>
                       
                      
                    </form>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
        <!--fin modal -->
        <!-- Modal para editar -->

        <!-- Modal -->
<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ingreso de datos</h4>
      </div>
      <div class="modal-body">
          <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <h3>
                        Edicion de Articulos
                    </h3>
                    <form action="update.php" id="formulario" method="POST" name="formulario">
                        <div class="form-group">
                            <label for="nombre">
                                ID
                            </label>
                            <input class="form-control" id="codigo" name="codigou" required="" type="text">
                            </input>
                        </div>
                        <div class="form-group">
                            <label for="asunto">
                                Descripcion
                            </label>
                            <input class="form-control" id="descripcion" name="descripcionu" required="" type="text">
                            </input>
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Precio
                            </label>
                            <input class="form-control" id="precio" name="preciou" required="" type="text">
                            </input>
                        </div>
                        <div class="form-group">
                            <label for="mensaje">
                                Stock
                            </label>
                            <input class="form-control" id="stock" name="stocku" required="" type="text">
                            </input>
                        </div>
                        <input class="btn btn-primary" id="enviar" name="guardar" type="submit" value="Guardar datos"/>                       
                      
                    </form>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
        <!-- Modal para editar -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="conecta.js"></script>
    </body>
</html>
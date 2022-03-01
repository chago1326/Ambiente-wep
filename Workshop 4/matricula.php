<?php 
    include("functions.php");
    $con=getConnection();

    $sql="SELECT *  FROM usuarios";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Matricula</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="" method="POST">

                                    <input type="text" class="form-control mb-3" name="cedula" placeholder="cedula">
                                    <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres">
                                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">
                                    <input type="text" class="form-control mb-3" name="email" placeholder="Correo electronico">
                                    <input type="text" class="form-control mb-3" name="contrasenna" placeholder="Contraseña">
                                    <input type="text" class="form-control mb-3" name="rol" placeholder="Rol">
                                   
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a  class="btn btn-info"  href="dashboard.php" >Salir</a></th>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Cedula</th>
                                        <th>Nombre</th>
                                        <th>Apellidos</th>
                                        <th>email</th>
                                        <th>Contraseña</th>
                                        <th>Rol</th>

                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['cedula']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apellido']?></th>
                                                <th><?php  echo $row['email']?></th>    
                                                <th><?php  echo $row['contrasenna']?></th>
                                                <th><?php  echo $row['rol']?></th>    
                                                <th><a  class="btn btn-info">Editar</a></th>
                                                <th><a  class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>
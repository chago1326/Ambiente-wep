<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM categorias";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Crud categorias</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      
        
        <style>
            body{
                background:url(http://www.solofondos.com/wp-content/uploads/2015/11/fondos-de-pantalla-para-paginas-web-colores-claros.jpg) no-repeat center center fixed;
                background-size: cover;
                
            }
            h1{
                font: oblique bold 100%cursive;
			
            }
           
        
        </style>

      

    </head>

    
    <body>
        
            <div class=" container mt-5 ">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese la informacion de las categorias</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id_categorias" placeholder="Id de la categoria">
                                    <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres">
                                    <input type="text" class="form-control mb-3" name="descripcion" placeholder="Descripcion de la categoria">
                                    
                                    <input type="submit" class="btn btn-primary" >
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead  class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombres</th>
                                        <th>Descripcion</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_categorias']?></th>
                                                <th><?php  echo $row['nombres']?></th>
                                                <th><?php  echo $row['descripcion']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['id_categorias'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_categorias'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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
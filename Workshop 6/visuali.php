<?php
require('conexion.php');
 $conn = getConnection();
 $sql ="SELECT estudiante.cedula,estudiante.nombre,estudiante.apellidos,estudiante.correo,carreras.nombreCarrera FROM `estudiante`,`carreras` WHERE estudiante.idCarrera = carreras.id";
 $query = mysqli_query($conn,$sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">

    <title>Matriculados</title>
</head>
<body>
<div class="col-md-8">
            <table class="table">
                <thead class="table-success table-striped">
                    <tr>
                        <th>Cedula</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>correo</th>
                        <th>Carrera</th>
                        
                    </tr>
                </thead>

                <tbody>
                    <?php
                              while($row=mysqli_fetch_array($query)){
                                        ?>
                    <tr>
                        <th><?php  echo $row['cedula']?></th>
                        <th><?php  echo $row['nombre']?></th>
                        <th><?php  echo $row['apellidos']?></th>
                        <th><?php  echo $row['correo']?></th>
                        <th><?php  echo $row['nombreCarrera']?></th>
                        

                    
                    </tr>
                    
                    <?php 
                                            }
                                        ?>
                </tbody>
            </table>
        </div>
        <a href="index.php">Inicio</a>
</body>
</html>
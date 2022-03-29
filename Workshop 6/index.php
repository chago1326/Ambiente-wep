<?php 
   require 'conexion.php';
   $conn = getConnection();
   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> Matricula</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <?php 
   
    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <h1>Ingrese datos</h1>
                <form action="insertar.php" method="POST">

                    <input type="number" class="form-control mb-3" name="cedula" placeholder="cedula">
                    <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres">
                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">
                    <input type="text" class="form-control mb-3" name="email" placeholder="Correo electronico">
    
                    <select name="carreras" id="carreras">

                    <?php
                        $sql="SELECT * FROM `carreras`";
                        
                        $query=mysqli_query($conn,$sql);
                        while ($valores = mysqli_fetch_array($query)) {
                        echo "<option value=\"$valores[id]\">$valores[nombreCarrera]</option>";
                        }
                    ?>
                     </select>



                    <input type="submit" class="btn btn-primary">
                    
                </form>
            </div>

</body>

</html>
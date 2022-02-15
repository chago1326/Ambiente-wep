<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consultas a nuestro sistema</title>
    <style type="text/css">

     body {
			background-color:#35695c ;
			
			margin: 0;
			padding: 0;
			

		}
      table {
        text-align: center;
			width: 50%;
			margin: auto;
        
      border: 8px outset #c24412;
			border: 8px inset  #c24412;
			padding: 20px 50px;
			margin-top: 20px;
			border-radius: 5px;
      table-layout: auto;
      table-layout: auto; width: 100%;
      table-layout: fixed; width: 200px;
                     
      }
      h3{
        text-align: center;
			width: 50%;
			margin: auto;
      font: oblique bold 200%cursive;
      }
     
      th, h1 {
        
        background-color: #c24412 ;
        table-layout: auto;
        table-layout: auto; width: 100%;
        table-layout: fixed; width: 200px;
      }

      td,
      th {
        border: solid 1px #7e7c7c;
        padding: 2px;
        text-align: center;
        table-layout: auto;
        table-layout: auto; width: 100%;
        table-layout: fixed; width: 200px;
      }


    </style>
</head>
<body>
    
</body>
</html>


<?php

$user = "root";
$pass = "";
$host = "localhost";


$connection = mysqli_connect($host, $user, $pass);


$nombre = $_POST["nombre"] ;
$usuario = $_POST["usuario"] ;
$contraseña = $_POST["contraseña"] ;


if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            
        }
       
        $datab = "workshop";
       
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else
        {
        echo "<h3>Registros Guardados en nuestro sistema</h3>" ;
        }
        
        $instruccion_SQL = "INSERT INTO tabla_form (nombre, usuario, contraseña)
                             VALUES ('$nombre','$usuario','$contraseña')";
                           
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);

        
        $consulta = "SELECT * FROM tabla_form";
        
$result = mysqli_query($connection,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}
echo "<table>";
echo "<tr>";
echo "<th><h1>id</th></h1>";
echo "<th><h1>Nombre</th></h1>";
echo "<th><h1>Usuario</th></h1>";
echo "<th><h1>Contraseña</th></h1>";
echo "</tr>";

while ($colum = mysqli_fetch_array($result))
 {
    echo "<tr>";
    echo "<td><h2>" . $colum['id']. "</td></h2>";
    echo "<td><h2>" . $colum['nombre']. "</td></h2>";
    echo "<td><h2>" . $colum['usuario'] . "</td></h2>";
    echo "<td><h2>" . $colum['contraseña'] . "</td></h2>";
    echo "</tr>";
}
echo "</table>";

mysqli_close( $connection );


   echo'<a href="index.html"> Volver Atrás</a>';


?>
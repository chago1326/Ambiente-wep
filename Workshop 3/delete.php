<?php

include("conexion.php");
$con=conectar();

$id_categorias=$_GET['id'];

$sql="DELETE FROM categorias  WHERE id_categorias='$id_categorias'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>

<?php

include("conexion.php");
$con=conectar();

$id_categorias=$_POST['id_categorias'];
$nombres=$_POST['nombres'];
$descripcion=$_POST['descripcion'];

$sql="UPDATE categorias SET nombres='$nombres',descripcion='$descripcion' WHERE id_categorias='$id_categorias'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>
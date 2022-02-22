<?php
include("conexion.php");
$con=conectar();

$id_categorias=$_POST['id_categorias'];
$nombres=$_POST['nombres'];
$descripcion=$_POST['descripcion'];


$sql="INSERT INTO categorias VALUES('$id_categorias','$nombres','$descripcion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>
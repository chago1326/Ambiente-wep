<?php
include 'estudiante.php';

$cedula = $_POST['cedula'];
$nombre = $_POST['nombres'];
$apellido = $_POST['apellidos'];
$correo = $_POST['email'];
$carrera = $_POST['carreras'];
date_default_timezone_set('America/Costa_Rica');    
$fecha = date("d-m-Y");

$matricula = new estudiantes($cedula,$nombre,$apellido,$correo,$carrera,$fecha);

$matricula -> insertar($cedula,$nombre,$apellido,$correo,$carrera,$fecha);

header('Location:visuali.php');




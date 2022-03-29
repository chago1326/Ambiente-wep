<?php
require('conexion.php');

class estudiantes{

    protected $cedula;
    protected $nombre;
    protected $apellidos;
    protected $correo;
    protected $carrera;
    protected $fecha;

    public function construct($ced,$nom,$apelli,$corr,$carre,$fech){
        $this->cedula = $ced;
        $this->nombre = $nom;
        $this->apellidos = $apelli;
        $this->correo = $corr;
        $this->carrera = $carre;
        $this->fecha = $fech;

    }

    public function insertar($cedul,$nomb,$apel,$coreo,$carra,$fec){
        $conn = getConnection();
        $sql ="INSERT INTO `estudiante`(`cedula`, `nombre`, `apellidos`, `correo`, `idCarrera`, `fecha`) 
        VALUES ('$cedul','$nomb','$apel','$coreo','$carra','$fec')";
        $query = mysqli_query($conn,$sql);
        if($query){
            //echo "Madriculado correctamente!!!";
        }else{
           // echo "Hubo un error";
        }
    }



     
}
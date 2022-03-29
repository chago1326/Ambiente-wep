<?php
class conexion{
    public function conectar(){

        $connection = new mysqli('localhost', 'root', '', 'estudiantes');
          if ($connection->connect_errno) {
        printf("Connect failed: %s\n", $connection->connect_error);
        die;
  }
  return $connection;
    }

}
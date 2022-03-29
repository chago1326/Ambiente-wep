<?php

  
  function getConnection() {
    $connection = new mysqli('localhost', 'root', '', 'workshop6');
    if ($connection->connect_errno) {
      printf("Connect failed: %s\n", $connection->connect_error);
      die;
    }
    return $connection;
  }


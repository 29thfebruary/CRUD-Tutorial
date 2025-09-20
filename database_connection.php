<?php
  $servername = 'localhost';
  $username = 'root';
  $password = 'MrFmf]PFIK/[HU)H';
  $database = 'myshop';
  $port = 3307;

  //create connection
  $connection = new mysqli($servername, $username, $password, $database, $port);

  //check connection
  if($connection->connect_error) {
    die("Connection failed: ". $connection->connect_error);
  }
?>

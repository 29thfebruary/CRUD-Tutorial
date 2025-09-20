<?php
  if (isset($_GET["id"])) {
    $id = $_GET["id"];

    include 'database_connection.php';

    $sql = "DELETE FROM clients WHERE id=$id";
    $connection->query($sql);
  }

  header("location: /CRUD_Tuto/index.php");
  exit;
?>
<?php 
include_once('../conf/connection.php');
$id_post = $_GET['id'];
$sqli = "DELETE FROM POST WHERE id_post = '$id_post'";
$connection->query($sqli);
header('location:../../admin/index.php?post=eliminado');
 ?>
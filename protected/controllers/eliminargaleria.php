<?php 
ob_start();

include_once('../conf/connection.php');
$id_post = $_GET['id'];
$sqli = "DELETE FROM GALERIA WHERE id_galeria = '$id_post'";
$connection->query($sqli);
header('location:../../admin/index.php?galeria=eliminado');
ob_end_flush();

 ?>
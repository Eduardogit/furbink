<?php 
ob_start();

  include_once('../protected/conf/connection.php');
  $sql    = "SELECT count(*) as total  FROM POST ";
  $result = $connection->query($sql);
  $row = $result->fetch_assoc();
  $numero_post = $row['total'];

  //print_r($result-result(0));
 $sql1    = "SELECT count(*) as total  FROM GALERIA ";
  $result1 = $connection->query($sql1);
  $row1 = $result1->fetch_assoc();
  $numero_galeria = $row1['total'];
  ob_end_flush();

 ?>
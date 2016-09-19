<?php 
  include_once('../protected/conf/connection.php');
  $sql    = "SELECT count(*) as total  FROM POST ";
  $result = $connection->query($sql);
  $row = $result->fetch_assoc();
  $numero_post = $row['total'];
  //print_r($result-result(0));

 ?>
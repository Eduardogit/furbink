<!DOCTYPE html>
<html lang="en">
<head>
<?php  include_once('../protected/conf/connection.php');?>

 <?php include_once('../protected/includes/head.php') ?>
 <link rel="stylesheet" href="../assets/css/imgpreview.css">

 <title>Post</title>
</head>
<body>
  <style>
    #cke_1_top{
      background: #000!important;
    }
  </style>
  <section id="container" class="">

    <?php include('../protected/views/header.php') ?>
    <?php include('../protected/views/sidebar.php') ?>
    <section id="main-content">
      <section class="wrapper">      

          <?php 
        $sql    = "SELECT * FROM POST ORDER BY id_post DESC";
        $result = $connection->query($sql);
        foreach ($result as $row) {
          $sql1    = "SELECT url FROM IMG where id_post_fk = ".$row['id_post']."";
          $result_img= $connection->query($sql1);
          echo "</br>";
          echo $row['titulo'];
          echo $row['contenido'];
          echo "</br>";            
        }

       ?>
      </section>
    </section>
  </section>
<?php include('../protected/includes/bottomJs.php') ?>
</body>
</html>
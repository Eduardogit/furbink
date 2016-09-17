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
      <div class="container">
        <div class="row">
        <?php 
        $sql    = "SELECT * FROM POST ORDER BY id_post DESC";
        $result = $connection->query($sql);
        foreach ($result as $row) {
          $sql1    = "SELECT url FROM IMG where id_post_fk = ".$row['id_post']."";
          $result_img= $connection->query($sql1);
          foreach ($result_img as $img) {

          echo "<div style='padding:50px ;margin-bottom:50px;' class=' panel col-md-12'>".
                  "<div class='col-md-7'>".
                    "<h2>".$row['titulo']."</h2>".
                    "<hr>".
                    "<p>".$row['contenido']."</p>".
                  "</div>".
                  "<img class='' style='height:200px' src='../protected/uploads/".$img['url']."'></img>".
               "</div>";
          }
            
        }

       ?>
          
        </div>
      </div>
      </section>
    </section>
  </section>
<?php include('../protected/includes/bottomJs.php') ?>
</body>
</html>
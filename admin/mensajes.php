<!DOCTYPE html>
<html lang="en">
<head>
 <?php
 ob_start();

  include_once('../protected/conf/connection.php');
  include_once('../protected/includes/head.php');
  include_once('../protected/includes/headGallery.php');
  ?>
</head>
<body>
<style>
  .list-group-item{
    color: #000;
  }
</style>

  <?php

    session_start();
    $id = $_POST['id'];
    if(empty($_SESSION['usuario'])){
        header('Location:logout.php');
    }
  ?>
<section id="container" class="">
     
      <?php include('../protected/views/header.php') ?>    
      <!--header end-->

     <?php include_once('../protected/views/sidebar.php') ?>
<section id="main-content">
    <section class="wrapper">    
    <h1>Mensajes Recientes!<i style='margin-left:30px;color:blue;font-size:25px' class='fa fa-send fa-6'></i></h1>
                <?php 

              $sql    = "SELECT * FROM MENSAJES WHERE status ='".$_GET['id']."' order by id_mensaje desc";
              $result = $connection->query($sql);
              foreach ($result as $row) {
                if($row['correo'] == 'sin correo') {
                  echo "<div class=' panel'>"
                          ."<div class='panel-heading'>"
                            ."<strong>Mensaje de: </strong>".$row['asunto']." "
                          ."</div>"
                            ."<div class='panel-body'>"
                            ."<p>".$row['contenido']."</p>";
                              echo "<p style='color:#E4354F'>Imagenes adjuntas</p>";
                                $sqlIMG = "SELECT * FROM MENSAJES_GALERIA WHERE  id_mensaje_fk = ".$row['id_mensaje']." ";
                                $resultIMG = $connection->query($sqlIMG);
                                $id_galeria = $resultIMG->fetch_assoc();
                                foreach ($id_galeria as $id) {
                                $sqlIMGP = "SELECT * FROM GALERIA WHERE  id_galeria = ".$id[id_galeria_fk]." ";
                                $resultIMGP = $connection->query($sqlIMGP);
                                $img = $resultIMGP->fetch_assoc();
                                  if(!empty($img['url'])){
                                    echo "<img style='width:100px;padding:10px;' src='../protected/uploads/".$img['url']."'>";
                                  }
                                }
                           //     $resultIMG = $connection->query($sqlIMG);



                    echo "<hr>"
                            ."<a style='color:#123' class='btn btn-info' href='https://www.facebook.com/".$row['facebook']."' >Ir al perfil de facebook <i style='margin-left:30px;color:blue;font-size:25px' class='fa fa-facebook-square fa-6'></i></a>"
                            ."</div>"
                        ."</div>";


              }elseif($row['correo'] != 'sin correo') {
                 echo "<div class=' panel'>"
                          ."<div class='panel-heading'>"
                            ."<strong>Mensaje de: </strong>".$row['asunto'].""
                            ."</div>"
                            ."<div class='panel-body'>"
                            ."<p>".$row['contenido']."</p>"
                            ."<hr>"
                            ."<a style='color:#123' class='btn btn-info' href='mailto:".$row['correo']."' >Enviar correo <i style='margin-left:30px;color:blue;font-size:25px' class='fa fa-send fa-6'></i></a>"
                            ."</div>"
                        ."</div>";


                     }
                   }
                   ob_end_flush();

             ?>
          
      <section class="slideshow">
     
        <nav>
          <span class="icon nav-prev"></span>
          <span class="icon nav-next"></span>
          <span class="icon nav-close"></span>
        </nav>
        <div class="info-keys icon">Navigate with arrow keys</div>
      </section><!-- // slideshow -->
    </div>  
    </section>
</section>
</section>
<?php include_once('../protected/includes/bottomJs.php') ?>
<?php include_once('../protected/includes/bottomJsGallery.php') ?>
</body>
</html>
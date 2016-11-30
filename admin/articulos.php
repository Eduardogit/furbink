<!DOCTYPE html>
<html lang="en">
<head>
<?php  include_once('../protected/conf/connection.php');?>

 <?php include_once('../protected/includes/head.php') ?>
 <link rel="stylesheet" href="../assets/css/imgpreview.css">
  <?php 
    session_start();
    if(empty($_SESSION['usuario'])){
        header('Location:logout.php');
    }
   ?>
 <title>Post</title>
</head>
<body>
  <style>
    #cke_1_top{
      background: #000!important;
    }
    .panel{
    height:100%;
    position:relative;
    overflow:hidden;
  }
 .panel:before{
    content:'';
    position:absolute;
    top:0; right:0;
    width:100%; height:100%;
    background-color: #888;
    border-right:10px solid #ccc;
    opacity: 0.5;
    -webkit-transform-origin:100% 100%;
    -ms-transform-origin:100% 100%;
    transform-origin:100% 100%;
    
    -webkit-transform:skewX(30deg);
    -ms-transform:skewX(30deg);
    transform:skewX(30deg);
    transition: all .8s ease;

  }
  .panel:hover{
    transition: all .8s ease;
    transform: scale(1.1)!important;
    position: relative;
  }
  h2{
    font-size:15px;
    z-index: 10000;
    color: #123;
  }
  .titulo{
    text-align: center;
  }
  .editar{
    z-index: 1000;
    position: relative;
  }
  img{
    z-index: 10001;
    position:relative;
  }


/******  FOR THE DEMO  *******/


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
          $sql2    = "SELECT nombre_categoria FROM CATEGORIA where id_categoria = ".$row['id_categoria_fk']."";
          $sql1    = "SELECT url FROM IMG where id_post_fk = ".$row['id_post']."";
          $result_categoria= $connection->query($sql2);
          $result_img= $connection->query($sql1);
          $categoria = $result_categoria->fetch_assoc();
          $img = $result_img->fetch_assoc();
          echo "<div style='padding:10px;margin:20px;' class='col-md-3 col-md-offset-3 panel '>".
                  "<img class='img-responsive' style='width:300px;height:300px' src='../protected/uploads/".$img['url']."'></img>".
                    "<h4>".$row['titulo']."</h4>".
                    "<h5 class='titulo'>fecha: ".date('d/m/Y',strtotime($row['fecha']))."|<strong> ".$categoria[nombre_categoria]."</strong>| usuario</h5>".
                    "<a  href='post.php?id=$row[id_post]'><button class='editar pull-right btn btn-primary'>Editar</button></a>".
                    "<a  href='../protected/controllers/eliminarpost.php?id=$row[id_post]'><button class='editar pull-right btn btn-danger'>Eliminar</button></a>".
               "</div>";
          
            
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

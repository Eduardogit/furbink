<?php include_once('protected/conf/connection.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>::Furbink Studio Tattoo BLOG::</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/front/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/front/css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/front/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
<style>
body{
    overflow-x:hidden;
}
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
  .ir{
    z-index: 1000;
    position: relative;
  }
  img{
    z-index: 10001;
    position:relative;
  }


/******  FOR THE DEMO  *******/


</style>
  

    <body>
      <!-- Navigation -->
      <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" id="name" href="#">Furbink</a>
          </div>
              <ul class="nav navbar-nav">
                  <li class=""><a href="#">Inicio</a></li>
                  <li class=""><a href="#services">Servicios</a></li>
                  <li><a href="#portfolio">Galeria</a></li>
                  <li class="active"><a href="blog.php">Blog</a></li>
                  <li><a href="#contact">Contacto</a></li>
              </ul>
          </div>
      </nav>
    <!-- Header -->
    <header style="height: 500px;" id="top" class="header">
    <div class="text-vertical-center2">
        <h1 id="a">Articulos</h1>
        <br>
    </div>
    </header>
    <img id="head" class="img-responsive" src="assets/front/img/machinetattoo.gif">

    <section  id="container" class="">
    <?php include('../protected/views/header.php') ?>
    <?php include('../protected/views/sidebar.php') ?>
    <section id="main-content">
      <section class="wrapper">      
      <div class="container">
        <div class="row">
 

        <div class="col-md-12 col-md-offset-1">
            

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
          echo "<div style='padding:10px;margin:20px;' class='col-md-3  panel '>".
                  "<img class='img-responsive' style='width:300px;height:300px' src='protected/uploads/".$img['url']."'></img>".
                    "<h4>".$row['titulo']."</h4>".
                    "<h5 class='titulo'>fecha: ".date('d/m/Y',strtotime($row['fecha']))."|<strong> ".$categoria[nombre_categoria]."</strong>| usuario</h5>".
                    "<a  class='ir pull-left btn btn-primary' href='post.php?id=".$row['id_post']."'> IR AL ARTICULO </a>".
               "</div>";
          
            
        }

       ?>
                  </div>

        </div>
      </div>
      </section>
    </section>
  </section>
</body>
</html>
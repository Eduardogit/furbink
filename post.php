<html lang="en" scrolltop="NaN">


<head>

<?php
    include_once('protected/conf/connection.php');
    include_once('protected/includes/head-front.php');
      include_once('protected/includes/headGallery-front.php');
?>

<style type="text/css">.gm-err-container{height:100%;width:100%;display:table;background-color:#e0e0e0;position:relative;left:0;top:0}.gm-err-content{border-radius:1px;padding-top:0;padding-left:10%;padding-right:10%;position:static;vertical-align:middle;display:table-cell}.gm-err-content a{color:#4285f4}.gm-err-icon{text-align:center}.gm-err-title{margin:5px;margin-bottom:20px;color:#616161;font-family:Roboto,Arial,sans-serif;text-align:center;font-size:24px}.gm-err-message{margin:5px;color:#757575;font-family:Roboto,Arial,sans-serif;text-align:center;font-size:12px}.gm-err-autocomplete{padding-left:20px;background-repeat:no-repeat;background-size:15px 15px}</style><style type="text/css">.gm-style-pbc{transition:opacity ease-in-out;background-color:rgba(0,0,0,0.45);text-align:center}.gm-style-pbt{font-size:22px;color:white;font-family:Roboto,Arial,sans-serif;position:relative;margin:0;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}</style><link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700"><style type="text/css">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px}</style><style type="text/css">@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style><style type="text/css">.gm-style{font-family:Roboto,Arial,sans-serif;font-size:11px;font-weight:400;text-decoration:none}.gm-style img{max-width:none}</style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Galeria</title>
  <link href="front/css/bootstrap.min.css" rel="stylesheet">
  <link href="front/css/style.css" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Montserrat:400,700" rel="stylesheet" type="text/css">
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!--[if IE]><link rel="stylesheet" type="text/css" href="front/css/ie.css" /><![endif]-->
  <script type="text/javascript" charset="UTF-8" src="http://maps.google.com/maps-api-v3/api/js/26/9/common.js"></script>
  <script type="text/javascript" charset="UTF-8" src="http://maps.google.com/maps-api-v3/api/js/26/9/map.js"></script>
  <script type="text/javascript" charset="UTF-8" src="http://maps.google.com/maps-api-v3/api/js/26/9/util.js"></script>
  <script type="text/javascript" charset="UTF-8" src="http://maps.google.com/maps-api-v3/api/js/26/9/marker.js"></script>
  <script type="text/javascript" charset="UTF-8" src="http://maps.google.com/maps-api-v3/api/js/26/9/onion.js"></script>
  <script type="text/javascript" charset="UTF-8" src="http://maps.google.com/maps-api-v3/api/js/26/9/stats.js"></script>
  <script type="text/javascript" charset="UTF-8" src="http://maps.google.com/maps-api-v3/api/js/26/9/controls.js"></script>

  <link rel="stylesheet" href="assets/css/each.css">



  </head>
<body>
    <div class="sticky-wrapper" style="">
    <div class="navigation">
      <div class="container">
        <div class="row">
          <div class="col-md-12 navbar navbar-default" role="navigation">
            <div class="logo">
              <a href="index.php" title="Inkd." class="navbar-brand">Furb-<span>ink.</span></a>
            </div>
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
              <li>
                  <a href="#hero" title="Inicio">
                    <span data-hover="Inicio">Inicio</span>
                  </a>
                </li>
                <li class="">
                  <a href="#about" title="Servicios">
                    <span data-hover="Servicios">Servicios</span>
                  </a>
                </li>
                <li class="">
                  <a href="galeria.php" title="Galeria">
                    <span data-hover="Galeria">Galeria</span>
                  </a>
                </li>
                <li class="">
                  <a href="#contact" title="Contacto">
                    <span data-hover="Contacto">Contacto</span>
                  </a>
                </li>
                <li>
                  <a href="blog.php" title="Blog">
                    <span data-hover="Blog">Blog</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>



<div class="container-fluid">
	<div class="row">
		<div id="contenedor" class="col-md-8 col-md-offset-2">
	<?php 
	include_once('protected/conf/connection.php');
	$in = mysqli_real_escape_string($connection,$_GET['id']);

    $sql    = "SELECT * FROM POST WHERE id_post = $in";
    $result = $connection->query($sql);
    foreach ($result as $row) {
      $sql2    = "SELECT nombre_categoria FROM CATEGORIA where id_categoria = ".$row['id_categoria_fk']."";
      $sql1    = "SELECT url FROM IMG where id_post_fk = ".$row['id_post']."";
      $result_categoria= $connection->query($sql2);
      $result_img= $connection->query($sql1);
      $categoria = $result_categoria->fetch_assoc();
      $img = $result_img->fetch_assoc();
      echo "<div   class='principal  col-md-12'>".
              "<div id='img' style='height:650px;background:url(protected/uploads/".$img['url'].")no-repeat center center fixed;background-size:cover;background-position:top'>".
                "<h4 id='titulo' class='text-center'>".$row['titulo']."</h4>".
                 "<p class='datos text-center'>".date('d/m/Y',strtotime($row['fecha']))."|<strong> ".$categoria[nombre_categoria]."</strong>| usuario</p>".
              "</div>".
            "</div>".
            "<section id='texto'>".
                 "<p id='contenido' class='col-md-12'>".$row['contenido']."</p>".
            "</section>".
            "<div class='fb-comments' data-href='http://localhost/Furbink/post.php?id=".$row['id_post']."'data-width='800px' data-mobile='true' data-numposts='5'></div>".
            "</div>";
      
        
    }          
   ?>
   </div>
   </div>
</div>
  <!-- Footer -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>Powered By Glosbe Learners<br>
              <a href="#hero" title="Back to top">Regresar arriba</a></p>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer end -->
    <!-- Javascript plugins -->
    <script src="front/js/jQuery.min.js"></script>
    <script src="front/js/bootstrap.min.js"></script>
    <script src="front/js/jquery.stellar.min.js"></script>
    <script src="front/js/waypoints.min.js"></script>
    <script src="front/js/waypoints-sticky.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="front/js/gmap3.min.js"></script>
    <script src="front/js/jquery.queryloader2.min.js"></script>
    <script src="front/js/jquery.magnific-popup.min.js"></script>
    <script src="front/js/jqueryUI.custom.min.js"></script>
    <script src="front/js/timePicker.js"></script>
    <script src="front/js/custom.js"></script>

<?php include_once('protected/includes/bottomJsGallery-front.php') ?>

</body>
</html>
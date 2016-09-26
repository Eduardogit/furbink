<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Galeria</title>
	<?php 
	  include_once('protected/conf/connection.php');
	  include_once('protected/includes/head-front.php');
  	  include_once('protected/includes/headGallery-front.php');

	 ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


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
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" id="name" href="#">Furbink</a>
          </div>
              <ul class="nav navbar-nav">
                  <li class=""><a href="#">Inicio</a></li>
                  <li class=""><a href="#services">Servicios</a></li>
                  <li class="active"><a href="galeria.php">Galeria</a></li>
                  <li ><a href="blog.php">Blog</a></li>
                  <li><a href="#contact">Contacto</a></li>
              </ul>
          </div>
      </nav>
        <header style="height: 500px;" id="top" class="header">
    <div class="text-vertical-center2">
        <h1 id="a">Galeria</h1>
        <br>
    </div>
    </header>
    <img id="head" class="img-responsive" src="assets/front/img/machinetattoo.gif">

	    <div id="grid-gallery" class="grid-gallery">
			<section class="grid-wrap">
				<ul style="position: relative; height: 3414.13px;" class="grid">
					<li style="position: absolute; left: 0px; top: 0px;" class="grid-sizer"></li><!-- for Masonry column width -->
			          <?php 

			        $sql    = "SELECT * FROM GALERIA ORDER BY id_galeria DESC";
			        $result = $connection->query($sql);
			        foreach ($result as $row) {
			        	echo "<li  style='position: absolute; left: 0px; top: 0px;' >".
			        		
			        			"<figure class='fig'>".
			        			"<img src='protected/uploads/".$row['url']."' alt='img".$row['id_galeria']."'>".
			        			"<figcaption>".
			        				"<h3>".$row['nombre_foto']."</h3>".
			        				"<p>".$row['descripcion']."</p>".
			        			"</figcaption>".
			        			"</figure>".

			        		"</li>"
			        	;
			         }
			       ?>
					
				</ul>
			</section><!-- // grid-wrap -->
			<section class="slideshow">
				<ul>
				    <?php 

			        $sql    = "SELECT * FROM GALERIA ORDER BY id_galeria DESC";
			        $result = $connection->query($sql);
			        foreach ($result as $row) {
			        	echo "<li  class='' >".
			        		
			        			"<figure>".
			        			"<figcaption>".
			        				"<h3>".$row['nombre_foto']."</h3>".
			        				"<p>".$row['descripcion']."</p>".
			        			"</figcaption>".
			        			"<img class='img-responsive' src='protected/uploads/".$row['url']."' alt='img".$row['id_galeria']."'>".
			        			"</figure>".

			        		"</li>"
			        	;
			         }
			       ?>
					
				</ul>
				<nav>
					<span class="icon nav-prev"></span>
					<span class="icon nav-next"></span>
					<span class="icon nav-close"></span>
				</nav>
				<div class="info-keys icon">Navigate with arrow keys</div>
			</section><!-- // slideshow -->
		</div>  
<?php include_once('protected/includes/bottomJs-front.php') ?>
<?php include_once('protected/includes/bottomJsGallery-front.php') ?>
</body>
</html>
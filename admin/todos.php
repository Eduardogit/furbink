<!DOCTYPE html>
<html lang="en">
<head>
 <?php
  include_once('../protected/conf/connection.php');
  include_once('../protected/includes/head.php');
  include_once('../protected/includes/headGallery.php');
  ?>
</head>
<body>
<section id="container" class="">
     
     
      <?php include('../protected/views/header.php') ?>    
      <!--header end-->

     <?php include_once('../protected/views/sidebar.php') ?>
<section id="main-content">
    <section class="wrapper">    
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
			        			"<img src='../protected/uploads/".$row['url']."' alt='img".$row['id_galeria']."'>".
			        			"<figcaption>".
			        				"<h3>".$row['nombre_foto']."</h3>".
			        				"<p>".$row['descripcion']."</p>".
                    				"<a  href='../protected/controllers/eliminargaleria.php?id=$row[id_galeria]'><button class='editar  btn btn-danger'>Eliminar</button></a>".
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
			        			"<img class='img-responsive' src='../protected/uploads/".$row['url']."' alt='img".$row['id_galeria']."'>".
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
    </section>
</section>
</section>
<?php include_once('../protected/includes/bottomJs.php') ?>
<?php include_once('../protected/includes/bottomJsGallery.php') ?>
</body>
</html>
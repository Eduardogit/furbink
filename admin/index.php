<?php
 ob_start();
 session_start(); 
    if(empty($_SESSION['usuario'])){
        header('Location:logout.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<?php include_once('../protected/includes/head.php') ?>
  <?php include_once('../protected/api/instagram.php') ?>
  <?php include_once('../protected/controllers/indexInfo.php') ?>

</head>

<body>

  <!-- container section start -->
  <section id="container" class="">


    <?php include('../protected/views/header.php') ?>    
    <!--header end-->

    <!--sidebar start-->
    <?php include_once('../protected/views/sidebar.php') ?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">            
        
      
      <!-- ALERTA PUBLICACION -->
      <?php
      if(isset($_GET['post'])){
        if($_GET['post'] == "actualizado"){

      echo ''.
      '<div class="alert alert-success">'.
        '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
        '<strong>Correcto!</strong> Articulo Actualizado'.
      '</div>';

        }elseif ($_GET['post'] =="ok") {
        echo ''.
        '<div class="alert alert-info">'.
          '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
          '<strong>Correcto!</strong> Articulo Publicado'.
        '</div>';
        }elseif ($_GET['post'] =="eliminado") {
          echo ''.
          '<div class="alert alert-danger">'.
            '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
            '<strong>Correcto!</strong> Articulo Eliminado'.
          '</div>';
        }
       }?>

       <?php
      if(isset($_GET['galeria'])){
        if($_GET['galeria'] == "actualizado"){

      echo ''.
      '<div class="alert alert-success">'.
        '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
        '<strong>Correcto!</strong> Galeria Actualizado'.
      '</div>';

        }elseif ($_GET['galeria'] =="ok") {
        echo ''.
        '<div class="alert alert-info">'.
          '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
          '<strong>Correcto!</strong> Galeria Publicado'.
        '</div>';
        }elseif ($_GET['galeria'] =="eliminado") {
          echo ''.
          '<div class="alert alert-danger">'.
            '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
            '<strong>Correcto!</strong> Galeria Eliminado'.
          '</div>';
        }
       }?>
       <!-- FIN ALERTA PUBLICACION-->


        <!--overview start-->
				<div class="row">
					<div class="col-lg-12">
						<h3 class="page-header"><i class="fa fa-laptop"></i> Panel </h3>
						<ol class="breadcrumb">
							<li><i class="fa fa-home"></i><a href="index.html">Inicio</a></li>
							<li><i class="fa fa-laptop"></i>Panel de Administracion</li>						  	
						</ol>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="info-box blue-bg">
							<i class="fa fa-file-picture-o"></i>
							<div class="count"><?php echo $numero_galeria ?></div>
							<div class="title">Imagenes</div>						
						</div><!--/.info-box-->			
					</div><!--/.col-->

					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="info-box brown-bg">
							<i class="fa fa-paper-plane-o"></i>
							<div class="count"><?php echo $numero_post ?></div>
							<div class="title">Publicaciones</div>						
						</div><!--/.info-box-->			
					</div><!--/.col-->	

					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="info-box dark-bg">
							<i class="fa fa-thumbs-o-up"></i>
							<div class="count">500</div>
							<div class="title">Facebook likes</div>						
						</div><!--/.info-box-->			
					</div><!--/.col-->

					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="info-box green-bg">
							<i class="fa fa-instagram"></i>
							<div class="count"><?php echo $likes ?></div>
							<div class="title">Instagram followers</div>						
						</div><!--/.info-box-->			
					</div><!--/.col-->

				</div><!--/.row-->
				<h2>Publicaciones recientes</h2>
			<div class="panel-group m-bot20" id="accordion">
                   <?php
                      $sql    = "SELECT * FROM POST ORDER BY id_post DESC ";
                      $result = $connection->query($sql);
                      foreach ($result as $row) {
                        $sql2    = "SELECT nombre_categoria FROM CATEGORIA where id_categoria = ".$row['id_categoria_fk']."";
                        $sql1    = "SELECT url FROM IMG where id_post_fk = ".$row['id_post']."";
                        $result_categoria= $connection->query($sql2);
                        $result_img= $connection->query($sql1);
                        $categoria = $result_categoria->fetch_assoc();
                        $img = $result_img->fetch_assoc();
                        ?>

                          <div class="panel panel-default">
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                      <?php
                                        echo  "<h4>".$row['titulo']."</h4>";                                             
                                        ?>
                                      </a>
                                  </h4>
                              </div>
                          </div>
                              <?php
                                }
                             ?>                       
                      </div>
			</section>
			<!--main content end-->
		</section>
		<!-- container section start -->

		<!-- javascripts -->
		<?php include('../protected/includes/bottomJs.php') ?>

	</body>
	</html>

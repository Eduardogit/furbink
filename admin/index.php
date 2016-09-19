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
							<div class="count">74</div>
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
                          <div class="panel panel-default">
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                          10 Corrientes de tautajes parte I
                                      </a>
                                  </h4>
                              </div>
                              <div style="height: auto;" id="collapseOne" class="panel-collapse in">
                                  <div class="panel-body">
                                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                  </div>
                              </div>
                          </div>
                          <div class="panel panel-default">
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                      <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                          10 Corrientes de tautajes parte II
                                      </a>
                                  </h4>
                              </div>
                              <div id="collapseTwo" class="panel-collapse collapse">
                                  <div class="panel-body">
                                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                  </div>
                              </div>
                          </div>
                          <div class="panel panel-default">
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                      <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                          Tatuajes de tus besos llevo
                                      </a>
                                  </h4>
                              </div>
                              <div style="height: 0px;" id="collapseThree" class="panel-collapse collapse">
                                  <div class="panel-body">
                                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                  </div>
                              </div>
                          </div>
							<div class="panel panel-default">
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                      <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                          lorem Anim pariatur cliche reprehenderit
                                      </a>
                                  </h4>
                              </div>
                              <div style="height: 0px;" id="collapseThree" class="panel-collapse collapse">
                                  <div class="panel-body">
                                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                  </div>
                              </div>
                          </div>
                          <div class="panel panel-default">
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                      <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                          lorem Anim pariatur cliche reprehenderit
                                      </a>
                                  </h4>
                              </div>
                              <div style="height: 0px;" id="collapseThree" class="panel-collapse collapse">
                                  <div class="panel-body">
                                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                  </div>
                              </div>
                          </div>

                      </div>
                      <h2>Mas gustado</h2>
			</section>
			<!--main content end-->
		</section>
		<!-- container section start -->

		<!-- javascripts -->
		<?php include('../protected/includes/bottomJs.php') ?>

	</body>
	</html>

<!DOCTYPE html>
<html lang="en">
<head>
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

      <!--======= FORM INICIO ================= -->
        <form enctype="multipart/form-data" action="../protected/controllers/insertpost.php" method="POST">
          <div class="col-md-12">
            <div class="panel">
              <div class="panel-heading"><h1>TITULO</h1></div>
              <div class="panel-body">
              <input class="form-control" name="titulo" type="text" placeholder="Ingresa el titulo">
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <section class="panel">
              <div class="panel-heading"><h1>CONTENIDO</h1></div>

              <div class="panel-body">
                <div class="form">
                    <div class="form-group">
                      <div class="col-sm-12">
                        <textarea class="form-control ckeditor" name="editor1" rows="6"></textarea>
                      </div>
                    </div>
                </div>
              </div>
            </section>
          </div>
        </div>
        <div class="col-md-12  row">

          <div id="image-preview" class="col-md-2 col-md-offset-4 col-sm-2 col-sm-offset-1 ">
            <label for="image-upload" id="image-label">fondo de articulo</label>
            <input type="file" name="image" id="image-upload" />
          </div>
        </div>
        <button id="publicar" style="margin-left:20px" class="btn btn-primary btn-lg pull-right" >PUBLICAR ARTICULO</button> 
        </form>
        <button id="guardar" class="btn btn-success btn-lg pull-right" >GUARDAR</button>
      </section>
    </section>
  </section>
<?php include('../protected/includes/bottomJs.php') ?>
</body>
</html>
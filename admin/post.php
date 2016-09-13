<!DOCTYPE html>
<html lang="en">
<head>
 <?php include_once('../protected/includes/head.php') ?>
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
      <div class="col-md-12">
        <div class="panel">
          <div class="panel-body">
            <input class="form-control" type="text" placeholder="Ingresa el titulo">
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <section class="panel">

          <div class="panel-body">
            <div class="form">
              <form action="#" class="form-horizontal">
                <div class="form-group">
                  <div class="col-sm-12">
                    <textarea class="form-control ckeditor" name="editor1" rows="6"></textarea>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </section>
      </div>
    </div>
    <div class="panel">
      <div class="panel-body">
        <div class="form-group">
          <label for="exampleInputFile">Subir fotografia</label>
          <input id="exampleInputFile" type="file">
        </div>
        <button type="submit" class="pull-right btn btn-lg btn-primary">Realizar Publicacion</button>
      </div>
    </div>
  </section>
</section>
</section>
<?php include('../protected/includes/bottomJs.php') ?>



</body>
</html>
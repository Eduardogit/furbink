<!DOCTYPE html>
<html lang="en">
<head>
 <?php include_once('../protected/includes/head.php') ?>
<?php include_once('../protected/conf/connection.php'); ?>
 <link rel="stylesheet" href="../assets/css/imgpreview.css">
 <title>Post</title>
</head>
<?php 
    session_start();
    if(empty($_SESSION['usuario'])){
        header('Location:logout.php');
    }
   ?>
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
    <?php if(isset($_GET['id'])){
      $form = 'actualizarpost.php';
      $button = 'ACTUALIZAR';
      $id_post = $_GET['id'];
    }else{
      $form = 'insertpost.php';
      $button = 'PUBLICAR';

    }
     ?>

        <form enctype="multipart/form-data" action="../protected/controllers/<?php echo $form?>" method="POST">
          <div class="col-md-12">
            <div class="panel">
              <div class="panel-heading"><h1>TITULO</h1></div>
              <div class="panel-body">
              <input id="titulo" class="form-control" name="titulo" type="text" placeholder="Ingresa el titulo">
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
                        <textarea id="contenido" class="form-control ckeditor" name="editor1" rows="6"></textarea>
                      </div>
                    </div>
                </div>
              </div>
            </section>
          </div>
        </div>
        <div class="col-md-12">
        <div class="panel ">
        <div class="panel-heading">
          <h2>CATEGORIA</h2>
        </div>
          <div class="panel-body ">
          <select id="categoria" name="categoria" class="form-control" id="">
            <?php 
            $sql = "SELECT * FROM CATEGORIA";
              $result = $connection->query($sql);
              foreach ($result as $row) {
                echo "<option value='$row[id_categoria]'>$row[nombre_categoria]</option>";
              }
             ?>
           </select>
           </div>
           </div>
        </div>
        <div class="col-md-12  row">

          <div id="image-preview" class="col-md-2 col-md-offset-4 col-sm-2 col-sm-offset-1 ">
            <label for="image-upload" id="image-label">fondo de articulo</label>
            <input type="file" name="image" id="image-upload" />
          </div>
        </div>
        <button id="publicar" style="margin-left:20px" class="btn btn-primary btn-lg pull-right" ><?php echo $button?> ARTICULO</button> 
        <input type="hidden" name="id" value="<?php echo $id_post?>">
        </form>
      </section>
    </section>
  </section>
<?php include('../protected/includes/bottomJs.php') ?>

  <?php
  $id_post = $_GET['id'];
  $sql1 = "SELECT * FROM POST WHERE id_post = ".$id_post."";
  $result = $connection->query($sql1);
  $row = $result->fetch_assoc();
  $sql2    = "SELECT url FROM IMG where id_post_fk = ".$row['id_post']."";
  $result_img = $connection->query($sql2);
  $row_img = $result_img->fetch_assoc();
  $contenido = str_replace('<br />','<br />\\',nl2br($row['contenido']));

 ?>
  <script>
  $('#titulo').val('<?php print_r( $row[titulo]) ?>')      
  $('#contenido').val('<?php print_r( $contenido) ?>')      
  $('#categoria option').eq(<?php echo $row['id_categoria']-1 ?>).prop('selected', true);
  console.log('../protected/uploads/<?php echo $row_img['url']; ?>')
  $('#image-preview').css("background-image","url('../protected/uploads/<?php echo $row_img['url']; ?>')")

    
  </script>
</body>
</html>

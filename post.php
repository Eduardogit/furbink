<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Articulos</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>::Furbink Studio Tattoo::</title>

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
<style>
	body{
		overflow-x:hidden;
		background: #ccc;
	}
	#contenedor{
		background: #fff;
	}
	.principal {
	display:table;
	text-align:center;
	float:left;
	}
	.principal #img {
		display:block;
		float:none;
	}

</style>
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
      echo "<div   class='principal col-md-12'>".
      "<div id='img' style='height:500px;background:url(protected/uploads/".$img['url'].")center center fixed;background-size:cover;'>".
      " </div></div>".
                "<h4>".$row['titulo']."</h4>".
                "<p class='col-md-12'>".$row['contenido']."</p>".
                "<h5 class='titulo'>fecha: ".date('d/m/Y',strtotime($row['fecha']))."|<strong> ".$categoria[nombre_categoria]."</strong>| usuario</h5>".
           "</div>";
      
        
    }          
	 ?>
	 </div>
	 </div>
</div>
</body>
</html>
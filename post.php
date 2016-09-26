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
    <ul class="topnav" id="myTopnav">
              <li class="active"><a href="inicio.php#">Inicio</a></li>
              <li><a href="inicio.php#services">Servicios</a></li>
              <li><a href="galeria.php">Galeria</a></li>
              <li><a href="blog.php">Blog</a></li>
              <li><a href="inicio.php#contact">Contacto</a></li>
              <li class="icon">
                    <a href="javascript:void(0);" onclick="myFunction()"><span class="glyphicon glyphicon-align-justify"></span></a>
              </li>
          </ul>
     

<style>
  @font-face {
    font-family: 'titulo';
    src: url('assets/fonts/B.otf');
  }

	body{
		overflow-x:hidden;
		background: #ccc;
	}
  #contenedor,.principal{
    box-shadow: 0px 0px 10px;
		background: #fff;
    padding: 0px;
  }
  #titulo{
    padding-top: 20vh;
    color: #fff;
    font-size: 60px;
      padding-left: 10px;
    font-family: 'titulo'    
  }
  #texto{
    padding: 20px;
  }
  #texto::first-letter{
    font-size: 300%;
  }
  .datos{
    margin-top: 50px;
    font-size: 40px;
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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.7&appId=1070525586357233";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '176868826060401',
      xfbml      : true,
      status     :true, 
      cookie     :true, 
      version    : 'v2.7'
    });
    FB.getLoginStatus(function(response) {
      console.log(JSON.stringify(response));
      if(response.status == 'connected'){
        document.getElementById('status').innerHTML = "Conectado!";
      }else{
        login();
      }
    })
  };
  function login(){
   FB.login(function(response) {
        if (response.authResponse) {
           // proceed
        } else {
           // not auth / cancelled the login!
        }
      });
  }


  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

    function myFunction() {
      var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
          } 
        else {
          x.className = "topnav";
          }
    }


</script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once('../protected/includes/head.php');?>
	<title>Galeria</title>
	<script src="../assets/js/dropzone.js"></script>
	<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">

</head>
<body>
	<section id="container" class="">


		<?php include('../protected/views/header.php') ?>    
		<!--header end-->

		<!--sidebar start-->
		<?php include_once('../protected/views/sidebar.php') ?>
		<!--sidebar end-->

		<!--main content start-->
		<section id="main-content">
			<section class="wrapper">            
				<form action="../protected/uploads" class="dropzone">
					<div id="myId" class="fallback">
					<input name="file" type="file" multiple />
					</div>
				</form>
			</section>
		</section>
	</section>
	<?php include('../protected/includes/bottomJs.php') ?>
	<script>
		var myDropzone = new Dropzone("div#myId", { url: "../protected/uploads"});		
	</script>
</body>
</html>
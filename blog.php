<?php include_once('protected/conf/connection.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
</head>
<body>
	<?php 
 	$sql    = "SELECT * FROM POST ORDER BY id_post DESC";
    $result = $connection->query($sql);
    
    foreach ($result as $row) {
    	$sql1    = "SELECT url FROM IMG where id_post_fk = ".$row['id_post']."";
    	$result_img= $connection->query($sql1);
		echo "</br>";
    	echo $row['titulo'];
    	echo $row['contenido'];
    	echo "</br>";
    	foreach ($result_img as $img) {
    		echo "<img src='protected/uploads/".$img['url']."' ";
    	echo "</br>";
    	}
	    	
    }

	 ?>
</body>
</html>
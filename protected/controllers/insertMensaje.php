<?php
ob_start();
include_once('../conf/connection.php');
$mensaje 	 =  $_POST['mensaje'];
$facebookname= $_POST['facebookname'];
$facebook 	 =$_POST['facebook'];
$correo 	 =$_POST['correo'];
$nombre 	 =$_POST['nombre'];
$fotos		 = $_POST['fotos'];
$sql = "";
$sqlFotos = "";
$arrFotos = [];
$arrFotos =  explode(',', $fotos);
$con = $connection;
if(empty($nombre)){
 	 $sql .= "INSERT INTO MENSAJES(asunto,status,contenido,facebook,correo) VALUES ('".$facebookname."','close','".$mensaje."','".$facebook."','sin correo')";
 	 	$connection->query($sql);

}else{
 	 $sql .= "INSERT INTO MENSAJES(asunto,status,contenido,facebook,correo) VALUES ('".$nombre."','close','".$mensaje."','sin facebook','".$correo."')";
 		$connection->query($sql);

}

if(count($arrFotos) > 0){
	$id = $connection->insert_id;
	foreach ($arrFotos as $key ) {
		echo ">:\n";
		$sqlFotos ="INSERT INTO MENSAJES_GALERIA (id_galeria_fk,id_mensaje_fk) VALUES (".$key.",$id)";
		print_r($con->query($sqlFotos));
	}
		$con->close();
}
        //die();
        //$connection->query($sql);
        //if ($connection->query($sql) === TRUE) {
        //    echo "New record created successfully";
        //} else {
        //    echo "Error: " . $sql . "<br>" . $connection->error;
        //}
		echo "Fin";
        $connection->close();
header('Location:../../');
ob_end_flush();
?>
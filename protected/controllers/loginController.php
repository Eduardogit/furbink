<?php
 ob_start();


include_once('../conf/connection.php');
$usuario = $_POST['usuario'];
$password = $_POST['password'];
echo $password;
echo $usuario;
$sqli = "SELECT * FROM USUARIO WHERE username = '$usuario' and password  = '$password'";
$res = $connection->query($sqli);
$arr = $res->fetch_assoc();
if(empty($arr)){
	echo "INVALIDO";
	header('Location:../../admin/login.php');
	ob_end_flush();
}else{
	echo "VALIDO";
	session_start();
	$_SESSION['usuario'] = $arr['username'];
	header('Location:../../admin/index.php');
}
ob_end_flush();
 ?>


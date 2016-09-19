<?php 
include_once('../conf/connection.php');
$id_post = $_POST['id'];
$data = [];
$data[] = $_POST['titulo'];
$data[] = $_POST['editor1'];
$data[] = (empty(basename( $_FILES["image"]["name"])))?"":basename( $_FILES["image"]["name"]);
$data[] = $_POST['categoria'];

if(!empty($data[2])){

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
$check = getimagesize($_FILES["image"]["tmp_name"]);
if($check !== false) {
    echo "IMAGEN INVALIDA- " . $check["mime"] . ".";
    $uploadOk = 1;
} else {
    echo "EL ARCHIVO NO ES UNA IMAGEN.";
    $uploadOk = 0;
}
}
// Check if file already exists
//if (file_exists($target_file)) {
//    echo "LA IMAGEN YA EXISTE.";
//    $uploadOk = 0;
//}
// Check file size
if ($_FILES["image"]["size"] > 115000000) {
echo "IMAGEN DEMASIADO PESADA.";
$uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
echo "SOLO  JPG, JPEG, PNG & GIF SON PERMITIDOS.";
$uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
echo "ERROR ARCHIVO NO SUBIDO";
// if everything is ok, try to upload file
} else {
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {

    $sql = "UPDATE POST SET titulo = '$data[0]' ,contenido = '$data[1]',status = 'publicado' ,id_categoria_fk = $data[3] WHERE id_post ='$id_post'";
    //die();
    $connection->query($sql);
    //if ($connection->query($sql) === TRUE) {
    //    echo "New record created successfully";
    //} else {
    //    echo "Error: " . $sql . "<br>" . $connection->error;
    //}
    if(!empty($data[2])){
        $sql1 = "UPDATE IMG SET url = '$data[2]' WHERE id_post_fk = '$id_post'";
        $connection->query($sql1);
    }
    //if ($connection->query($sql) === TRUE) {
    //    echo "New record created successfully";
    //} else {
    //    echo "Error: " . $sql . "<br>" . $connection->error;
    //}

    $connection->close();
    header('location:../../admin/index.php?post=actualizado');
} else {
    echo "ERROR SUBIENDO ARCHIVO";
}
}
} else {// COMPARACION SI IMAGEN ESTA SETEADA 
    $sql = "UPDATE POST SET titulo = '$data[0]' ,contenido = '$data[1]',status = 'publicado' ,id_categoria_fk = $data[3] WHERE id_post = '$id_post'";
    //die();
    $connection->query($sql);
    header('location:../../admin/index.php?post=actualizado');

}

?>


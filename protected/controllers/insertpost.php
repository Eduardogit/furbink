<?php 
include_once('../conf/connection.php');
$data = [];
$data[] = $_POST['titulo'];
$data[] = $_POST['editor1'];
$data[] = basename( $_FILES["image"]["name"]);
print_r($data);
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
if (file_exists($target_file)) {
    echo "LA IMAGEN YA EXISTE.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["image"]["size"] > 11500000) {
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
        echo "FOTO ". basename( $_FILES["image"]["name"]). " SUBIDO!.";
        $sql = "INSERT INTO POST(titulo,contenido,id_usuario_fk)VALUES ('$data[0]', '$data[1]' ,1)";
        $connection->query($sql);
        //if ($connection->query($sql) === TRUE) {
        //    echo "New record created successfully";
        //} else {
        //    echo "Error: " . $sql . "<br>" . $connection->error;
        //}
        $sql1 = "INSERT INTO IMG(url,id_post_fk)VALUES('$data[2]' ,'$connection->insert_id')";
        $connection->query($sql1);
        //if ($connection->query($sql) === TRUE) {
        //    echo "New record created successfully";
        //} else {
        //    echo "Error: " . $sql . "<br>" . $connection->error;
        //}

        $connection->close();
        header('location:../../admin/index.php?post=ok');
    } else {
        echo "ERROR SUBIENDO ARCHIVO";
    }
}

?>
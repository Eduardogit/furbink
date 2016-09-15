<?php 
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
if ($_FILES["image"]["size"] > 1500000) {
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
    } else {
        echo "ERROR SUBIENDO ARCHIVO";
    }
}
?>
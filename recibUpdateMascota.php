<?php
include('config.php');
$idMascota           = $_REQUEST['idMascota'];
$nombreMascota       = $_REQUEST['nombreMascota'];
$sexoMascota         = $_REQUEST['sexoMascota']; 
$tipoMascota         = $_REQUEST['tipoMascota'];
$raza_mascota        = $_REQUEST['raza_mascota'];

$updateDatosMascota = ("UPDATE mascotas SET 
        nombreMascota='".$nombreMascota."',
        sexoMascota='".$sexoMascota."',
        tipoMascota='".$tipoMascota."',
        raza_mascota='".$raza_mascota."'

    WHERE id='".$idMascota."' ");
$resultadoupdateDatosMascota = mysqli_query($con, $updateDatosMascota);


if (!empty($_FILES["foto_mascota"]["name"])){
    $name           = $_FILES["foto_mascota"]["name"];
    $source         = $_FILES["foto_mascota"]["tmp_name"];

    $directorio     = "fotoMascota";
    $midir          = opendir($directorio);
    $rutaLocal      = $directorio . '/' .$name;
    if (move_uploaded_file($source, $rutaLocal)) {

    $updateFotoMascota = ("UPDATE mascotas SET foto_mascota='".$rutaLocal."' WHERE id='".$idMascota."' ");
    $resultFotoMascota = mysqli_query($con, $updateFotoMascota);

     }
}
header("Location: index.php");
?>

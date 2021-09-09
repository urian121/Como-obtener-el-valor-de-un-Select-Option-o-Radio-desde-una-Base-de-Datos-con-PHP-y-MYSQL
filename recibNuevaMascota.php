<?php
include('config.php');
date_default_timezone_set("America/Bogota");
setlocale(LC_ALL, 'es_ES');
$fecha_registro   = date('d-m-Y H:i:s A', time()); 

$nombreMascota 		= $_REQUEST['nombreMascota'];
$sexoMascota 	    = $_REQUEST['sexoMascota'];
$tipoMascota 	    = $_REQUEST['tipoMascota'];
$raza_mascota 	    = $_REQUEST['raza_mascota'];


//Recibo la foto de la Mascota
$filename               = $_FILES['foto_mascota']['name'];
$sourceFoto             = $_FILES['foto_mascota']['tmp_name'];

//código para renombrar la factura 
$logitudPass 	        = 15;
$newNameFoto            = substr( md5(microtime()), 1, $logitudPass);
$explode                = explode('.', $filename);
$extension_foto         = array_pop($explode);
$nuevoNameFoto          = $newNameFoto.'.'.$extension_foto;

//Verificando si existe el directorio, de lo contrario lo creo
$dirLocal       = "fotoMascota";
if (!file_exists($dirLocal)) {
    mkdir($dirLocal, 0777, true);
}

$miDir 		    = opendir($dirLocal); //Habro mi  directorio
$urlFotoMascota     = $dirLocal.'/'.$nuevoNameFoto; //Ruta donde se almacena la factura.

//Muevo la Factura a mi directorio.
if(move_uploaded_file($sourceFoto, $urlFotoMascota)){

$InsertBDMascota = ("
    INSERT INTO mascotas (
        nombreMascota,
        sexoMascota,
        tipoMascota,
        raza_mascota,
        foto_mascota
		)
	VALUES (
        '$nombreMascota',
		'$sexoMascota',
        '$tipoMascota',
		'$raza_mascota',
        '$urlFotoMascota'
	);");
$queryBDMascota = mysqli_query($con, $InsertBDMascota);


} //cierro de move_uploaded_file

closedir($miDir); //Cierro el directorio

@mysqli_close($con); //Ciero la conexion
    
header("Location: index.php");
?>

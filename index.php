<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta content="initial-scale=1, shrink-to-fit=no, width=device-width" name="viewport">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i|Roboto+Mono:300,400,700|Roboto+Slab:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="shortcut icon" href="http://groomersacademy.com.co/wp-content/themes/betheme/images/favicon.ico"/>

    <!-- Add Material CSS, replace Bootstrap CSS -->
    <link href="css/material.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/picnic.min.css">
    <link rel="stylesheet" href="css/cargando.css">
      <link rel="stylesheet" href="css/cssGenerales.css">
    <title>Como obtener el valor de un Select Option o Radio desde una Base de Datos con PHP y MYSQL </title>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-light navbar-dark fixed-top" style="background-color: #563d7c !important;">
    <ul class="navbar-nav mr-auto collapse navbar-collapse">
      <li class="nav-item active">
        <a href="https://blogangular-c7858.web.app/"> 
        <strong style="color:#fff;">Canal WebDeveloper </strong>
        </a>
      </li>
    </ul>
    <div class="my-2 my-lg-0">
      <h5 class="navbar-brand">Urian Viera </h5>
    </div>
</nav>


<div class="cargando">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>


<div class="container" style="max-width: 100% !important;">  
<div class="row mb-5">  

<div class="col-md-12">
  <h3 class="text-center">
    ¿Cómo poner un option de un <span style="color: #777;"> Select o Radio </span> como seleccionado, 
    usando <br> el atributo <span style="color: #777;">selected </span> con Registros de BD y PHP
  </h3>
  <hr>
</div>



<div class="col-md-6">
<?php
include('config.php');
$sqlMascota = ("SELECT * FROM mascotas ORDER BY id ASC");
$queryMascota = mysqli_query($con, $sqlMascota);
?>
  <table class="table table-bordered table-striped">
  <thead class="thead-dark">
    <tr>
      <th>Mascota</th>
      <th>Genero</th>
      <th>Tipo de Mascota</th>
      <th>Foto</th>
      <th>Acción</th>
    </tr>
  </thead>
  <tbody>
  <?php
    while ($dataMascota = mysqli_fetch_array($queryMascota)) { ?>
    <tr>
      <td><?php echo $dataMascota['nombreMascota']; ?></td>
      <td><?php echo $dataMascota['sexoMascota']; ?></td>
      <td><?php echo $dataMascota['tipoMascota']; ?></td>
      <td><img src="<?php echo $dataMascota['foto_mascota']; ?>" alt="foto" style="width: 100px;"></td>
      <td><a href="index.php?updateMascota=1&idMascota=<?php echo $dataMascota['id']; ?>" class="btn btn-success">Actualizar</a></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
</div>


<div class="col-md-6 mb-5">
  <h4 class="text-center">Registrar Mascota</h4>
  <hr class="mb-5">
  <?php
  if(isset($_REQUEST['updateMascota'])){
    include('UpdateMascota.php');
  }else{ 
    include('formMascota.php'); ?>

  <?php } ?>

</div>

</div>
</div>



    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <script src="js/material.min.js"></script>
    <script>
    $(document).ready(function() {
        $(window).load(function() {
            $(".cargando").fadeOut(500);
        });      
    });

    //SELECT DINAMICO BUSCAR LA RAZA DE LA MASCOTA
    $("#tipoMascota").change(function () {
      var tipoMascota =  typeMascot = $(this).val();
        if(tipoMascota =="Gato"){
          var raza = "cns_gato";
        }
        if(tipoMascota !="Gato"){
        var raza = "cns_perro";
        }

        if(tipoMascota ==""){
          $("#raza_mascota").empty().append('<option value="0">Raza de tú Mascota</option>');
        }else{
          $.post("raza_mascota.php", {raza: raza}, function (data) {
            $("#raza_mascota").html(data);
        });
        }
    }); 


    document.addEventListener("DOMContentLoaded", function() {
      [].forEach.call(document.querySelectorAll('.dropimage'), function(img){
        img.onchange = function(e){
          var inputfile = this, reader = new FileReader();
          reader.onloadend = function(){
            inputfile.style['background-image'] = 'url('+reader.result+')';
          }
          reader.readAsDataURL(e.target.files[0]);
        }
      });
    });
</script>
  </body>
</html>
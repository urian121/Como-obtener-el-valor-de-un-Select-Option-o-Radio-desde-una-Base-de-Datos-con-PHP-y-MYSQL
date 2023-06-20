
<?php
include('config.php');
$variableUpdate = $_REQUEST['updateMascota']; 
$varIdMascota   = $_REQUEST['idMascota']; 

$sqlSearchMascota   = ("SELECT * FROM mascotas WHERE id='".$varIdMascota."' LIMIT 1 ");
$queryMascota    = mysqli_query($con, $sqlSearchMascota);
$dataMascota     = mysqli_fetch_array($queryMascota);
?>


<form name="MiForm" action="recibUpdateMascota.php" method="POST" enctype="multipart/form-data">
  <input type="text" name="idMascota" value="<?php echo($varIdMascota); ?>" hidden>
    <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nombreMascota">Nombre de tu mascota</label>
          <input type="text" name="nombreMascota" value="<?php echo $dataMascota['nombreMascota']; ?>" class="form-control" required>
        </div>

      <div class="form-group col-md-6">
        <label for="sexo">Genero de tu Mascota:</label>
        <br>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="sexoMascotaM" name="sexoMascota" <?php echo $dataMascota['sexoMascota']==='Macho' ?  'checked' : '' ?> value="Macho" class="custom-control-input">
          <label class="custom-control-label" for="sexoMascotaM">Macho</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="sexoMascotaH" name="sexoMascota" <?php echo $dataMascota['sexoMascota']==='Hembra' ?  'checked' : '' ?> value="Hembra" class="custom-control-input">
          <label class="custom-control-label" for="sexoMascotaH">Hembra</label>
        </div>
      </div>
    </div>


    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="tipoMascota">Tu Mascota es:</label>
        <select class="form-control" name="tipoMascota" id="tipoMascota">
          <?php
          if($dataMascota['tipoMascota']=="Perro"){ ?>
            <option value="Perro" selected>Perro</option>
            <option value="Gato">Gato</option>
          <?php }else{ ?>
             <option value="Gato" selected>Gato</option>
             <option value="Perro">Perro</option>
          <?php } ?>
        </select>
      </div>


    <?php
    $sqlRazaMascota   = ("SELECT raza FROM  razas ");
    $dataRazaMascota  = mysqli_query($con, $sqlRazaMascota);
    ?>
  <div class="form-group col-md-6">
      <label for="raza_mascota">Raza de tu Mascota:</label>
      <select class="form-control" name="raza_mascota" id="raza_mascota">
        <?php
        while ($rowRaza = mysqli_fetch_array($dataRazaMascota)) {
          if ($rowRaza['raza'] == $dataMascota['raza_mascota']) { ?>
            <option value="<?php echo $rowRaza['raza']; ?>" selected>
              <?php echo $rowRaza['raza']; ?>
            </option>
          <?php } else { ?>
            <option value="<?php echo $rowRaza['raza']; ?>">
              <?php echo $rowRaza['raza']; ?>
            </option>
        <?php }
        } ?>
      </select>
    </div>

    </div>


    <div class="form-row">
    <div class="form-group col-md-6">
      <div class="col text-center">
      <label for="foto_mascota">Foto de tu mascota</label>
        <img src="<?php echo $dataMascota['foto_mascota']; ?>" alt="mascota" style="width: 250px;">
      </div>
    </div>

    <div class="form-group col-md-6">
      <div class="col text-center">
      <label for="foto_mascota">Cambiar Foto de tu mascota</label>
        <label class="dropimage text-center miniprofile">
          <input type="file" name="foto_mascota" title="Factura">
        </label>
      </div>
    </div>

    </div>
    
    <button type="submit" class="btn btn-primary btn-lg btn-block">Registrar mi mascota</button>
  </form>

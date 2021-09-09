<form name="MiForm" action="recibNuevaMascota.php" method="POST" enctype="multipart/form-data">
  <div class="form-row">
      <div class="form-group col-md-6">
        <label for="nombreMascota">Nombre de tu mascota</label>
        <input type="text" name="nombreMascota" class="form-control" required>
      </div>

    <div class="form-group col-md-6">
      <label for="sexo">Genero de tu Mascota:</label>
      <br>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="sexoMascotaM" name="sexoMascota" value="Macho" class="custom-control-input">
        <label class="custom-control-label" for="sexoMascotaM">Macho</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="sexoMascotaH" name="sexoMascota" value="Hembra" class="custom-control-input">
        <label class="custom-control-label" for="sexoMascotaH">Hembra</label>
      </div>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="tipoMascota">Tu Mascota es:</label>
      <select class="form-control" name="tipoMascota" id="tipoMascota">
        <option>- - - - -Tipo de Mascota - - - - - </option>
        <option value="Perro">Perro</option>
        <option value="Gato">Gato</option>
      </select>
    </div>
    <div class="form-group col-md-6">
    <label for="raza_mascota">Raza de tu Mascota:</label>
    <select class="form-control" name="raza_mascota" id="raza_mascota">
        <option>- - - Raza de tu Mascota  - - </option>
      </select>
    </div>

  </div>



  <div class="row mb-5">
    <div class="col text-center">
    <label for="foto_mascota">Foto de tu mascota</label>
      <label class="dropimage text-center miniprofile">
        <input type="file" name="foto_mascota" title="Factura" required="required">
      </label>
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary btn-lg btn-block">Registrar mi mascota</button>
</form>
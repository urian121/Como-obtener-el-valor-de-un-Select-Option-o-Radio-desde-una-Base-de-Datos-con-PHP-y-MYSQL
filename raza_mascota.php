<?php
include('config.php');
$razaMascota = $_REQUEST['raza'];

$SqlRaza = ("SELECT * FROM razas WHERE tipoMascota='".$razaMascota."'");
$queryRaza = mysqli_query($con, $SqlRaza);

?>

<option value="">Seleccione una Raza</option>
<?php
while ($dataRaza = mysqli_fetch_assoc($queryRaza)) { ?>
<option value="<?php echo ($dataRaza['raza']); ?>">
    <?php echo ($dataRaza['raza']); ?>
</option>
<?php } ?>
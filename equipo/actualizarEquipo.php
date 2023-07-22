<?php
include('../db.php');

if (isset($_POST['modificar'])) {
  $id = $_POST['id'];
  $serial = $_POST['serial'];
  $marca = $_POST['marca'];
  $equipo = $_POST['equipo'];
  $discod = $_POST['discod'];
  $memoriar = $_POST['memoriar'];
  $procesador = $_POST['procesador'];

  $falla = $_POST['falla'];
  $obs = $_POST['obs'];

  // Realizar la actualización en la base de datos
  $query = "UPDATE tbl_equipos SET falla='$falla', marca='$marca', equipo='$equipo', discod='$discod', memoriar='$memoriar', obs='$obs', procesador='$procesador' WHERE serialeq='$id'";
  $result = mysqli_query($mysqli, $query);

  if ($result) {
    // La actualización fue exitosa, redirigir a la página de éxito o mostrar un mensaje de éxito
    echo '<script>alert("Equipo modificado exitosamente."); window.location.href = "equipoBuscar.php";</script>';
  } else {
    // Hubo un error en la actualización, redirigir a la página de error o mostrar un mensaje de error
    echo '<script>alert("Error al modificar el Equipo."); window.location.href = "equipoBuscar.php";</script>';
  }
}
?>

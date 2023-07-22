<?php
include('../db.php');

if (isset($_POST['modificar'])) {
  $id = $_POST['id'];
  $nombre = $_POST['nombrecompleto'];
  $cedula = $_POST['identificacion'];
  $direccion = $_POST['direccion'];
  $telefono = $_POST['telefono'];
  $email = $_POST['email'];

  // Realizar la actualización en la base de datos
  $query = "UPDATE tbl_clientes SET nombre='$nombre', direccion='$direccion', celular='$telefono', correo='$email', cedula='$cedula' WHERE cedula='$id'";
  $result = mysqli_query($mysqli, $query);

  if ($result) {
    // La actualización fue exitosa, redirigir a la página de éxito o mostrar un mensaje de éxito
    echo '<script>alert("Registro modificado exitosamente."); window.location.href = "clienteBuscar.php";</script>';
  } else {
    // Hubo un error en la actualización, redirigir a la página de error o mostrar un mensaje de error
    echo '<script>alert("Error al modificar el registro."); window.location.href = "clienteBuscar.php";</script>';
  }
}
?>

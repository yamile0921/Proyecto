<?php
include('db.php');
session_start();

if (isset($_POST['salvarusuario'])) {
  $clave = $_POST['password'];
  $correo = $_POST['correo'];
  
  $query = "SELECT * FROM tbl_usuarios WHERE correo='$correo'";
  $result = mysqli_query($mysqli, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
  
     $claveGuardada = $row['clave'];
    
    // Comparar la contraseña ingresada con la contraseña almacenada sin encriptar
    if ($clave === $claveGuardada) {

      echo '<script>alert("Inicio de sesión exitoso."); window.location.href = "interfaz/interfaz.php";</script>';
    } else {
      echo '<script>alert("La Clave Es Incorrecta"); window.location.href = "index.php";</script>';
    } 
  } else {
    echo '<script>alert("Usuario No Está Registrado"); window.location.href = "index.php";</script>';
  }
}
?>

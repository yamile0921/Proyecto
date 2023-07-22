<?php
include('../db.php');
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Recopilar los datos del formulario
   
  $serial = $_POST['serial'];
  $equipo = $_POST['equipo'];
  $discod = $_POST['discod'];
  $marca = $_POST['marca'];
  $fallo = $_POST['fallo'];

  $memoriar = $_POST['memoriar'];
  $procesador = $_POST['procesador'];
  $obs = $_POST['obs'];
  
  // Ejecutar la consulta SQL para insertar los datos
  $query = "INSERT INTO tbl_equipos (serialeq, equipo, discod, marca, falla,memoriar,procesador,obs) VALUES ('$serial', '$equipo', '$discod', '$marca', '$fallo', '$memoriar', '$procesador', '$obs')";
  $result = mysqli_query($mysqli, $query);

 
  
  // Verificar si la consulta se ejecutó correctamente
  if ($result) {
    // La inserción fue exitosa, puedes redirigir a una página de éxito o mostrar un mensaje de éxito
    echo '<script>alert("Registro Exitoso."); window.location.href = "equipoBuscar.php";</script>';
  } else {
    // Hubo un error en la consulta, puedes redirigir a una página de error o mostrar un mensaje de error
    echo '<script>alert("Error Al Registrar."); window.location.href = "equipoBuscar.php";</script>';
  }
  
}

?>

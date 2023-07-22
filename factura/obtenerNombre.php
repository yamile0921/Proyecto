<?php
include('../db.php');

// Obtener la cédula desde los parámetros POST
$cedula = $_POST['cedula'];

// Realizar la consulta SQL para buscar el nombre en la tabla tbl_clientes
$query = "SELECT nombre FROM tbl_clientes WHERE cedula = '$cedula'";
$result = mysqli_query($mysqli, $query);

if ($result) {
  // Verificar si se encontró un registro con la cédula proporcionada
  if (mysqli_num_rows($result) > 0) {
    // Obtener el nombre del primer registro encontrado
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];

    // Devolver el nombre como respuesta a la solicitud AJAX
    echo $nombre;
  } else {
    // Si no se encontró ningún registro, devolver un mensaje indicando que no se encontró la cédula
    echo 'NO SE ENCUENTRA CLIENTE';
  }
} else {
  // Manejar el error de la consulta SQL
  echo 'Error en la consulta SQL';
}

// Cerrar la conexión a la base de datos
mysqli_close($mysqli);
?>

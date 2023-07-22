<?php
include('../db.php');

$cedula = $_POST['cedula'];

$result = mysqli_query($mysqli, "SELECT * FROM tbl_clientes WHERE cedula = '$cedula'");
$row = mysqli_fetch_array($result);

$claveGuardada = $row['cedula'];

$id = $row['cedula'];

if ($cedula !== $claveGuardada) {
  echo '<script>alert("No se encontró el documento en la tabla Clientes."); window.location.href = "clienteBuscar.php";</script>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cliente buscar</title>
  <link rel="ahorcut icon" href="../Img/icono pestaña.jpg">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <center>
    <h1>CompuCel Tecnología</h1>
    <h3>CLIENTES</h3>
    <form class="cliente2" action="actualizarRegistro.php" method="POST">
      <br>
      <table style="margin: 0 auto; text-align:left;">
        <tr>
          <td><label><b>NÚMERO DE IDENTIFICACIÓN:</b></label><br><br></td>
          <td><input id="identificacion" name="identificacion" type="text" value="<?php echo $row['cedula']; ?>"><br><br></td>
        </tr>
        <tr>
          <td><label><b>NOMBRE COMPLETO:</b></label><br><br></td>
          <td><input id="nombrecompleto" name="nombrecompleto" type="text" value="<?php echo $row['nombre']; ?> <?php echo $row['apellido']; ?>"> <br><br></td>
        </tr>
        <tr>
          <td><label><b>DIRECCIÓN:</b></label><br><br></td>
          <td><input id="direccion" name="direccion" type="text" value="<?php echo $row['direccion']; ?>"> <br><br></td>
        </tr>
        <tr>
          <td><label><b>TELÉFONO:</b></label><br><br></td>
          <td><input id="telefono" name="telefono" type="text" value="<?php echo $row['celular']; ?>"> <br><br></td>
        </tr>
        <tr>
          <td><label><b>EMAIL:</b></label><br><br></td>
          <td><input id="email" name="email" type="text" value="<?php echo $row['correo']; ?>"><br><br></td>
        </tr>
      </table>
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <input type="submit" class="botonVerdeNormal" name="modificar" value="Actualizar">
      <input type="submit" class="botonVerdeNormal" value="Facturas" formaction="facturasClientes.php">
      <a class="botonRojoNormal" href="clienteBuscar.php" style="text-decoration:none; border: 1px solid #000;font-size: 19px;"> Cancelar</a>
    </form>
  </center>
</body>
</html>

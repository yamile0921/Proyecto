<?php

include('../db.php');

$serial = $_POST['serial'];


//echo '<script>alert("No se encontró el equipo '.$serial.' en la tabla Equipos.");</script>';

$result = mysqli_query($mysqli, "SELECT * FROM tbl_equipos WHERE serialeq = '$serial'");
$row = mysqli_fetch_array($result);

$claveGuardada = $row['serialeq'];

$id = $row['serialeq'];

//echo '<script>alert("No se encontró el equipo '.$claveGuardada.' en la tabla Equipos.");</script>';
//$id = $row['cedula'];

if ($serial !== $claveGuardada) {
  echo '<script>alert("No se encontró el Equipo en la tabla Equipos."); window.location.href = "equipoBuscar.php";</script>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EquipoEncontrado</title>
    <link rel="ahorcut icon" href="../Img/icono pestaña.jpg">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <center>
		<h1>CompuCel Tecnología</h1>
		<h3>Equipo</h3>
		 <form action="actualizarEquipo.php" method="POST">
			<br>
			<table style="margin: 0 auto; text-align:left;">
			
			  <tr>
				<td><label><b>SERIAL:</b></label><br><br></td>
				<td><input id="serial" name="serial" type="text" value="<?php echo $row['serialeq']; ?>"><br><br></td>
			  </tr>
			  <tr>
				<td><label><b>MARCA:</b></label><br><br></td>
				<td><input id="marca" name="marca" type="text" value="<?php echo $row['marca']; ?>"> <br><br></td>
			  </tr>
			  <tr>
				<td><label><b>TIPO DE EQUIPO:</b></label><br><br></td>
				<td><input id="equipo" name="equipo" type="text" value="<?php echo $row['equipo']; ?>"><br><br></td>
			  </tr>
			  <tr>
				<td><label><b>DISCO DURO:</b></label><br><br></td>
				<td><input id="discod" name="discod" type="text" value="<?php echo $row['discod']; ?>"><br><br></td>
			  </tr>
			  <tr>
				<td><label><b>MEMORIA RAM:</b></label><br><br></td>
				<td><input id="memoriar" name="memoriar" type="text" value="<?php echo $row['memoriar']; ?>"><br><br></td>
			  </tr>
			  <tr>
				<td><label><b>PROCESADOR:</b></label><br><br></td>
				<td><input id="procesador" name="procesador"  type="text" value="<?php echo $row['procesador']; ?>"><br><br></td>
			  </tr>
			  <tr>
				<td><label><b>TIPO DE FALLA:</b></label></td>
				<td><input id="falla" name="falla" type="text" value="<?php echo $row['falla']; ?>"><br><br></td>
               </td>
             </tr>
			 <tr>
				<td><label><b>OBSERVACIONES:</b></label><br><br></td>
				<td><input id="obs" name="obs" type="text" value="<?php echo $row['obs']; ?>"><br><br></td>
			  </tr>
			
			</table>                       
             <input type="hidden" name="id" value="<?php echo $id; ?>">
			<input type="submit" class="botonVerdeNormal" name="modificar" value="Modificar"> 
			<input type="submit" formaction="equipoBuscar.php" class="botonRojoNormal" value="Volver">
			
		</form> 
    </center>
</body>
</html>
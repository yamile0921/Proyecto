<?php

include('../db.php');

$result = mysqli_query($mysqli, "SELECT * FROM tbl_equipos ");
$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipo</title>
    <link rel="ahorcut icon" href="../Img/icono pestaña.jpg">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="fondoequipo">
    <center>
		<h1>CompuCel Tecnología</h1>
		<h3>EQUIPO</h3>
		<form class="cliente2" action="equipoEncontrado.php" method="post">
			<br><br><br>			 
			<label for="cedula"><b>SERIAL</b></label>
			<input id="serial" name="serial" type="text" placeholder="Digite número de serial del equipo" value="">
			<br><br><br>       
          <button class="botonVerdeNormal" type="submit">BUSCAR</button>
          
          <button class="botonVerdeNormal" formaction="../Equipo/equipoNuevo.php">NUEVO</button>
          <button class="botonRojoNormal" formaction="../Interfaz/interfaz.php">VOLVER</button>
      </form>
   </center>
</body>
</html>
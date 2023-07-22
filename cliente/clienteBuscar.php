<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cliente</title>
	<link rel="ahorcut icon" href="../Img/icono pestaña.jpg">
   <link rel="stylesheet" href="../css/style.css"> 
</head>
<body class="fondocliente">
	<center>
		<h1>CompuCel Tecnología</h1>
		<h3>CLIENTE</h3>
		<form class="cliente2" action="clienteGuardado.php" method="post">
			<br><br><br><br><br>
			<label for="cedula"><b>N. CÉDULA</b></label>
			<input id="cedula" type="text" name="cedula" placeholder="Digite documento del cliente" value="">
			<br><br>
			<input type="submit" value="Buscar" class="botonVerdeNormal">
			<input type="submit" value="Nuevo" class="botonVerdeNormal" formaction="clienteNuevo.php">
			<a class="botonRojoNormal" href="../Interfaz/interfaz.php" style="text-decoration:none; border: 1px solid #000;font-size: 19px;"> Cancelar</a>
		</form>
	</center>
	
</body>
</html>
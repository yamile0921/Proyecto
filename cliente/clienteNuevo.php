<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente Nuevo</title>
    <link rel="ahorcut icon" href="../Img/icono pestaña.jpg">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <center>
		<h1>Compucel Tecnología</h1>
		<h3>Ingresar información</h3>
		 <form class="cliente2" action="guardarcliente.php" method="post" >
			 <br>
			 <table style="margin: 0 auto; text-align:left;">
				 <tr>
				<td><label><b>NÚMERO DE IDENTIFICACIÓN:</b></label><br><br></td>
				<td><input id="identificacion" name="identificacion" type="text" value="" required><br><br></td>
			  </tr>
			  <tr>
				<td><label><b>NOMBRE COMPLETO:</b></label><br><br></td>
				<td><input id="nombrecompleto" name="nombrecompleto" type="text" value="" required><br><br></td>
			  </tr>
			  <tr>
				<td><label><b>DIRECCIÓN:</b></label><br><br></td>
				<td><input id="direccion" name="direccion" type="text" value="" required><br><br></td>
			  </tr>
			  <tr>
				<td><label><b>TELEFÓNO:</b></label><br><br></td>
				<td><input id="telefono" name="telefono" type="text" value="" required><br><br></td>
			  </tr>
			  <tr>
				<td><label><b>EMAIL:</b></label><br><br></td>
				<td><input id="email" name="email" type="text" value="" required><br><br></td>
			  </tr>
			</table>
			<input type="submit" class="botonVerdeNormal" value="Guardar"> 
			<a class="botonRojoNormal" href="../Interfaz/interfaz.php" style="text-decoration:none; border: 1px solid #000;font-size: 19px;"> Cancelar</a>   
		   <br><br>
		</form>
	</center>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de registro</title>
    <link rel="ahorcut icon" href="Img/icono pestaña.jpg">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <center>
		<h1>Compucel Tecnología</h1>
		 <form class="registro" action="usuario/rgusuario.php" method="post" >
            <h3>Ingresa tus datos</h3>
			 <br>
			 <table style="margin: 0 auto; text-align:left;">
			  <tr>
				<td><label><b>Nombres:</b></label><br><br></td>
				<td><input id="nombres" name="nombres" type="text" value="" required><br><br></td>
			  </tr>
              <tr>
				<td><label><b>Apellidos:</b></label><br><br></td>
				<td><input id="apellidos" name="apellidos" type="text" value="" required><br><br></td>
			  </tr>
              <tr>
				<td><label><b>Cedula:</b></label><br><br></td>
				<td><input id="cedula" name="cedula" type="text" value="" required><br><br></td>
			  </tr>
              <tr>
				<td><label><b>Fecha de nacimiento:</b></label><br><br></td>
				<td><input id="fecha" name="fecha" type="date" value="" required><br><br></td>
			  </tr>
			  <tr>
				<td><label><b>Correo electrónico:</b></label><br><br></td>
				<td><input id="email" name="email" type="text" value="" required><br><br></td>
			  </tr>
			  <tr>
				<td><label><b>Contraseña:</b></label><br><br></td>
				<td> <input id="password1" name="password1" type="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required><br><br></td>
			  </tr>
			  <tr>
				<td><label><b>Confirmar contraseña:</b></label><br><br></td>
				<td><input id="password2" name="password2" type="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required><br><br></td>
			  </tr>
			</table>
			<div id="message">
			  <h3>La contraseña debe contener lo siguiente:</h3>
			  <p id="letter" class="invalid">Una <b>letra (Minúscula)</b></p>
			  <p id="capital" class="invalid">Una <b>letra (Mayúscula)</b></p>
			  <p id="number" class="invalid">Un <b>número</b></p>
			  <p id="length" class="invalid">Minimo <b>8 caracteres</b></p>
			</div>
			<div id="message2">
				<p id="same" class="invalid1">Contraseñas <b>coinciden</b></p>
			</div>
			<input type="submit" name="salvarusuario" class="botonVerdeNormal" value="Guardar"> 
			<a class="botonRojoNormal" href="index.php" style="text-decoration:none; border: 1px solid #000;font-size: 19px;"> Cancelar</a>  
		   <br><br>
		</form>
	</center>
	<script src="js/main.js"></script>
	
</body>
</html>

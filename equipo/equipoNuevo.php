<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipo Nuevo</title>
    <link rel="ahorcut icon" href="../Img/icono pestaña.jpg">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <center>
		<h1>Compucel Tecnología</h1>
		<h3>Datos del equipo</h3>
        <form action="guardarequipo.php" method="post">
			 <br>
			 <table style="margin: 0 auto; text-align:left;">
			  <tr>
				<td><label><b>SERIAL:</b></label><br><br></td>
				<td><input id="serial" name="serial" type="text" value="" required> <br><br></td>
			  </tr>
			  <tr>
				<td><label><b>TIPO DE EQUIPO:</b></label><br><br></td>
				<td><input id="equipo" name="equipo" type="text" value="" required><br><br></td>
			  </tr>
			  <tr>
				<td><label><b>DISCO DURO:</b></label><br><br></td>
				<td><input id="discod" name="discod" type="text" value="" required> <br><br></td>
			  </tr>
			  <tr>
                <tr>
                    <td><label><b>MARCA:</b></label><br><br></td>
                    <td><input id="marca" name="marca" type="text" value="" required><br><br></td>
                  </tr>

                  <tr>
				<td><label><b>MEMORIA RAM:</b></label><br><br></td>
				<td><input id="memoriar" name="memoriar"><br><br></td>
			  </tr>
			  <tr>
				<td><label><b>PROCESADOR:</b></label><br><br></td>
				<td><input id="procesador" name="procesador"><br><br></td>
			  </tr>

                <tr>
				<td><label><b>TIPO DE FALLA:</b></label></td>
				<td><select name="fallo" id="lang">
                    <option value="SOFTWARE">SOFTWARE</option>
                    <option value="HARDWARE">HARDWARE</option>
                 </select>  
               <br><br> </td>
			  </tr>


			  <tr>
				<td><label><b>OBSERVACIONES:</b></label><br><br></td>
				<td><input id="obs" name="obs"><br><br></td>
			  </tr>

			</table>			
		   <br><br>
		   <input type="submit" class="botonVerdeNormal" value="Guardar"> 
		   <a class="botonRojoNormal" href="../Interfaz/interfaz.php" style="text-decoration:none; border: 1px solid #000;font-size: 19px;"> Cancelar</a>  
		</form>
	
	</center>

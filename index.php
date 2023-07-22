<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio sesión</title>
    <link rel="ahorcut icon" href="Img/icono pestaña.jpg">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="fondo">
  <center><h2>Tus soluciones a un clic</h2></center>
   <div>
    
    <form class="formLogin" action="validarusuario.php" method="POST"> 
        <h5>Por favor ingrese sus datos para acceder al programa</h5>
    <div class="textoIzquierda">
        <label>Correo:</label>
    </div>
        <input id="correo" name="correo" type="text" value="" required>
         <br><br>
         <div class="textoIzquierda">
         <label>contraseña:</label>
        </div>        
         <input id="password" name="password" type="password" value="" required>
         <br><br>
         
         <br><br>
       
         <input class="botonAcceder" type="submit" name="salvarusuario"  value="Acceder" >
    </form>
    </div>
    <center>
    <h4>¿No tienes una cuenta?</h4>
    <a href="registro.php">
    <button id="botonesInicio" type="button"><u>Crear cuenta</u></button>
    </a>
    <a href="https://www.google.com/">    
    <input id="botonesInicio" type="submit" value="SALIR">
    </a>
    </center>

</body>
</html>
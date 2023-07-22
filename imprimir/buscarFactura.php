<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuscarFactura</title>
    <link rel="ahorcut icon" href="../Img/icono pestaña.jpg">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <center><h1>CompuCel Tecnología</h1></center>
    <br><br><br>
    <form action="facturaimprimirn.php" method="post">
        <label for="serial">Numero De factura</label>
        <input id="nfactura" name="nfactura" type="text" placeholder="Digite Número De La Factura" value="">
    
    <br><br>
    <div>
        <input type="submit" class="botonVerdeNormal"  value="Buscar">             
        <input type="submit" formaction="../Interfaz/interfaz.php" class="botonRojoNormal"  value="Cancelar">    
    </div>
    </form>
</body>
</html>
<?php
            session_start();
            include('../db.php');
            date_default_timezone_set('America/Bogota');

            if  (isset($_GET['id'])) {
            $id = $_GET['id'];
           // $_SESSION[scedulap] = $id;
            $query = "SELECT * FROM tbl_factura WHERE id=$id";
            $result = mysqli_query($mysqli, $query);
            if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $nfactura = $row['nfactura'];
            $fecha =  $row['fecha'];
            $cedula = $row['cedula'];
            $cliente =$row['cliente'];

            $_SESSION['nfacturas'] = $nfactura;
           

         }
     }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura</title>
    <link rel="ahorcut icon" href="../Img/icono pestaña.jpg">
    <link rel="stylesheet" href="../css/style.css">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.8.0/sweetalert2.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.8.0/sweetalert2.min.js"></script>

 <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

 
    
</head>

<body onload="detalleinicio()">
    <div class="tituloPrincipal">
      <label>CompuCel Tecnología</label>
    </div>

    <div class="subtituloFactura">
      <label>Factura Imprimir</label>
    </div>
    
    <form class="factura2" id="myForm" name="f"  method="POST">

      <div class="form-row">


        <div class="col-md-1 mb-2">
    <input type="text" name="nfactura" class="form-control"  value="<?php echo  $nfactura; ?>"  readonly>
    </div>

   <div class="col-md-2 mb-3">
    <input type="text" name="fecha" class="form-control"  value="<?php echo  $fecha; ?>"  readonly>
    </div>

        <div class="col-md-3 mb-4">
        <input id="cedula" name="cedula" class="form-control" value="<?php echo  $cedula; ?>" type="text"  readonly>
      </div>
    
     <div class="col-md-6 mb-4">
        <input id="cliente" class="form-control" value="<?php echo  $cliente; ?>" name="cliente" type="tetx"  readonly>
     </div>

      </div>
    </form>
	
  <br>
    <div class="container">
    <div >
  
     <div id="tabladetallep"></div>
    </div>

    

  


<script type="text/javascript">
   function detalleinicio() {
   $("#tabladetallep").load('mostrardetallep.php');
  }
  </script>


  
</body>
</html>
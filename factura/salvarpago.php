<?php
session_start();
include('../db.php');
date_default_timezone_set('America/Bogota');
 $fechahoy = date('Y-m-d');


if (isset($_POST['salvarpago'])) {

 
 ///select solo de eesa factura
  $resultcf = mysqli_query($mysqli, "SELECT * FROM tbl_dfacturap WHERE nfactura = $_SESSION[nfacturas]");
  //$rowcf = mysqli_fetch_assoc($resultcf);
  while($rowcf = mysqli_fetch_assoc($resultcf)) {
  $nfactura = $rowcf['nfactura'];
  $fecha = $rowcf['fecha'];
  $cedula = $rowcf['cedula'];
  $cliente = $rowcf['cliente'];
  $tipo = $rowcf['tipo'];
  $descripcion = $rowcf['descripcion'];
  $cantidad = $rowcf['cantidad'];
  $precio = $rowcf['precio'];
  $total = $rowcf['total'];
  $iva = $rowcf['iva'];
  $subtotal = $rowcf['subtotal'];
  

  $query = "INSERT INTO tbl_dfactura(nfactura,fecha,cedula,cliente,tipo,descripcion,cantidad,precio,total,iva,subtotal) VALUES ('$nfactura','$fecha','$cedula','$cliente','$tipo','$descripcion','$cantidad','$precio','$total','$iva','$subtotal')";
  $result = mysqli_query($mysqli, $query);
  }


        
  }
 
  //calcula total
  $resultt = mysqli_query($mysqli, "SELECT SUM(subtotal) AS msubtotal,SUM(iva) AS ivaf FROM tbl_dfacturap WHERE nfactura = $_SESSION[nfacturas]");
  $rowcc = mysqli_fetch_assoc($resultt);
 
  $valorsb = $rowcc['msubtotal'];
  $ivaf = $rowcc['ivaf'];
  $valor =$valorsb + $ivaf;

  

   $query = "INSERT INTO tbl_factura(nfactura, fecha,cedula,cliente,subtotal,iva,total) VALUES ('$_SESSION[nfacturas]', '$fechahoy', '$cedula','$cliente','$valorsb','$ivaf','$valor')";
    $result = mysqli_query($mysqli, $query);



  $queryb = "DELETE FROM tbl_dfacturap WHERE nfactura = $_SESSION[nfacturas]";
  $resultb = mysqli_query($mysqli, $queryb);

  echo '<script>alert("Factura Grabada."); window.location.href = "factura.php";</script>';

  ?>
 
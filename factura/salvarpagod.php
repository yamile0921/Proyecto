<?php
session_start();
include('../db.php');
date_default_timezone_set('America/Bogota');

 
  $nfactura = $_POST['nfactura'];
  $fecha = $_POST['fecha'];
  $cedula = $_POST['cedula'];
  $cliente = $_POST['cliente'];
  $tipo = $_POST['tipo'];
  $desc = $_POST['desc'];
  $cantidad = $_POST['cantidad'];
  $precio = $_POST['precio'];
  $total = $_POST['total'];

  $subtotal = $_POST['subtotal'];
  $iva = $_POST['iva'];
  


    $query = "INSERT INTO tbl_dfacturap(nfactura, fecha,cedula,cliente,tipo,descripcion,cantidad,precio,total,iva,subtotal) VALUES ('$nfactura', '$fecha', '$cedula', '$cliente','$tipo','$desc','$cantidad','$precio','$total','$iva','$subtotal')";
    $result = mysqli_query($mysqli, $query);
  
   
  if(!$result) {
    die("Query Fallo.");
  }



?>

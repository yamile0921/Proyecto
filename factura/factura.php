<?php
            session_start();
            include('../db.php');
            date_default_timezone_set('America/Bogota');

            $fechahoy = date('Y-m-d');

           $result = mysqli_query($mysqli,"SELECT max(consecutivo) AS max_page from tbl_consecutivof");
           $rowf = mysqli_fetch_array($result);
           $nfactura = $rowf["max_page"] + 1;
           $_SESSION['nfacturas'] = $nfactura;

           $query = "INSERT INTO tbl_consecutivof(consecutivo) VALUES ('$nfactura')";
           $result = mysqli_query($mysqli, $query);
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

 <script>
function cal() {

var a = parseInt(document.f.precio.value),
        b = parseInt(document.f.cantidad.value),
        c = 1.19,
        d = 19;

        sub=a/c;
           iv=sub*d/100;
           subtotald=sub*b;
           ivad=iv*b;
           var subtotal = Math.round(subtotald);
           var iva = Math.round(ivad);
           document.f.iva.value = iva;
           document.f.subtotal.value = subtotal;
           document.f.total.value = a * b;

}
</script>

    
</head>

<body onload="detalleinicio()">
    <div class="tituloPrincipal">
      <label>CompuCel Tecnología</label>
    </div>

    <div class="subtituloFactura">
      <label>Factura</label>
    </div>
    
    <form class="factura2" id="myForm" name="f"  method="POST">

      <div class="form-row">


        <div class="col-md-1 mb-2">
    <input type="text" name="nfactura" class="form-control"  value="<?php echo  $nfactura; ?>"  readonly>
    </div>

   <div class="col-md-2 mb-3">
    <input type="text" name="fecha" class="form-control"  value="<?php echo  $fechahoy = date('Y-m-d'); ?>"  readonly>
    </div>

        <div class="col-md-3 mb-4">
        <input id="cedula" name="cedula" class="form-control" type="text" placeholder="Cedula" required>
      </div>
    
     <div class="col-md-6 mb-4">
        <input id="cliente" class="form-control" name="cliente" type="tetx" placeholder="Cliente" required>
     </div>


     <div class="col-md-3 mb-4">
        <select name="tipo" id="tipo" class="form-control">
           <option value="SOFTWARE">SOFTWARE</option>
           <option value="HARDWARE">HARDWARE</option>
         </select>
     </div>

     <div class="col-md-9 mb-4">
        <input id="desc" class="form-control" name="desc" type="tetx" placeholder="Descripcion" required>
     </div>

     <div class="col-md-2 mb-4">
        <input id="precio" class="form-control" name="precio" type="tetx" placeholder="Precio" required>
     </div>

     <div class="col-md-2 mb-4">
        <input id="cantidad" class="form-control" name="cantidad" type="tetx" onchange="cal()" onkeyup="cal()" placeholder="Cantidad" required>
     </div>

     
      <div class="col-md-2 mb-4">
        <input id="subtotal" class="form-control" name="subtotal" type="tetx" placeholder="Subtotal" required>
     </div>

     <div class="col-md-2 mb-4">
        <input id="iva" class="form-control" name="iva" type="tetx" placeholder="IVA" required>
     </div>

     <div class="col-md-2 mb-4">
        <input id="total" class="form-control" name="total" type="tetx" placeholder="Total" required>
     </div>

     <input  name="salvarpagod" id="salvarpagod" class="btn btn-primary " value="Grabar Detalle">

      </div>
    </form>
	
  <br>
    <div class="container">
    <div >
  
     <div id="tabladetallep"></div>
    </div>

    

  <script>
  document.addEventListener('DOMContentLoaded', function() {
    // Capturar el campo de entrada de la cédula
    const cedulaInput = document.getElementById('cedula');
    // Capturar el campo de entrada del nombre
    const clienteInput = document.getElementById('cliente');

    // Agregar un evento de cambio al campo de entrada de la cédula
    cedulaInput.addEventListener('change', function() {
      // Obtener el valor de la cédula ingresada
      const cedula = cedulaInput.value;

      // Realizar una solicitud AJAX para obtener el nombre correspondiente desde el servidor
      const xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
            // Actualizar el valor del campo de entrada del nombre con la respuesta del servidor
            clienteInput.value = xhr.responseText;
          } else {
            // Manejar el error de la solicitud AJAX
            console.error('Error en la solicitud AJAX');
          }
        }
      };

      // Especificar la URL del archivo en el servidor que manejará la solicitud AJAX
      const url = 'obtenerNombre.php';
      // Agregar parámetros a la URL de la solicitud AJAX
      const parametros = `cedula=${encodeURIComponent(cedula)}`;
      xhr.open('POST', url);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      // Enviar la solicitud AJAX con los parámetros
      xhr.send(parametros);
    });
  });
</script>

 <script type="text/javascript">
  $(document).ready(function(){
    $('#salvarpagod').click(function(){
      var datos=$('#myForm').serialize();
      $.ajax({
        type:"POST",
        url:"salvarpagod.php",
        data:datos,
        success:function(r){
          if(r==1){
          //  alert("agregado con exito");
          }else{
          $("#tabladetallep").load('mostrardetallep.php');
          document.getElementById('precio').value = '';
          document.getElementById('cantidad').value = '';
          document.getElementById('iva').value = '';
          document.getElementById('subtotal').value = '';
          document.getElementById('total').value = '';

          }
        }
      });

      return false;
    });
  });
</script>

<script type="text/javascript">
   function detalleinicio() {
   $("#tabladetallep").load('mostrardetallep.php');
  }
  </script>


  
</body>
</html>
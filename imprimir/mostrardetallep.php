   <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
   <script language="javascript" src="../cssjs/jquery-3.1.1.min.js"></script>
   <table class="table table-hover">
        <thead >
          <tr class="table-primary">
            <th>ID</th>
            <th>Tipo</th>
            <th>Descripcion</th>
            <th>Cantidad</th>
            <th>Precio</th>
           <th>Total</th>
          
          </tr>
        </thead>
        <tbody>

          <?php
          include('../db.php');
         session_start();
          $sum = 0;

           $result = mysqli_query($mysqli, "SELECT SUM(subtotal) AS sumsub,SUM(iva) AS sumiva,SUM(total) AS sumtotal FROM tbl_dfactura WHERE nfactura = '$_SESSION[nfacturas]'");
              $row1 = mysqli_fetch_assoc($result);
           $sumsub = $row1['sumsub'];
           $sumiva = $row1['sumiva'];
           $sumtotal = $row1['sumtotal'];


          $query = "SELECT * FROM tbl_dfactura WHERE nfactura = '$_SESSION[nfacturas]'";
          $result_tasks = mysqli_query($mysqli, $query);

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
           <td><?php echo $row['tipo']; ?></td>
           <td><?php echo $row['descripcion']; ?></td>
            <td><?php echo $row['cantidad']; ?></td>
            <td><?php echo $row['precio']; ?></td>
            <td><?php echo $row['total']; ?></td>

           

          </tr>
          <?php } ?>
        </tbody>
      </table>
      <div class="p-2 mb-2 bg-primary text-white">TOTAL FACTURA</div>
      <form action="salvarpago.php" id="myFormd" name="fd"  method="POST" >
       <div class="form-row">
         <div class="col-md-2 mb-4">
             <label for="usr">SubTotal:</label>
             <input type="text" name="subtotalg" id="subtotalg"  value="<?php echo $sumsub; ?>" class="form-control" placeholder="Subtotal"  readonly>
           </div>

           <div class="col-md-2 mb-4">
            <label for="usr">IVA:</label>
           <input type="text" name="ivag" class="form-control" value="<?php echo $sumiva; ?>" placeholder="IVA" id="ivag"  readonly>
          </div>

           <div class="col-md-2 mb-4">
             <label for="usr">Total:</label>
            <input type="text" name="totalg" class="form-control" placeholder="Total" id="totalg" value="<?php echo $sumtotal; ?>"  readonly>
           </div>


      </div>

      <div class="col-md-4 mb-4">
          <a class="btn btn-primary " onclick="javascript:window.print()">Imprimir</a>     
          <a class="btn btn-danger " href="../Interfaz/interfaz.php">Cancelar</a>
           </div>
    </form>



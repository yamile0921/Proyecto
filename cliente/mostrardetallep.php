   <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
   <script language="javascript" src="../cssjs/jquery-3.1.1.min.js"></script>
   <table class="table table-hover">
        <thead >
          <tr class="table-primary">
            <th>ID</th>
            <th>Factura</th>
            <th>Fecha</th>
            <th>Cedula</th>
            <th>Cliente</th>
            <th>Ver</th>
          </tr>
        </thead>
        <tbody>

          <?php
          include('../db.php');
         session_start();
         
          $query = "SELECT * FROM tbl_factura WHERE cedula = '$_SESSION[cedula]'";
          $result_tasks = mysqli_query($mysqli, $query);

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
           <td><?php echo $row['nfactura']; ?></td>
           <td><?php echo $row['fecha']; ?></td>
           <td><?php echo $row['cedula']; ?></td>
           <td><?php echo $row['cliente']; ?></td>
            
            <td>
           <a href="../imprimir/facturaimprimir.php?id=<?php echo $row['id']?>" class="btn btn-success">
                <i class="fas fa-edit"></i>
              </a>
            </td>

          </tr>
          <?php } ?>
        </tbody>
      </table>
     
      <form action="" id="myFormd" name="fd"  method="POST" >
       

      <div class="col-md-4 mb-4">
          <a class="btn btn-primary " onclick="javascript:window.print()">Imprimir</a>     
          <a class="btn btn-danger " href="clienteGuardado.php">Cancelar</a>
           </div>
    </form>


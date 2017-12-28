<?php
  require_once('layout/header.php');
  require_once('layout/menu.php');
  require_once('core/classClientes.php');
  $cliente = new Clientes();
  $lista = $cliente->todos();
  $listaV = $cliente->listaVendedor();
?>

  <table class="table table-fixed">
    <thead>
      <tr>
        <th scope="col">Cliente</th>
        <th scope="col">Correo</th>
        <th scope="col">Telefono</th>
        <th scope="col">Direccion</th>
        <th scope="col">Vendedor</th>
        <th class="text-center">Eliminar</th>
        <th class="text-center">Actualizar</th>
      </tr>
    </thead>
    <tbody class="mh-10">
        <?php
          foreach ($lista as $key) {
        ?>
        <tr>
          <td><?php  echo $key['nombres']." ".$key['apellidos'];?></td>
          <td><?php  echo $key['correo'];?></td>
          <td><?php  echo $key['telefono'];?></td>
          <td><?php  echo $key['direccion'];?></td>
          <td>
            <?php
              $idVendedor = $key['idVendedor'];
              $datos = $cliente->infoVendedor($idVendedor);
              //var_dump($datos);
              echo $datos['nombres']." ".$datos['apellidos'];
            ?>
          </td>
          <td class="text-center"><a href="core/actionsCliente.php?accion=del&id=<?php  echo $key['id'];?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a> </td>
          <td class="text-center"><a href="formClientes.php?id=<?php  echo $key['id'];?>"><i class="fa fa-pencil" aria-hidden="true"></i></a> </td>
        </tr>
        <?php
          }
        ?>
      </tbody>

  </table>
  <!-- Button trigger modal -->
  <?php
  if (count($listaV) == 0) {
    ?>
    <div class="alert alert-danger" role="alert">
        Error, debes registrar vendedores antes de ingresar clientes.
    </div>
    <?php
  }else{
  ?>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Nuevo Cliente
  </button>
  <?php
    }
  ?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="" action="core/actionsCliente.php?accion=add" method="post">
          <div class="form-group">
            <label for="nombresCliente">Nombres</label>
            <input type="text" class="form-control" id="nombresCliente" name="nombresCliente" placeholder="Ingrese el nombre del Cliente" required>
          </div>
          <div class="form-group">
            <label for="apellidosCliente">Apellidos</label>
            <input type="text" class="form-control" id="apellidosCliente" name="apellidosCliente" placeholder="Ingrese los apellidos del Cliente" required>
          </div>
          <div class="form-group">
            <label for="mailCliente">Correo</label>
            <input type="email" class="form-control" id="mailCliente" name="mailCliente" placeholder="Ingrese el correo del Cliente" required>
          </div>
          <div class="form-group">
            <label for="telefonoCliente">Telefono</label>
            <input type="text" class="form-control" id="telefonoCliente" name="telefonoCliente" placeholder="Ingrese el telefono del Cliente" required>
          </div>
          <div class="form-group">
            <label for="direccionCliente">Direccion</label>
            <input type="text" class="form-control" id="direccionCliente" name="direccionCliente" placeholder="Ingrese la direccion del Cliente" required>
          </div>
          <div class="form-group">
            <label for="idVendedor">Vendedor</label>
            <select class="custom-select" name="idVendedor">
              <?php
                foreach ($listaV as $key) {
                  ?>
                  <option value="<?php echo $key['id']; ?>"><?php  echo $key['nombres']." ".$key['apellidos']; ?></option>
                  <?php
                }
              ?>
            </select>
          </div>
          <input type="submit" class="btn btn-primary" value="Registrar">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<?php
  require_once('layout/footer.php');
?>

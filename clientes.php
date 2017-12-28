<?php
  require_once('layout/header.php');
  require_once('layout/menu.php');
  require_once('core/classVendedores.php');
  $vendedor = new Vendedores();
  $lista = $vendedor->todos();
?>

  <table class="table table-fixed">
    <thead>
      <tr>
        <th scope="col">Vendedor</th>
        <th scope="col">Identidad</th>
        <th scope="col">Correo</th>
        <th scope="col">Genero</th>
        <th scope="col">Fecha Ingreso</th>
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
          <td><?php  echo $key['identidad'];?></td>
          <td><?php  echo $key['correo'];?></td>
          <td><?php  echo $key['genero'];?></td>
          <td><?php  echo $key['ingreso'];?></td>
          <td class="text-center"><a href="core/actionsVendedor.php?accion=del&id=<?php  echo $key['id'];?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a> </td>
          <td class="text-center"><a href="formVendedores.php?id=<?php  echo $key['id'];?>"><i class="fa fa-pencil" aria-hidden="true"></i></a> </td>
        </tr>
        <?php
          }
        ?>
      </tbody>

  </table>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Nuevo Vendedor
  </button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Vendedor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="" action="core/actionsVendedor.php?accion=add" method="post">
          <div class="form-group">
            <label for="nombresVendedor">Nombres</label>
            <input type="text" class="form-control" id="nombresVendedor" name="nombresVendedor" placeholder="Ingrese el nombre del vendedor" required>
          </div>
          <div class="form-group">
            <label for="apellidosVendedor">Apellidos</label>
            <input type="text" class="form-control" id="apellidosVendedor" name="apellidosVendedor" placeholder="Ingrese los apellidos del vendedor" required>
          </div>
          <div class="form-group">
            <label for="idVendedor">Identificacion</label>
            <input type="text" class="form-control" id="idVendedor" name="idVendedor" placeholder="Ingrese el numero de identificacion del vendedor" required>
          </div>
          <div class="form-group">
            <label for="mailVendedor">Correo</label>
            <input type="email" class="form-control" id="mailVendedor" name="mailVendedor" placeholder="Ingrese el correo del vendedor" required>
          </div>
          <div class="form-group">
            <label for="generoVendedor">Genero</label>
            <select class="custom-select" name="generoVendedor">
              <option value="Masculino">Masculino</option>
              <option value="Femenino">Femenino</option>
            </select>
          </div>
          <div class="form-group">
            <label for="ingresoVendedor">Fecha de Ingreso</label>
            <input type="date" class="form-control" id="ingresoVendedor" name="ingresoVendedor" placeholder="Ingrese la fecha de ingreso a la compañia del vendedor" required>
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

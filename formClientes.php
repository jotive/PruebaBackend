<?php
  require_once('layout/header.php');
  require_once('layout/menu.php');
  require_once('core/classVendedores.php');

  if (isset($_GET['id'])) {
    $id= $_GET['id'];
  }
  $vendedor = new Vendedores();
  $datos = $vendedor->info($id);
?>
<div class="row pt-2">
  <div class="col-12 d-flex justify-content-center">
    <form class="col-4" action="core/actionsVendedor.php?accion=upd&id=<?php echo $id; ?>" method="post">
      <div class="form-group">
        <label for="nombresVendedor">Nombres</label>
        <input type="text" class="form-control" id="nombresVendedor" name="nombresVendedor" placeholder="Ingrese el nombre del vendedor" required value="<?php echo $datos['nombres']?>">
      </div>
      <div class="form-group">
        <label for="apellidosVendedor">Apellidos</label>
        <input type="text" class="form-control" id="apellidosVendedor" name="apellidosVendedor" placeholder="Ingrese los apellidos del vendedor" required value="<?php echo $datos['apellidos']?>">
      </div>
      <div class="form-group">
        <label for="idVendedor">Identificacion</label>
        <input type="text" class="form-control" id="idVendedor" name="idVendedor" placeholder="Ingrese el numero de identificacion del vendedor" required value="<?php echo $datos['identidad']?>">
      </div>
      <div class="form-group">
        <label for="mailVendedor">Correo</label>
        <input type="email" class="form-control" id="mailVendedor" name="mailVendedor" placeholder="Ingrese el correo del vendedor" required value="<?php echo $datos['correo']?>">
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
        <input type="date" class="form-control" id="ingresoVendedor" name="ingresoVendedor" placeholder="Ingrese la fecha de ingreso a la compañia del vendedor" required value="<?php echo $datos['ingreso']?>">
      </div>
      <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
    </form>
  </div>
</div>

<?php
  require_once('layout/footer.php');
?>

<?php

require_once('classClientes.php');

if (isset($_GET['accion'])) {
  $accion = $_GET['accion'];
  switch ($accion) {
    case 'add':
      $clie = new Clientes();
      $cNom = $_POST['nombresCliente'];
      $cApe = $_POST['apellidosCliente'];
      $cMai = $_POST['mailCliente'];
      $cTel = $_POST['telefonoCliente'];
      $cDir = $_POST['direccionCliente'];
      $cIdv = $_POST['idVendedor'];
      $clie->add($cNom, $cApe, $cMai, $cTel, $cDir, $cIdv);
      $clie = null;
      header("location: ../clientes.php?m=addOk");
      break;

    case 'del':
      $clie = new Clientes();
      $cId = $_GET['id'];
      $clie->del($cId);
      $clie = null;
      header("location: ../clientes.php?m=delOk");
      break;

    case 'upd':
      $vend = new Vendedores();
      $vId  = $_GET['id'];
      $vNom = $_POST['nombresVendedor'];
      $vApe = $_POST['apellidosVendedor'];
      $vIde = $_POST['idVendedor'];
      $vMai = $_POST['mailVendedor'];
      $vGen = $_POST['generoVendedor'];
      $vIng = $_POST['ingresoVendedor'];
      $vend->upd($vId, $vNom, $vApe, $vIde, $vMai, $vGen, $vIng);
      $vend = null;
      header("location: ../vendedores.php?m=updOk");
    break;

    default:
      # code...
      break;
  }
}

?>

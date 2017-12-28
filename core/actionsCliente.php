<?php

require_once('classVendedores.php');

if (isset($_GET['accion'])) {
  $accion = $_GET['accion'];
  switch ($accion) {
    case 'add':
      $vend = new Vendedores();
      $vNom = $_POST['nombresVendedor'];
      $vApe = $_POST['apellidosVendedor'];
      $vIde = $_POST['idVendedor'];
      $vMai = $_POST['mailVendedor'];
      $vGen = $_POST['generoVendedor'];
      $vIng = $_POST['ingresoVendedor'];
      $vend->add($vNom, $vApe, $vIde, $vMai, $vGen, $vIng);
      $vend = null;
      header("location: ../vendedores.php?m=addOk");
      break;

    case 'del':
      $vend = new Vendedores();
      $vId = $_GET['id'];
      $vend->del($vId);
      $vend = null;
      header("location: ../vendedores.php?m=delOk");
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

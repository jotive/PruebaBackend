<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gestion de Clientes</title>

    <!-- Hoja de estilo Principal -->
    <link rel="stylesheet" href="rsc/css/main.css">

    <!-- Importando librerias -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


    <!-- Importando fuentes -->
    <link href="https://fonts.googleapis.com/css?family=Lato|Slabo+27px" rel="stylesheet">

  </head>
  <body>
  <!-- Lista de Mensajes -->
  <?php
  if(isset($_GET['m'])){
    $mes = $_GET['m'];
    switch ($mes) {
      case 'addOk':
        ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Bien hecho!</strong> El registro fue agregado
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php
        break;

      case 'delOk':
        ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Bien hecho!</strong> El registro fue eliminado correctamente
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php
        break;
      case 'delOk':
        ?>
          <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>Bien hecho!</strong> El registro fue actualizado correctamente
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php
        break;

      default:
        # code...
        break;
    }
  }
  ?>

  <div class="container-fluid">

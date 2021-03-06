<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="../css/estilos.css" />
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <title>Comercio DaVinci</title>
</head>

<body>
  <header>

    <?php
    function Activo($item_de_menu)
    {
      echo strpos($_SERVER['PHP_SELF'], $item_de_menu) ? 'active' : '';
    }

    ?>

    <nav class="navbar barra-navegacion navbar-expand-lg navbar-light fixed-top mb-5">
      <a class="navbar-brand pl-3 nav-link" href="./index.php">ComercioDavinci</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav nav-container pl-3">
          <a class="nav-item nav-link  inicio <?php Activo('index') ?>" href="./index.php">Inicio</a>
          <a class="nav-item nav-link  productos <?php Activo('listado') ?> " href="./listado.php">Productos</a>
          <a class="nav-item nav-link  contacto <?php Activo('contacto') ?> " href="./contacto.php">Contacto</a>
          <a class="nav-item nav-link  contacto <?php Activo('nuevos') ?> " href="./nuevos.php">Nuevos</a>
        </div>
      </div>
    </nav>

  </header>
  
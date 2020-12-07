<?php

require("header.php");

$productos = json_decode(file_get_contents('../../data/productos.json'), true);


?>



<main>

  <div class="container">


    <div class="row px-5 text-center my-5">


      <div class="col">
        <div class="row">
          <div class="col-12 my-5">
            <h1 class="display-3">PRODUCTOS NUEVOS</h1>
          </div>
          <?php

          foreach ($productos as $producto) {
            if ($producto["nuevo"] === true) {
              echo "<div class='col-sm-6'>
            <div class='card text-center my-3'>
              <img src='" . $producto["imagen"] . "' class='card-img-top' alt=" . $producto["nombre"] . ">
              <div class='card-header'>
                <h5 class='card-title'>" . $producto["nombre"] . "</h5>
              </div>
              <div class='card-body'>
                <h4 class='p-0 m-0'> $" . $producto["precio"] . " </h4>
                <p class='mt-3 mb-0'>" . $producto["descripcion"] . "</p>
              </div>
              <div class='card-footer'>
                <a href='detalle.php?id_producto=" . $producto["id"] . "' class='btn btn-primary'>Ver más</a>
              </div>
            </div>
          </div>";
            }
          }

          ?>

        </div>
      </div>
    </div>
  </div>
</main>

<?php require('footer.php') ?>
<?php require('header.php') ?>

<?php

$productos = json_decode(file_get_contents('../../data/productos.json'), true);

if (isset($_REQUEST['id_marca'])) {
  $id_marca = $_REQUEST['id_marca'];
} else {
  $id_marca = '';
}

if (isset($_REQUEST['id_categoria'])) {
  $id_categoria = $_REQUEST['id_categoria'];
} else {
  $id_categoria = '';
}

?>


<main>
  <div class="container-fluid mt-4">

    <div class="row px-5 text-center">

      <?php require('aside.php') ?>

      <div class="col-9">
        <div class="row">

          <?php

          foreach ($productos as $producto) {
            if (($producto['id_categoria'] == $id_categoria || $id_categoria == '')
              && ($producto['id_marca'] == $id_marca || $id_marca == '')
            ) {
              echo '<div class="col-6 producto">';
              echo '<div class="card text-center my-3">';
              echo '<img src="' . $producto['imagen'] . '" class="card-img-top"  alt="' . $producto['nombre'] . '">';
              echo '<div class="card-header">';
              echo '<h5 class="card-title producto-nombre">' . $producto['nombre'] . '</h5>';
              echo '</div>';
              echo '<div class="card-body">';
              echo '<h4 class="p-0 m-0">' . '$' . $producto['precio'] . '</h4>';
              echo '<p class="mt-3 mb-0 producto-descripcion">' . $producto['descripcion'] . '</p>';
              echo '</div>';
              echo '<div class="card-footer">';
              echo '<a href="./detalle.php?id_producto=' . $producto['id'] . '" class="btn btn-primary">Ver más</a>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
            }
          }

          ?>
          
        </div>
      </div>
    </div>
  </div>
</main>


<?php require('footer.php') ?>
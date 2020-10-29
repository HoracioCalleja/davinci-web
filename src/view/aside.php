<?php

$PAGINA_LISTADO = 'listado.php';

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

$categorias = json_decode(file_get_contents('../../data/categorias.json'), true);
$marcas = json_decode(file_get_contents('../../data/marcas.json'), true);


?>

<div class="col-3">
  <form action="">
    <div class="list-group lista-filtros" data-categoria=<?php echo '"' . $id_categoria . '"' ?> data-marca=<?php echo '"' . $id_marca . '"' ?>>

      <?php

      echo ' <h3 class="py-3 ">  <a class="filtro-categorias"  data-id="marca"  href="' . $PAGINA_LISTADO . '?id_marca=&id_categoria=' . $id_categoria . '">Marcas</a> </h3>';

      foreach ($marcas as $marca) {
        echo '<a class="" href="' . $PAGINA_LISTADO . '?id_marca=' . $marca['id_marca'] . '&id_categoria=' . $id_categoria . '">';
        echo ' <button data-id="' . $marca['nombre'] . '" type="button" data-filtro="marca"  class="list-group-item list-group-item-action marca ">
        ' . $marca['nombre'] . '
      </button>';
        echo '</a>';
      }

      echo ' <h3 class="py-3 " >  <a class="filtro-marcas" data-id="categoria"  href="' . $PAGINA_LISTADO . '?id_marca=' . $id_marca . '&id_categoria=">Categorias</a> </h3>';

      foreach ($categorias as $categoria) {
        echo '<a class="" href="' . $PAGINA_LISTADO . '?id_marca=' . $id_marca . '&id_categoria=' . $categoria['id_categoria'] . '">';
        echo ' <button type="button" data-id="' . $categoria['nombre'] . '" data-filtro="categoria"  class="list-group-item list-group-item-action  categoria ">
        ' . $categoria['nombre'] . '
      </button>';
        echo '</a>';
      }

      ?>
    </div>
  </form>
  <div class="row py-4">
    <div class="col-12 mt-3">
      <h3 class="mb-4 buscador-label"> Busque por producto </h3>
      <input class="form-control mr-sm-2 buscador p-4 text-center" type="search" placeholder="Ej: Remera nike" aria-label="Buscar" />
    </div>
  </div>
</div>
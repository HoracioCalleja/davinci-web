<?php require('header.php') ?>

<?php

$PAGINA_DETALLE = 'detalle.php';

if (isset($_REQUEST['id_producto'])) {
  $id_producto = $_REQUEST['id_producto'];
} else {
  $id_producto = '';
}

$productos = json_decode(file_get_contents('../../data/productos.json'), true);
$comentarios = json_decode(file_get_contents('../../data/comentarios.json'), true);



$producto = $productos[$id_producto];


?>


<div class="container my-5 p-0">
  <div class="row text-center">
    <div class="col-6 border py-5">
      <a href=<?php echo $producto["imagen"] ?> target="__blank"><img src=<?php echo $producto["imagen"] ?> class="card-img-top" alt="Remera blanca nike"></a>
    </div>
    <div class="col-4 m-auto py-3 border">
      <h2 class="py-3">Nike</h3>
        <p class=""> <strong> <?php echo $producto["nombre"] ?> </strong> </p>
        <p><?php echo $producto["descripcion"] ?></p>
        <p><?php foreach ($producto["talles"] as $talle) echo $talle ?></p>
        <p class=""> Precio: <strong>$<?php echo $producto["precio"] ?> </strong> </p>
        <button type="button" class="btn btn-primary">Comprar</button>
    </div>
  </div>
</div>

<hr>

<div class="container form-comentario my-5 ">
  <div class="row ">
    <div class="col-12  my-3">
      <h2 class="titulo-secundario">Deje su comentario</h2>
    </div>
    <div class="col-12">
      <form action="" method="">
        <div class="form-group my-4">
          <label for="email">Su email</label>
          <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Ej: pepe123@gmail.com">
        </div>
        <div class="form-group my-4">
          <label for="mensaje">Deje un comentario sobre el producto</label>
          <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
        </div>
        <div class="form-group my-4">
          <label for="valoracion">Valoración ( 1-5 )</label>
          <select class="custom-select " name="valoracion" id="valoracion">
            <option selected>Seleccione</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </div>
</div>

<hr>
<div class="container ">
  <div class="row ">
    <div class="col-12 mt-3 ">
      <h2 class="titulo-secundario">Comentarios</h2>
    </div>
    <?php

    function tienComentario($comentario)
    {
      global $id_producto;
      return $comentario["id_producto"] == $id_producto;
    }

    $con_comentarios = array_filter($comentarios, "tienComentario");

    if (count($con_comentarios) > 0) {
      sort($con_comentarios);
      foreach ($comentarios as $comentario) {
        if ($comentario["id_producto"] == $id_producto) {
          echo " <div class='col-12 p-4 my-3 border'>
        <p class='autor border-bottom p-3' name='autor'><strong>De:</strong>" . $comentario["email"] . "</p>
        <p class='descripcion p-3 border' name='descripcion'>" . $comentario["descripcion"] . "</p>
        <p class='valoracion p-3' name='valoracion'> <strong>Valoración: </strong> " . $comentario["valoracion"] . "</p>
        <p class='fecha font-weight-light p-3'>" . $comentario["fechaRealizada"] . "</p>
        </div>";
        }
      }
    } else {
      echo "<div class='col-12 p-4 my-3 border'>
            <h3>No hay ningún comentario</h3>
      </div>
      ";
    }

    ?>
  </div>
</div>


<?php require('footer.php') ?>;
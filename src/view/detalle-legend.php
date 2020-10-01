<?php require('header.php') ?>;

<div class="container my-5 p-0">
  <div class="row text-center">
    <div class="col-6 border py-5">
      <a href="../img/Swoosh.jpg" target="__blank"><img src="../img/Swoosh.jpg" class="card-img-top" alt="Remera Swoosh"></a>
    </div>
    <div class="col-4 m-auto py-3 border">
      <h2 class="py-3">Nike</h3>
        <p class=""> <strong> REMERA NIKE LEGEND</strong> </p>
        <p>Entrená con la nueva Remera Nike Legend Reverse Seasonal, confeccionada en un tejido que aporta frescura y comodidad en todo momento.</p>
        <p>Talles: S - M - L - XL - XXL</p>
        <p class=""> Precio: <strong> $950 </strong> </p>
        <button type="button" class="btn btn-primary">Comprar</button>
    </div>
  </div>
</div>

<hr>  

<div class="container form-comentario my-5 ">
  <div class="row ">
    <div class="col-12  my-3" >
      <h2 class="titulo-secundario" >Deje su comentario</h2>
    </div>
    <div class="col-12">
      <form action="" method="">
        <div class="form-group my-4">
          <label for="email">Su email</label>
          <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Ej: horacio@lohizo.com">
          <small id="emailHelp" class="form-text text-muted">No compartiremos tu email</small>
        </div>
        <div class="form-group my-4">
          <label for="mensaje">Deje su comentario sobre el producto</label>
          <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
        </div>
        <div class="form-group my-4">
          <label  for="valoracion">Valoración ( 1-5 )</label>
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
      <div class="col-12 mt-3 " >
        <h2 class="titulo-secundario" >Comentarios</h2>
      </div>
      <div class="col-12 p-4 my-3 border" >
        <p class="autor border-bottom p-3" name="autor" ><strong>De:</strong> Juan </p>
        <p class="descripcion p-3 border" name="descripcion" >Me gustó el produco, lo recomiendo.</p>
        <p class="valoracion p-3" name="valoracion"> <strong>Valoración: </strong> 5/5</p>
        <p class="fecha font-weight-light p-3">11/05/2020</p>
      </div>
  </div>
</div>


<?php require('footer.php') ?>;
<?php require('header.php') ?>

<div class="container text-center mt-5">
  <form action="" method="POST">
    <div class="form-row">
      <div class="form-group col-6">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ej: Horacio">
      </div>
      <div class="form-group col-6">
        <label for="apellido">Apellido</label>
        <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ej: Romero">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-6">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Ej: horacio@gmail.com">
      </div>
      <div class="form-group col-6">
        <label for="telefono">Teléfono</label>
        <input type="tel" class="form-control" id="telefono" placeholder="Ej: 1134176552">
      </div>
    </div>
    <div class="form-group">
      <label for="mensaje">Escriba lo que quiera</label>
      <textarea class="form-control" id="mensaje" rows="3"></textarea>
    </div>
    <div class="form-row ">
      <div class="form-group col-12 text-center">
        <label for="departamento">Enviar a:</label>
        <select class="custom-select" id="departamento">
          <option selected>Seleccione</option>
          <option value="ventas">Ventas</option>
          <option value="desarrolladores">Desarrolladores</option>
          <option value="general">General</option>
        </select>
      </div>
    </div>
    

    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>


<?php require('footer.php') ?>;
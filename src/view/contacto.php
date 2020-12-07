<?php require('header.php');


if (isset($_REQUEST['nombre']) && isset($_REQUEST['apellido']) && isset($_REQUEST['telefono']) && isset($_REQUEST['mensaje']) && isset($_REQUEST['departamento'])  && isset($_REQUEST['email'])) {
  $nombre = $_REQUEST['nombre'];
  $apellido = $_REQUEST['apellido'];
  $telefono = $_REQUEST['telefono'];
  $mensaje = $_REQUEST['mensaje'];
  $email = $_REQUEST['email'];
  $departamento = $_REQUEST['departamento'];

  $consulta_nueva = array("nombre" => $nombre, "apellido" => $apellido, "telefono" => $telefono, "email" => $email, "consulta" => $mensaje, "departamento" => $departamento);

  $consultas = json_decode(file_get_contents('../../data/consultas.json'), true);
  array_push($consultas, $consulta_nueva);
  file_put_contents('../../data/consultas.json', json_encode($consultas));
?>

  <div class="alert alert-success alert-dismissible fade show mt-5 alerta" role="alert">
    <strong>Consulta enviada. Usuario: <?php echo $nombre;
                                        echo " ";
                                        echo $apellido ?> </strong>. Departamento: <?php echo $departamento ?>.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

<?php
}

?>

<div class="container text-center">
  <div class="col-12 mt-5">
    <h1 class="display-3 p-5">CONTACTO</h1>
  </div>
  <form action="./contacto.php" method="get" class="form-contacto">
    <div class="form-row">
      <div class="form-group col-6 my-3">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" required placeholder="Ej: Horacio">
      </div>
      <div class="form-group col-6 my-3">
        <label for="apellido">Apellido</label>
        <input type="text" class="form-control" name="apellido" id="apellido" required placeholder="Ej: Romero">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-6 my-3">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" name="email" id="email" required placeholder="Ej: horacio@gmail.com">
      </div>
      <div class="form-group col-6 my-3">
        <label for="telefono">Teléfono</label>
        <input type="tel" class="form-control" id="telefono" name="telefono" required placeholder="Ej: 1134176552">
      </div>
    </div>
    <div class="form-group my-3">
      <label for="mensaje">Escriba lo que quiera</label>
      <textarea class="form-control" id="mensaje" rows="3" name="mensaje" required></textarea>
    </div>
    <div class="form-row my-3">
      <div class="form-group col-12 text-center">
        <label for="departamento">Enviar a:</label>
        <select class="custom-select" id="departamento" name="departamento" required>
          <option selected value="ventas">Ventas</option>
          <option value="desarrolladores">Desarrolladores</option>
          <option value="general">General</option>
        </select>
      </div>
    </div>


    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>

<script>
  let alerta = document.querySelector('.alerta');
  setTimeout(() => alerta.style.display = "none", 3000);
</script>

<?php require('footer.php') ?>
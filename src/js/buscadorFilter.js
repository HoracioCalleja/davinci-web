const $buscador = document.querySelector(".buscador"),
  $productos = document.querySelectorAll(".producto");

if ($buscador) {
  document.addEventListener("keyup", (e) => {
    console.log($buscador.value);
    $productos.forEach(($producto) => {
      const productoNombre = $producto.querySelector(".producto-nombre")
        .textContent;
      const productoDescripcion = $producto.querySelector(
        ".producto-descripcion"
      ).textContent;
      if (
        !productoNombre.includes($buscador.value) ||
        !productoDescripcion.includes($buscador.value)
      ) {
        $producto.classList.add("ocultar");
      } else {
        $producto.classList.remove("ocultar");
      }
    });
  });
}

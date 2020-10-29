const $buscador = document.querySelector(".buscador"),
  $productos = document.querySelectorAll(".producto");

if ($buscador) {
  $buscador.addEventListener("keydown", (e) => {
    $productos.forEach(($producto) => {
      const productoNombre = $producto.querySelector(".producto-nombre")
        .textContent;
      const productoDescripcion = $producto.querySelector(
        ".producto-descripcion"
      ).textContent;
      if (
        !productoNombre.includes(e.target.value) ||
        !productoDescripcion.includes(e.target.value)
      ) {
        $producto.classList.add("ocultar");
      }
    });
  });
}

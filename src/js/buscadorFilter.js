export function buscador(buscadorSelector, productosSelector) {
  const $buscador = document.querySelector(buscadorSelector),
    $productos = document.querySelectorAll(productosSelector);

  if ($buscador) {
    document.addEventListener("keyup", (e) => {
      console.log($buscador.value.toLowerCase());
      $productos.forEach(($producto) => {
        const productoNombre = $producto
          .querySelector(".producto-nombre")
          .textContent.toLowerCase();
        const productoDescripcion = $producto
          .querySelector(".producto-descripcion")
          .textContent.toLowerCase();
        if (
          !productoNombre.includes($buscador.value) &&
          !productoDescripcion.includes($buscador.value)
        ) {
          $producto.classList.add("ocultar");
        } else {
          $producto.classList.remove("ocultar");
        }
      });
    });
  }
}


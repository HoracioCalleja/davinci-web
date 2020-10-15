const d = document,
  // $buscador = d.querySelector(".buscador"),
  $categorias = d.querySelectorAll(".categoria"),
  $marcas = d.querySelectorAll(".marca"),
  $listaFiltros = d.querySelector(".lista-filtros"),
  categoriaId = $listaFiltros.dataset.categoria,
  marcaId = $listaFiltros.dataset.marca;

d.addEventListener("click", (e) => {
  if (e.target.matches(".categoria") || e.target.matches(".marca")) {
    const $selectedFilter = e.target;
    const key = $selectedFilter.dataset.id;
    const filterType = $selectedFilter.dataset.filtro;
    manageActiveFilter(key, filterType);
  }

  if (
    e.target.matches(".filtro-categorias") ||
    e.target.matches(".filtro-marcas")
  ) {
    removeActiveFilters(e.target.dataset.id);
  }
});

// $buscador.addEventListener("keydown", (e) => {
//   console.log($buscador.value);
//   console.log(e.target);
// });

d.addEventListener("DOMContentLoaded", () => {
  if (categoriaId === "" && marcaId === "") {
    localStorage.clear();
  } else {
    $marcas.forEach(($filtro) => {
      let isCached = isSaved($filtro.dataset.id);
      if (isCached) {
        $filtro.classList.add("active");
      }
    });
    $categorias.forEach(($filtro) => {
      let isCached = isSaved($filtro.dataset.id);
      if (isCached) {
        $filtro.classList.add("active");
      }
    });
  }
});

function isSaved(filterKey) {
  let cachedItem = localStorage.getItem(filterKey);
  return cachedItem ? true : false;
}

function removeActiveFilters(filterType) {
  switch (filterType) {
    case "categoria":
      $categorias.forEach(($filtro) => {
        const isCached = isSaved($filtro.dataset.id);
        if (isCached) {
          localStorage.removeItem($filtro.dataset.id);
        }
      });
      break;
    case "marca":
      $marcas.forEach(($filtro) => {
        const isCached = isSaved($filtro.dataset.id);
        if (isCached) {
          localStorage.removeItem($filtro.dataset.id);
        }
      });
      break;
  }
}

function manageActiveFilter(filterKey, filterType) {
  const isCached = isSaved(filterKey);
  if (isCached) {
    return;
  } else {
    removeActiveFilters(filterType);
    localStorage.setItem(filterKey, filterKey);
  }
}

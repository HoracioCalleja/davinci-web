const $categorias = document.querySelectorAll(".categoria"),
  $marcas = document.querySelectorAll(".marca"),
  $listaFiltros = document.querySelector(".lista-filtros");

if ($listaFiltros) {
  const categoriaId = $listaFiltros.dataset.categorias,
    marcaId = $listaFiltros.dataset.marca;

  $listaFiltros.addEventListener("click", (e) => {
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

  document.addEventListener("DOMContentLoaded", () => {
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
}

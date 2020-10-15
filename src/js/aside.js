const d = document,
  $buscador = d.querySelector('.buscador');

d.addEventListener('click', (e) => {
  if(e.target.matches('.categoria') || e.target.matches('.marca')){
    let $selected = e.target;
    $selected.classList.toggle('active');
  }
})

$buscador.addEventListener('keydown', (e) => {
  console.log($buscador.value)
  console.log(e.target)

})
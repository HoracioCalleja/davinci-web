<?php 

$categorias = array(
  1 => array(
    "id_categoria" => "1",
    "nombre" => "Remera"
  ),
  2 => array(
    "id_categoria" => "2",
    "nombre" => "Pantalon"
  ),
  3 => array(
    "id_categoria" => "3",
    "nombre" => "Zapatilla"
  ),
);
$puntero = fopen("../../data/categorias.json", "w");

$categoriasJSON = json_encode($categorias);

fwrite($puntero,$categoriasJSON,strlen($categoriasJSON));

fclose($puntero);

?>
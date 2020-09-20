<?php 

$marcas = array(
  1 => array(
    "id_marca" => "1",
    "nombre" => "Nike"
  ),
  2 => array(
    "id_marca" => "2",
    "nombre" => "Adidas"
  ),
  3 => array(
    "id_marca" => "3",
    "nombre" => "Puma"
  ),
  4 => array(
    "id_marca" => "4",
    "nombre" => "Reebok"
  ),
  5 => array(
    "id_marca" => "5",
    "nombre" => "Asics"
  ),
);


$puntero = fopen("../../data/marcas.json", "w");

$marcasJSON = json_encode($marcas);

fwrite($puntero,$marcasJSON,strlen($marcasJSON));

fclose($puntero);

?>
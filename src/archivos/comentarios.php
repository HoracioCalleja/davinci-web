<?php 

$comentarios = array(
  1 => array(
    "id" => 1,
    "id_producto" => 1,
    "descripcion" => "Lindo producto",
    "valoracion" => 4,
    "email" => "guillecapo@gmail.com",
    "fechaRealizada" => "11/08/2020",
  ),
  2 => array(
    "id" => 2,
    "id_producto" => 3,
    "descripcion" => "Distinto a la foto",
    "valoracion" => 3,
    "email" => "eugecapa@gmail.com",
    "fechaRealizada" => "11/08/2020",
  ),
  3 => array(
    "id" => 3,
    "id_producto" => 5,
    "descripcion" => "Muy lindo producto",
    "valoracion" => 5,
    "email" => "gmauro@gmail.com",
    "fechaRealizada" => "11/03/2020",
  ),
  4 => array(
    "id" => 4,
    "id_producto" => 12,
    "descripcion" => "Me gustó mucho",
    "valoracion" => 5,
    "email" => "sarasa@gmail.com",
    "fechaRealizada" => "21/3/2019",
  ),
  5 => array(
    "id" => 5,
    "id_producto" => 7,
    "descripcion" => "Me quedó perfecto",
    "valoracion" => 4,
    "email" => "charly@gmail.com",
    "fechaRealizada" => "08/08/2020",
  ),
  6 => array(
    "id" => 6,
    "id_producto" => 15,
    "descripcion" => "Conforme con este producto",
    "valoracion" => 3,
    "email" => "milenasarasa@gmail.com",
    "fechaRealizada" => "11/11/2011",
  ),
  7 => array(
    "id" => 7,
    "id_producto" => 4,
    "descripcion" => "No me gustó la calidad",
    "valoracion" => 2,
    "email" => "criticador@gmail.com",
    "fechaRealizada" => "31/12/2020",
  ),
);

$puntero = fopen("../../data/comentarios.json", "w");

$comentariosJSON = json_encode($comentarios);

fwrite($puntero,$comentariosJSON,strlen($comentariosJSON));

fclose($puntero);

?>


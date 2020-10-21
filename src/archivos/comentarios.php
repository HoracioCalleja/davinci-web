<?php

date_default_timezone_set("America/Argentina/Buenos_Aires");

$comentarios[date('YmdHisU')] = array(
  "fecha" => date('d-m-Y H:i:s'),
  "id_producto" => 1,
  "descripcion" => "Lindo producto",
  "valoracion" => 4,
  "email" => "guillecapo@gmail.com",
  "fechaRealizada" => "11/08/2020",
);
sleep(1);
$comentarios[date('YmdHisU')] = array(
  "fecha" => date('d-m-Y H:i:s'),
  "id_producto" => 1,
  "descripcion" => "Medio pelo",
  "valoracion" => 4,
  "email" => "carlitosbala@gmail.com",
  "fechaRealizada" => "11/06/2020",
);
sleep(1);
$comentarios[date('YmdHisU')] = array(
  "fecha" => date('d-m-Y H:i:s'),
  "id_producto" => 3,
  "descripcion" => "Distinto a la foto",
  "valoracion" => 3,
  "email" => "eugecapa@gmail.com",
  "fechaRealizada" => "11/08/2020",
);
sleep(1);

$comentarios[date('YmdHisU')] = array(
  "fecha" => date('d-m-Y H:i:s'),
  "id_producto" => 5,
  "descripcion" => "Muy lindo producto",
  "valoracion" => 5,
  "email" => "gmauro@gmail.com",
  "fechaRealizada" => "11/03/2020",
);
sleep(1);

$comentarios[date('YmdHisU')] = array(
  "fecha" => date('d-m-Y H:i:s'),
  "id_producto" => 12,
  "descripcion" => "Me gustó mucho",
  "valoracion" => 5,
  "email" => "sarasa@gmail.com",
  "fechaRealizada" => "21/3/2019",
);
sleep(1);

$comentarios[date('YmdHisU')] = array(
  "fecha" => date('d-m-Y H:i:s'),
  "id_producto" => 7,
  "descripcion" => "Me quedó perfecto",
  "valoracion" => 4,
  "email" => "charly@gmail.com",
  "fechaRealizada" => "08/08/2020",
);
sleep(1);

$comentarios[date('YmdHisU')] = array(
  "fecha" => date('d-m-Y H:i:s'),
  "id_producto" => 15,
  "descripcion" => "Conforme con este producto",
  "valoracion" => 3,
  "email" => "milenasarasa@gmail.com",
  "fechaRealizada" => "11/11/2011",
);
sleep(1);

$comentarios[date('YmdHisU')] = array(
  "fecha" => date('d-m-Y H:i:s'),
  "id_producto" => 4,
  "descripcion" => "No me gustó la calidad",
  "valoracion" => 2,
  "email" => "criticador@gmail.com",
  "fechaRealizada" => "31/12/2020",
);


$puntero = fopen("../../data/comentarios.json", "w");

$comentariosJSON = json_encode($comentarios);

fwrite($puntero, $comentariosJSON, strlen($comentariosJSON));

fclose($puntero);

<?php 

$consultas = array(
  array(
    "nombre" => "Horacio",
    "apellido" => "Calleja",
    "telefono" => "1134563761",
    "email" => "asd@asd.com",
    "consulta" => "Quiero hablar con el gerente",
    "departamento" => "general"
  )
);
$puntero = fopen("../../data/consultas.json", "w");

$consultasJSON = json_encode($consultas);

fwrite($puntero,$consultasJSON,strlen($consultasJSON));

fclose($puntero);

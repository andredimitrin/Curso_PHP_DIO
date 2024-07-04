<?php

// $data = new DateTime();

// echo $data->format('d/m/Y H:i:s');

$data = new DateTime();

$intervalo = new DateInterval('PT5M'); // adiciona um periodo de 5 minutos

$data->sub($intervalo);

var_dump($data);



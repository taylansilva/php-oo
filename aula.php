<?php

/*
-> P    representação de periodo: vem antes de dia, mês, ano e semana
Y   anos
M   meses
D   dias
W   semanas
-> T    representação de tempo: vem antes de hora, minuto e segundo
H   horas
M   minutos
S   segundos
*/

$data = new DateTime();
$dataAdd = new DateTime();
$dataSub = new DateTime();

$intervalo = new DateInterval('P5Y10M5DT10H50M10S'); // adiciona um periodo de 5 minutos

$dataAdd->add($intervalo);
$dataSub->sub($intervalo);

$exercicioIntervalo = new DateInterval('P5DT10H50M');
$data->sub($exercicioIntervalo);

var_dump($dataAdd);
echo '<br>';
var_dump($dataSub);
echo '<br>';
echo '<br>';
echo $data->format('d/m/y H:i:s');

<?php 
$horas_minutos_segundos = readline("HH:MM:SS ");
$tiempo = explode(":", $horas_minutos_segundos);

$tiempo_a_segundo = $tiempo[0] * 3600;
$tiempo_a_segundo = $tiempo_a_segundo * $tiempo[1] * 60;
$tiempo_a_segundo += $tiempo[2];

 print_r("Son $tiempo_a_segundo segundos");
 echo("\n");



 $conversor_segundos = readline("Ingrese los segundos ");
 
 $hora = (int) ($conversor_segundos / 3600);
 $segundo = (int) ($conversor_segundos % 3600);
 $minuto = (int) ($segundo / 60);
 $segundo_modulo =(int) ($conversor_segundos % 60);

 print_r("$hora horas, $minuto minutos, $segundo_modulo segundos");
 echo("\n");
?>
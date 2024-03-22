<?php 
$primer_valor_numerico = 6;
$segundo_valor_numerico = 3;
$valor_string = "13";

//------------------  Adición
echo "$primer_valor_numerico + $segundo_valor_numerico = ";
$adicion = $primer_valor_numerico + $segundo_valor_numerico;
var_dump($adicion);

//------------------ Sustracción
echo "$primer_valor_numerico - $segundo_valor_numerico = ";
$sustracción = $primer_valor_numerico - $segundo_valor_numerico;
var_dump($sustracción);

//------------------ Multiplicación
echo "$primer_valor_numerico * $segundo_valor_numerico = ";
$multiplicación = $primer_valor_numerico * $segundo_valor_numerico;
var_dump($multiplicación);

//------------------ División
echo "$primer_valor_numerico / $segundo_valor_numerico = ";
$division = $primer_valor_numerico / $segundo_valor_numerico;
var_dump($division);

//------------------ Módulo
echo "$primer_valor_numerico  % $segundo_valor_numerico = ";
$modulo = $primer_valor_numerico % $segundo_valor_numerico;
var_dump($modulo);

//------------------ Potenciación
echo "$primer_valor_numerico ** $segundo_valor_numerico = ";
$potenciacion = $primer_valor_numerico ** $segundo_valor_numerico;
var_dump($potenciacion);

//------------------ Identidad 
var_dump($valor_string);
echo " -> ";
$identidad = +$valor_string;
var_dump($identidad);

//------------------ Negación
echo "$primer_valor_numerico -> ";
$negacion = -$primer_valor_numerico;
var_dump($negacion);
?>
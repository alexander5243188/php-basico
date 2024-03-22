<?php 
$valor_numerico_primero = 43;
$valor_string = "43";
$valor_numerico_segundo = $valor_numerico_primero + 27;
$suma_string_numero = $valor_numerico_segundo + $valor_string;

define("PRIMER_VALOR", 43);
define("SEGUNDO_VALOR", 27 + PRIMER_VALOR);
define("STRING", "43");
define("SUMA_STRING_SEGUNDO_VALOR", STRING + SEGUNDO_VALOR);

var_dump($valor_numerico_primero);
var_dump($valor_string);
var_dump($valor_numerico_segundo);
var_dump($suma_string_numero);

var_dump(PRIMER_VALOR);
var_dump(SEGUNDO_VALOR);
var_dump(SUMA_STRING_SEGUNDO_VALOR);

$caja_frutillas_rosanela = "6 bs es el precio de la caja de frutillas";
$precio_subio_caja_frutilla = $caja_frutillas_rosanela + 2;
echo($precio_subio_caja_frutilla);


?>
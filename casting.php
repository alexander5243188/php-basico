<?php

$variable_string = "43";

$variable_numero = (int) $variable_string;

var_dump($variable_string);
var_dump($variable_numero);

$promedio_dias_trabajados = 2.3;

var_dump($promedio_dias_trabajados);

$dias_trabajados = (int) $promedio_dias_trabajados;
var_dump($dias_trabajados);

$valor_cero = 0;
$cadena_vacia =  "";
$valor_diferente_cero_positivo = 13;
$valor_diferente_cero_negativo = -11;

$bool_valor_cero = (bool) $valor_cero;
$bool_cadena_vacia = (bool) $cadena_vacia;
$bool_valor_diferente_cero_positivo = (bool) $valor_diferente_cero_positivo;
$bool_valor_diferente_cero_negativo = (bool) $valor_diferente_cero_negativo;

var_dump($bool_valor_cero);
var_dump($bool_cadena_vacia);
var_dump($bool_valor_diferente_cero_positivo);
var_dump($bool_valor_diferente_cero_negativo);

?>
<?php
$primer_valor_numerico = 1;
$segundo_valor_numerico = 2;
$primer_valor_string = "2";

//----------------------- Igual, no compara tipos
echo "$primer_valor_numerico == $segundo_valor_numerico = ";
var_dump($primer_valor_numerico == $segundo_valor_numerico);

echo "(no compara tipos)$segundo_valor_numerico == $primer_valor_string = ";
var_dump($segundo_valor_numerico == $primer_valor_string);

//----------------------- Identico, compara tipos
echo "$primer_valor_numerico === $segundo_valor_numerico = ";
var_dump($primer_valor_numerico === $segundo_valor_numerico);

echo "(compara tipos)$segundo_valor_numerico === $segundo_valor_numerico = ";
var_dump($segundo_valor_numerico === $primer_valor_string);

//----------------------- Diferente #1
echo "$primer_valor_numerico != $segundo_valor_numerico = ";
var_dump($primer_valor_numerico != $segundo_valor_numerico);

//----------------------- Diferente #2
echo "$primer_valor_numerico <> $segundo_valor_numerico = ";
var_dump ($primer_valor_numerico <> $segundo_valor_numerico);

//----------------------- No identico
echo "$primer_valor_numerico !== $segundo_valor_numerico = ";
var_dump($primer_valor_numerico !== $segundo_valor_numerico);

//----------------------- Menor que
echo "$primer_valor_numerico < $segundo_valor_numerico = ";
var_dump($primer_valor_numerico < $segundo_valor_numerico);

//----------------------- Mayor que
echo "$primer_valor_numerico > $segundo_valor_numerico = ";
var_dump($primer_valor_numerico > $segundo_valor_numerico);

//----------------------- Menor o igual que
echo "$primer_valor_numerico <= $segundo_valor_numerico = ";
var_dump($primer_valor_numerico <= $segundo_valor_numerico);

//----------------------- Mayor o igual que
echo "$primer_valor_numerico >= $segundo_valor_numerico = ";
var_dump($primer_valor_numerico >= $segundo_valor_numerico);

//----------------------- Nave espacial 
echo "$primer_valor_numerico <=> $segundo_valor_numerico = ";
var_dump($primer_valor_numerico <=> $segundo_valor_numerico);

echo "$primer_valor_numerico <=> $primer_valor_numerico = ";
var_dump($primer_valor_numerico <=> $primer_valor_numerico);

echo "$segundo_valor_numerico <=> $primer_valor_numerico = ";
var_dump($segundo_valor_numerico <=> $primer_valor_numerico);

//----------------------- Fucion de null
echo "$primer_valor_numerico ?? $segundo_valor_numerico ";
echo "\n";
echo "$tercer_valor_numerico ?? $primer_valor_numerico";
echo "\n";
?>
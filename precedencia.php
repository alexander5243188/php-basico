<?php 
$primer_valor = 1;
$copia_primer_valor = $primer_valor ++;


print_r($copia_primer_valor);
echo("\n");

// asociatividad de izquierda
print_r(1 - 2 - 3);
echo("\n");

// asociatividad de derecha
$primera_variable = 6;

$tercera_variable = $segunda_variable = $primera_variable;
print_r($tercera_variable);
echo("\n");
print_r($segunda_variable);
?>
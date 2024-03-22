<?php
// tabla and

$valor_verdadero = true;
$valor_falso = false;

// ----------------------------------------------------------- operador and
echo("********* Operador and *********");
echo("\n");

echo"$valor_verdadero and $valor_verdadero = ";
$primer_resultado_and = $valor_verdadero and $valor_verdadero;
var_dump($primer_resultado_and);
echo("\n");

echo "$valor_verdadero and 0 $valor_falso = ";
$segundo_resultado_and = $valor_verdadero and $valor_falso;
var_dump($segundo_resultado_and);
echo("\n");

echo "0 $valor_falso and $valor_verdadero = ";
$tercer_resultado_and = $valor_falso and $valor_verdadero;
var_dump ($tercer_resultado_and);
echo("\n");

echo "0 $valor_falso and 0 $valor_falso =  ";
$cuarto_resultado_and = $valor_falso and $valor_falso;
var_dump($cuarto_resultado_and);
echo("\n");

echo "$valor_verdadero && $valor_verdadero = ";
$primer_resultado_ampersan = $valor_verdadero && $valor_verdadero;
var_dump($primer_resultado_ampersan);
echo("\n");

echo "$valor_verdadero && 0 $valor_falso = ";
$segundo_resultado_ampersan = $valor_verdadero && $valor_falso;
var_dump($segundo_resultado_ampersan);
echo("\n");

echo "0 $valor_falso && $valor_verdadero = ";
$tercer_resultado_ampersan = $valor_falso && $valor_verdadero;
var_dump($tercer_resultado_ampersan);
echo("\n");

echo "0 $valor_falso && 0 $valor_falso = ";
$cuarto_resultado_ampersan = $valor_falso && $valor_falso;
var_dump($cuarto_resultado_ampersan);
echo("\n");

echo("------------------------------------");
echo("\n");


// ----------------------------------------------------------- operador  or
echo("********* Operador or *********");
echo("\n");

echo "$valor_verdadero or $valor_verdadero = ";
$primer_resultado_or = $valor_verdadero or $valor_verdadero;
var_dump($primer_resultado_or);
echo("\n");

echo "$valor_verdadero or 0 $valor_falso = ";
$segundo_resultado_or = $valor_verdadero or $valor_falso;
var_dump($segundo_resultado_or);
echo("\n");

echo "0 $valor_falso or $valor_verdadero = ";
$tercer_resultado_or = $valor_falso or $valor_verdadero;
var_dump($tercer_resultado_or);
echo("\n");

echo "0 $valor_falso or 0 $valor_falso = ";
$cuarto_resultado_or = $valor_falso or $valor_falso;
var_dump($cuarto_resultado_or);
echo("\n");

echo "$valor_verdadero || $valor_verdadero = ";
$quinto_resultado_or = $valor_verdadero || $valor_verdadero;
var_dump($quinto_resultado_or);
echo("\n");

echo "$valor_verdadero || 0 $valor_falso = ";
$sexto_resultado_or = $valor_verdadero || $valor_falso;
var_dump($sexto_resultado_or);
echo("\n");

echo "0 $valor_falso || $valor_verdadero = ";
$septimo_resultado_or = $valor_falso || $valor_verdadero;
var_dump($septimo_resultado_or);
echo("\n");

echo "0 $valor_falso || 0 $valor_falso = ";
$octavo_resultado_or = $valor_falso || $valor_falso;
var_dump($octavo_resultado_or);
echo("\n");

echo("------------------------------------");
echo("\n");



// ----------------------------------------------------------- operador not
echo("********* Operador not *********");
echo("\n");

echo("not $valor_verdadero = ");
$primer_resultado_not = !$valor_verdadero;
var_dump($primer_resultado_not);
echo("\n");

echo("not 0 $valor_falso = ");
$segundo_resultado_not = !$valor_falso;
var_dump($segundo_resultado_not);
echo("\n");

echo("------------------------------------");
echo("\n");
// ----------------------------------------------------------- operador 
?>
<?php

echo PasarMonedas("2300") ."<br>";
echo PasarMonedas("230012");


function PasarMonedas($valor)
{
	$largo = strlen($valor);
	$entero = $largo - 2;

	$inicio = substr($valor, 0,$entero);
	$decimal = substr($valor, $entero);

	$formado = '€ ';
	$formado .= (String) number_format($inicio, 0, ' ', '.');
	$formado .= ',';
	$formado .= $decimal;

	return $formado;

}
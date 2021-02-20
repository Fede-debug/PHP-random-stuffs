<?php
/*
$a = leggiNumero();

$max = $a;
$min = $a;
*/

$max = $min = leggiNumero();

//seconda lettura
$a = leggiNumero();
calcolaMinMax($a);

//calcolaMinMax(leggiNumero());

//terza lettura
$a = leggiNumero();
calcolaMinMax($a);

//quarta lettura
$a = leggiNumero();
calcolaMinMax($a);

//quinta lettura
$a = leggiNumero();
calcolaMinMax($a);

echo "Il valore massimo letto è $max";
echo "Il valore minimo letto è $min";

function leggiNumero() {
	echo "Inserisci un numero: " . PHP_EOL;
	$a = trim( fgets(STDIN) );

	if(!is_numeric($a)) {
		exit("Non hai inserito un numero.");
	}
	
	return $a;
}

function calcolaMinMax($numeroLetto) {
	global $min;
	global $max;
	
	if($numeroLetto > $max) {
		$max = $numeroLetto;
	}

	if($numeroLetto < $min) {
		$min = $numeroLetto;
	}
}

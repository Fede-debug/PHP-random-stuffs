<?php
$dim = 8;
$vettore = [];
for($i = 0; $i < $dim; $i++) {
	echo "Inserisci un numero: " . PHP_EOL;
	$vettore[] = trim(fgets(STDIN));
}

echo "Inserisci il valore da cercare: " . PHP_EOL;
$trova = trim(fgets(STDIN));

$occorrenze = 0;
$indici = []; // $indici = array();
for($i = 0; $i < $dim; $i++) {
	if($vettore[$i] == $trova) {
		//elemento trovato
		$occorrenze++;
		$indici[] = $i;
	}
}

echo "Il valore $trova " . ($occorrenze ? "è" : "non è") . " stato trovato" . PHP_EOL;
if($occorrenze) {
	echo "L'elemento è stato trovato $occorrenze volte agli indici ";
	foreach($indici as $v) {
		echo $v . " ";
	}
}


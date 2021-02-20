<?php
echo "Inserisci il primo operando: " . PHP_EOL;
$a = fgets(STDIN);
$a = trim($a);

if(!is_numeric($a)) {
	exit("L'operando inserito non è un numero.");
}

echo "Inserisci l'operatore desiderato: 
a per addizione, 
s per sottrazione, 
m per moltiplicazione, 
d per divisione: " . PHP_EOL;
$operatore = fgets(STDIN);
$operatore = trim($operatore);

if( $operatore != "a" && $operatore != "s" && $operatore != "m" && $operatore != "d") {
	exit("Operatore non valido");
}

echo "Inserisci il secondo operando: " . PHP_EOL;
$b = fgets(STDIN);
$b = trim($b);

if(!is_numeric($b)) {
	exit("L'operando inserito non è un numero.");
}

$risultato = 0;

if($operatore == "a") {
	$risultato = $a + $b;
} else if($operatore == "s") {
	$risultato = $a - $b;
} else if($operatore == "m") {
	$risultato = $a * $b;
} else if( $operatore == "d" ) {
	$risultato = $a / $b;
} /*else {
	echo "Operatore non valido.".PHP_EOL;
	exit; //die;
}*/

echo "Il risultato dell'operazione è: $risultato" . PHP_EOL;


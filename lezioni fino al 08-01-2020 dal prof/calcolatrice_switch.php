<?php
echo "Inserisci il primo operando: " . PHP_EOL;
$a = fgets(STDIN);
$a = trim($a);

if(!is_numeric($a)) {
	exit("L'operando inserito non è un numero.");
}

echo "Inserisci l'operatore desiderato: 
a oppure A per addizione, 
s oppure S per sottrazione, 
m oppure M per moltiplicazione, 
d oppure D per divisione: " . PHP_EOL;
$operatore = fgets(STDIN);
$operatore = trim($operatore);

/*if( $operatore != "a" && $operatore != "s" && $operatore != "m" && $operatore != "d") {
	exit("Operatore non valido");
}*/



$risultato = 0;

switch($operatore) {
	case "a":
	case "A":
		$b = leggiSecondoOperando();
		$risultato = $a + $b;
	break;
	
	case "s":
	case "S":
		$b = leggiSecondoOperando();
		$risultato = $a - $b;
	break;
	
	case "m":
	case "M":
		$b = leggiSecondoOperando();
		$risultato = $a * $b;
	break;
	
	case "d":
	case "D":
		$b = leggiSecondoOperando();
		$risultato = $a / $b;
	break;	
	
	default:
		exit("Operatore non valido");
	break;
}

echo "Il risultato dell'operazione è: $risultato" . PHP_EOL;

function leggiSecondoOperando() {
	echo "Inserisci il secondo operando: " . PHP_EOL;
	$b = fgets(STDIN);
	$b = trim($b);

	if(!is_numeric($b)) {
		exit("L'operando inserito non è un numero.");
	}
	
	return $b;
}


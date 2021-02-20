<?php
echo "Inserisci un numero: " . PHP_EOL;
$a = fgets(STDIN);
$a = trim($a);

/*
if($a > 10) {
	echo "$a maggiore di 10";
} else {
	echo "$a non è maggiore di 10";
}
*/

if($a > 10) {
	echo "$a maggiore di 10";
} elseif($a == 10) {
	echo "$a è uguale a 10";
} else {
	echo "$a non è maggiore di 10";
}

$risultato = ($a > 10) ? "$a maggiore di 10" : "$a non è maggiore di 10";
echo $risultato;

exit;
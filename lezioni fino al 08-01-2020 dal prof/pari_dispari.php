<?php
echo "Inserisci un numero: " . PHP_EOL;
$a = fgets(STDIN);
$a = trim($a);

if( ($a % 2) == 0) {
	echo "$a pari";
} else {
	echo "$a dispari";
}

exit;
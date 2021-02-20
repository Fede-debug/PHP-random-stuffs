<?php
do {
	do {
		echo "Inserisci il primo operando: " . PHP_EOL;
		$a = trim(fgets(STDIN));
		if($a == "q") {
			exit("Fine");
		}
		if(!is_numeric($a)) {
			echo "Attenzione, non hai inserito un valore numerico.".PHP_EOL;
		}
	} while(!is_numeric($a));

	do{
		echo "Inserisci l'operatore desiderato: 
		a oppure A per addizione, 
		s oppure S per sottrazione, 
		m oppure M per moltiplicazione, 
		d oppure D per divisione: " . PHP_EOL;
		$operatore = fgets(STDIN);
		$operatore = trim($operatore);

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
			
			case "q":
				exit("Fine");
			break;	
			
			default:
				echo("Operatore non valido".PHP_EOL);
				$operatore = false;
			break;
		}
	} while(!$operatore);

	echo "Il risultato dell'operazione è: $risultato" . PHP_EOL;

} while(true);	

function leggiSecondoOperando() {
		do{
			echo "Inserisci il secondo operando: " . PHP_EOL;
			$b = trim(fgets(STDIN));
			if($b == "q") {
				exit("Fine");
			}
			if(!is_numeric($b)) {
				echo("Attenzione, non hai inserito un valore numerico.".PHP_EOL);
			} 
		} while(!is_numeric($b));
		
		return $b;
	}

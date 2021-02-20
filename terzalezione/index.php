<?php

		echo "dammi un numero maggiore di 10" . PHP_EOL;
		$a=fgets(STDIN);  // fgets -> $a è una stringa
		$a=trim($a);
		
		$b=($a>=10) ?  "valore maggiore o uguale a 10" :  "valore minore di 10";
		
		echo $b . PHP_EOL; 
		
		$a=(float)$a;
		
		echo "il valore di a è $a";
		
		exit;
		
		
		



?>
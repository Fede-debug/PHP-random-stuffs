<?php

		echo "dammi un numero intero" . PHP_EOL;
		$a=fgets(STDIN);  // fgets -> $a è una stringa
		$a=trim($a);
		
		if($a%2)
			echo "il numero è dispari" . PHP_EOL;
		else
			echo "il numero è pari" . PHP_EOL;
		
		
		exit;
		
		
		



?>
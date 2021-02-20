<?php

		echo "dammi un numero maggiore di 10" . PHP_EOL;
		$a=fgets(STDIN);
		$a=trim($a);
		
		if($a>10)
			echo "$a é maggiore di 10";
		else if($a<10)
			echo "$a NON é maggiore di 10";
		else
			echo "$a probabilmente é uguale a 10";
		
		
		exit;
		
		
		



?>
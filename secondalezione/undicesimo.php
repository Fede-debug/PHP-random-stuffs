<?php

		echo "dammi un numero" . PHP_EOL;
		$a=fgets(STDIN);
		$a=trim($a);
		echo "dammi un altro numero" . PHP_EOL;
		$b=fgets(STDIN);
		$b=trim($b);
		//$c=$a**$b;
		//echo "$a elevato $b vale "  . ($a**$b)  . PHP_EOL;
		//$c=$a/$b;
		//echo "$a diviso $b vale " . ($a/$b) . PHP_EOL;
		//echo "dammi una stringa" . PHP_EOL;
		//$stringa=fgets(STDIN);
		//$stringa=trim($stringa);
		//echo "la stringa ripulita vale:" . PHP_EOL . "$stringa";
		
		//fare switch case con operatore
		
		echo "dammi segno operazione" . PHP_EOL;
		$o=fgets(STDIN);
		$o=trim($o);
		
		switch($o)
			   {
				   
				   case '+':
				   {
					      echo "$a sommato a $b vale " . ($a+$b) . PHP_EOL;
				   }
					break;
					case '-':
				   {
					      echo "$a meno $b vale " . ($a-$b) . PHP_EOL;
				   }
					break;
					case '*':
				   {
					      echo "$a per $b vale " . ($a*$b) . PHP_EOL;
				   }
					break;
					case '/':
				   {
					      echo "$a diviso $b vale " . ($a/$b) . PHP_EOL;
				   }
					break;
					default:
				   {
					      echo "non è un segno";
				   }
					break;
				    
			   } 
		
		
		



?>
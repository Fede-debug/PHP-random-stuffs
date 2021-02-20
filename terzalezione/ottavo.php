<?php

        do
		{
        echo "dammi il primo operando" . PHP_EOL;
		$a=leggivalore();
		
		if(!is_numeric($a))     // controlla se la stringa contiene solo numeri
			echo "$a non è un numero" . PHP_EOL;
		
		}while(!is_numeric($a));
		
		echo "dammi il segno dell'operazione
		  a o A per addizione
		  s o S per sottrazione
		  m o M per moltiplicazione
		  d o D per divisione
		  p o P per potenza" . PHP_EOL;
			  
		$o=leggivalore();
		
		
		/*if($o!=='a' && $o!=='s' && $o!=='m' && $o!=='d' && $o!=='p'){  // controllo col segno o senza segno è indifferente
			//echo "segno non valido";
			exit("operatore non valido");  // altre istruzioni sotto non verebbero eseguite ( oppure die;)
		}*/
			
		
		/*echo "dammi il secondo operando" . PHP_EOL;
			 
		$b=fgets(STDIN);
		$b=trim($b);
		
		if(!is_numeric($b))
			exit("non è un numero"); */
		
		//$c=$a**$b;
		//echo "$a elevato $b vale "  . ($a**$b)  . PHP_EOL;
		//$c=$a/$b;
		//echo "$a diviso $b vale " . ($a/$b) . PHP_EOL;
		//echo "dammi una stringa" . PHP_EOL;
		//$stringa=fgets(STDIN);
		//$stringa=trim($stringa);
		//echo "la stringa ripulita vale:" . PHP_EOL . "$stringa";
		
		//fare switch case con operatore
		
		
		
		switch($o)
			   {
				   
				   case 'a':
				   case 'A':
				   {
					      $b=leggisecondooperando();
						  echo "$a sommato a $b vale " . ($a+$b) . PHP_EOL;
				   }
					break;
					case 's':
					case 'S':
				   {
					      $b=leggisecondooperando();
						  echo "$a meno $b vale " . ($a-$b) . PHP_EOL;
				   }
					break;
					case 'm':
					case 'M':
				   {
					      $b=leggisecondooperando();
						  echo "$a per $b vale " . ($a*$b) . PHP_EOL;
				   }
					break;
					case 'd':
					case 'D':
				   {
					      $b=leggisecondooperando();
						  echo "$a diviso $b vale " . ($a/$b) . PHP_EOL;
				   }
					break;
					case 'p':
					case 'P':
				   {
					      $b=leggisecondooperando();
						  echo "$a elevato $b vale " . ($a**$b) . PHP_EOL;
				   }
					break;
					
				    default:
				   {
					      echo "non è un valore valido";  // ridondante
						   
				   }
					break; 
				    
			   } 
		
		
		
	function leggisecondooperando(){
		echo "dammi il secondo operando" . PHP_EOL;
			 
		$b=fgets(STDIN);
		$b=trim($b);
		
		if(!is_numeric($b))
			exit("non è un numero");
		
		return $b;
	}

    function leggivalore()	{
		//echo "dammi un numero" . PHP_EOL;
		$a=trim(fgets(STDIN));  // fgets -> $a è una stringa
		//$a=trim($a);
	    return $a;
	    
	}
?>
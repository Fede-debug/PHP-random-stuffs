<?php     // rifai con ciclo infinito e q come uscita

        $a=leggiValoreNumerico();
		
		echo "dammi il segno dell'operazione
		  a o A per addizione
		  s o S per sottrazione
		  m o M per moltiplicazione
		  d o D per divisione
		  p o P per potenza" . PHP_EOL;
			  
		//$o=leggivalore();
		
		
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
		
		do{
		$o=leggiValore();
		
		switch($o)
			   {
				   
				   case 'a':
				   case 'A':
				   {
					      $b=leggiValoreNumerico();
						  echo "$a sommato a $b vale " . ($a+$b) . PHP_EOL;
				   }
					break;
					case 's':
					case 'S':
				   {
					      $b=leggiValoreNumerico();
						  echo "$a meno $b vale " . ($a-$b) . PHP_EOL;
				   }
					break;
					case 'm':
					case 'M':
				   {
					      $b=leggiValoreNumerico();
						  echo "$a per $b vale " . ($a*$b) . PHP_EOL;
				   }
					break;
					case 'd':
					case 'D':
				   {
					      $b=leggiValoreNumerico();
						  echo "$a diviso $b vale " . ($a/$b) . PHP_EOL;
				   }
					break;
					case 'p':
					case 'P':
				   {
					      $b=leggiValoreNumerico();
						  echo "$a elevato $b vale " . ($a**$b) . PHP_EOL;
				   }
					break;
					
				    default:
				   {
					      echo "non è un valore valido, rimettilo" . PHP_EOL; 
                          $o=false;						  
						   
				   }
					break; 
				    
			   } 
		}
		while(!$o);
		
		
		
	function leggiValoreNumerico(){
		
		do{
		echo "dammi l'operando" . PHP_EOL;
		$b=trim(fgets(STDIN));
		//$b=trim($b);
		if(!is_numeric($b))
			echo "non è un numero" . PHP_EOL;
		}while(!is_numeric($b));
		return $b;
	}

    function leggiValore()	{
		//echo "dammi un numero" . PHP_EOL;
		$a=trim(fgets(STDIN));  // fgets -> $a è una stringa
		//$a=trim($a);
	    return $a;
	    
	}
?>
<?php

//$o=leggiValoreNumerico();
//echo "la tabella del $o è " ;
$i=1;
$n=1;


while($n<=10){
	$i=1;
	while($i<=10){
		$prodotto=$i*$n;
		//echo "$o * $i = $prodotto  ";
		echo "$prodotto  ";
		$i++;	
	}
	echo PHP_EOL;	
	$n++;	
}

//echo "la tabella del $o è ";
/*
for($i=0;$i<=10;$i++){
	$prodotto=$i*2;
	//echo "$o * $i = $prodotto   ";
	echo "$prodotto  ";
    
}
*/	
	
	
	
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

?>
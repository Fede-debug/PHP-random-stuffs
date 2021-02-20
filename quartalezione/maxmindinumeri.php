<?php

	$max=$min=leggiValoreNumerico();   //prima lettura
	for($i=2;$i<=5;$i++){
		calcolaMinMax(leggiValoreNumerico());   // legge numeri in loop e calcola max e min tra quelli già immessi
	}	

    //echo " i numeri sono $b $c $d $e $f" . PHP_EOL;

    
    
	
    /*$max=$b;
	
    if($c>$max)
        $max=$c;
    if($d>$max)
        $max=$d;
	if($e>$max)
        $max=$e;
	if($f>$max)
        $max=$f; */
	
	echo "il valore più grande è $max" . PHP_EOL;
	echo "il valore più piccolo è $min" . PHP_EOL;
    	
		
		
		
		
		
		
		
		
	function leggiValoreNumerico()	{
		echo "dammi un numero" . PHP_EOL;
		$a=trim(fgets(STDIN));  // fgets -> $a è una stringa
		//$a=trim($a);
		
		if(is_numeric($a))
		  return $a;
	    else
			exit("non è un numero");
	}
		
		
	/*function returnmax($d){       // non servono, ne basta una che implementa entrambe
		global $max;
		if($d>$max){
		   $max=$d;
		}
	}
		

    function returnmin($d){
		global $min;
		if($d<$min){
			$min=$d;
		}
	} */

	function calcolaMinMax($d){
		global $min;
		global $max;
		
		if($d>$max){
		   $max=$d;
		}
		if($d<$min){
			$min=$d;
		}
	}
?>
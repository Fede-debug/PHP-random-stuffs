<?php

	$max=$min=leggivalorenumerico();   //prima lettura
	//$max=$b;
	//$min=$b;
    //$b=leggivalorenumerico();   // seconda lettura
	calcolaminmax(leggivalorenumerico());
    //$b=leggivalorenumerico();    //terza lettura
	calcolaminmax(leggivalorenumerico());
    //$b=leggivalorenumerico();   //quarta lettura
	calcolaminmax(leggivalorenumerico());
    //$b=leggivalorenumerico();    //quinta lettura
	calcolaminmax(leggivalorenumerico());

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
    	
		
		
		
		
		
		
		
		
	function leggivalorenumerico()	{
		echo "dammi un numero" . PHP_EOL;
		$a=trim(fgets(STDIN));  // fgets -> $a è una stringa
		//$a=trim($a);
		
		if(is_numeric($a))
		  return $a;
	    else
			exit("non è un numero");
	}
		
		
	function returnmax($d){
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
	}

	function calcolaminmax($d){
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
<?php
//declare(strict_types=1);  //con strict se do come argomenti valori non conformi o restituisco valori non conformi lo script esce


/* metodo alternativo per la callback senza usare
*  is_callable e
*  call_user_func
*/



//funzione che chiama una altra funzione che ha un numero di argomenti variabili (vedi sotto) che vengono automaticamente gestiti come array
function esegui(  callable $operazione ,  ...$a)  {      // il controllo lo fa qua, nelle sottofunziona fa un cast implicito
	//if( is_callable($operazione) ) {             // controllo che la funzione callback esista
		return $operazione(...$a);  //chiamo la callback dentro la funzione
	//} else {
	//	return false;
	//}
}

function somma(float ...$x) : float {
	$somma=0;
	foreach ($x as $n){
	$somma += $n;
	}
	return $somma;
}
function sottrazione(float ...$x) : float {    // sottraggo al primo numero tutti gli altri
	$i=0;
	foreach ($x as $n){
	if($i===0)
		$sot=$x[$i];
	else {
		$sot -= $n;
		
		}
	$i++;	
	}	
	
	return $sot;
	
}
function moltiplicazione(float ...$x) : float {
	$pro=1;
	foreach ($x as $n){
	$pro *= $n;
	}
	return $pro;
}

echo esegui('moltiplicazione',4.56,2,13.777,2.5) . PHP_EOL;   // intero->float è l'unico caso ammesso con lo strict_types=1
echo esegui('somma',4.56,2,13.777,2.5) . PHP_EOL;
echo esegui(function($a, $b) { return $a % $b; },5,3) . PHP_EOL;  //uso una anonymous come callback
echo esegui(function(...$a) 
							{ 	$concat="";
								foreach($a as $item){
								$concat.=$item;
							}
								return $concat; },'sto ','eseguendo ','una callback ','con una lambda ') . PHP_EOL;   
								//tolgo il typehinting su esegui perché opero su stringhe
																									 

$clsr=function(...$a) 
							{ 	$concat="";
								foreach($a as $item){
								$concat.=$item;					//assegno alla lambda una variabile
							}									// (o funzione anonima)
								return $concat; };				// naturalmente ci vuole il ; alla fine essendo un comando

echo esegui($clsr,'sto ','eseguendo ','una callback ','con una anonymous ','assegnata a una variabile ') . PHP_EOL;
echo $clsr('chiamo ','la lambda ','da sola ') . PHP_EOL;
echo 'il tipo della anonymous in php è ' . gettype($clsr) . PHP_EOL;

?>								
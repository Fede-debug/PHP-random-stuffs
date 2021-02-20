<?php
//funzione che chiama una altra funzione che ha un numero di argomenti variabili (vedi sotto) che vengono automaticamente gestiti come array
function esegui(  callable $operazione , ...$a) {      // civuole il typehint per forza in quest caso
	if( is_callable($operazione) ) {             // controllo che la funzione callback esista
		return ( call_user_func($operazione, ...$a));  //chiamo la callback dentro la funzione
	} else {
		return false;
	}
}

function somma(...$x) {
	$somma=0;
	foreach ($x as $n){
	$somma += $n;
	}
	return $somma;
}
function sottrazione(...$x) {    // sottraggo al primo numero tutti gli altri
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
function moltiplicazione(...$x) {
	$pro=1;
	foreach ($x as $n){
	$pro *= $n;
	}
	return $pro;
}

echo esegui('moltiplicazione',40,2,10);
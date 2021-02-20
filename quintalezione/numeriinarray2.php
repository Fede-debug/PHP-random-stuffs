<?php

$dim=5;
$numeri=[];  //$numeri = array();

for($i=0;$i<$dim;$i++){
$a=leggiValoreNumerico();
$numeri[]=$a;
}

print_r($numeri);
$trovato=0;
//$indovina=false;
echo "indovina il numero:" . PHP_EOL;
$b=leggiValoreNumerico();

for($i=0;$i<count($numeri);$i++){   
	if($numeri[$i]==$b){
		//$indovina=true;
	    $trovato++;
		break;
	}
	    
		
}

/*if($indovina)
	echo "hai indovinato";
else
	echo "non hai indovinato, scemo"; */

echo "il valore $b " . ($trovato ?  "è " : "NON é " ) . "stato trovato" . PHP_EOL;
if($trovato)
    echo "è stato trovato in posizione $i per la prima volta " . PHP_EOL;  

?>

<?php

function leggiValoreNumerico(){
		
		do{
		echo "dammi un numero" . PHP_EOL;
		$b=trim(fgets(STDIN));
		//$b=trim($b);
		if(!is_numeric($b))
			echo "non è un numero" . PHP_EOL;
		}while(!is_numeric($b));
		return $b;
	}

?>
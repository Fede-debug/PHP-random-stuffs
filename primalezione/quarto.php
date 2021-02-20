<?php
     $a=5;
	 $b=8;
	 
function somma(){
	global $a;
	global $b;
return $a+$b;
}

echo somma();
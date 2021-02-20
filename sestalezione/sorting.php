<html>
	<body>
		<pre>

<?php
$v= [2,-4,3,5,2.14];
print_r($v);
echo "<br>";
sort($v);
print_r($v);
echo "<br>";
rsort($v);
print_r($v);
echo "<br>";



$av=["matricola"=>3, "giorno"=>15, "progress"=>1];
print_r($av);
echo "<br>";
asort($av);
print_r($av);

ksort($av);  //ordina per chiavi
echo "<br>";
print_r($av);

echo "<br>";
arsort($av);  //ordine valori inverso
print_r($av);

echo "<br>";
krsort($av);  //ordine chiavi inverso
print_r($v);


//lavorano per riferimento ^^

//lavora per valore vv
$v= [2,-4,3,5,2.14];
array_reverse($v);  //ordine inverso (restituisce array, quelle sopra lavorano su array originale)
echo"<br>";
print_r($v);

$vinvertito=array_reverse($v);
array_reverse($v);  //ordine inverso (restituisce array, quelle sopra lavorano su array originale)
echo"<br>";
print_r($vinvertito);
 
echo"<br>"; 
$v= [2,-4,3,5,2.14,10];
$vsliced=array_slice($v,2,3);
print_r($vsliced);
				 
?>

		</pre>
	</body>
</html>	
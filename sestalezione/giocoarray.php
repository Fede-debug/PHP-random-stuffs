<html>
	<body>
		<pre>

<?php

 
echo"<br>"; 
$v= [2,-4,3,5,2.14,10];
print_r($v);
echo "<br>";

$dim = array_unshift($v,9);
print_r($v);
echo"<br>"; 
echo "dimensione nuova : $dim <br>";

				 
?>

<?php
$frutta = ['Arance', 'Limoni', 'Pere', 'Mele', 'Mirtilli', 'Lamponi', 'Pesche', 'Fragole'];
print_r($frutta);
echo "<br>";
$fruttaRimossa = array_splice ($frutta, 2, 2); //rimuovo Pere e Mele
print_r($frutta);
echo "<br>";
echo "frutta rimossa: ";
print_r($fruttaRimossa);
echo "<br>";
print_r($frutta);
//aggiungo Noci, Mandorle e Nocciole dove prima c'erano Mele e Pere
$fruttaSecca = ['Noci', 'Mandorle', 'Nocciole'];
array_splice ($frutta, 2, 0, $fruttaSecca);  
echo "<br>";
print_r($frutta);


		</pre>
	</body>
</html>	
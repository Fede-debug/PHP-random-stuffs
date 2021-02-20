<?php
$v = [1, 5, 2, -7, 3, 10];

print_r($v);

sort($v);

echo "<br>";

print_r($v);

echo "<br>";

rsort($v);

print_r($v);

echo "<br>";

$av = ["numero" => 100, "matricola" => 3, "progressivo" => 7 ];

print_r($av);

echo "<br>";

asort($av);

print_r($av);

ksort($av);

echo "<br>";
print_r($av);

arsort($av);

echo "<br>";
print_r($av);

krsort($av);
echo "<br>";
print_r($av);

echo "<br>";

$v = [1, 5, 2, -7, 3, 10];
print_r($v);
$arrayInvertito = array_reverse($v);

echo "<br>";
print_r($arrayInvertito);


$v = [1, 5, 2, -7, 3, 10];

$sottoArray = array_slice($v, 2);
echo "<br>";
print_r($sottoArray);

$dim = array_unshift($v, 9);
echo "<br>";
echo "Nuova dimensione: $dim<br>";
print_r($v);

$dim = array_push($v, 4);
echo "<br>";
echo "Nuova dimensione: $dim<br>";
print_r($v);

$elementoRimosso = array_shift($v);
echo "<br>";
echo "Elemento rimosso: $elementoRimosso<br>";
print_r($v);

$elementoRimosso = array_pop($v);
echo "<br>";
echo "Elemento rimosso: $elementoRimosso<br>";
print_r($v);

echo "<br>";
$av = ["numero" => 100, "matricola" => 3, "progressivo" => 7 ];
$esiste = array_key_exists("matricola", $av);


//print_r($_SERVER);

print_r($_GET);





?>
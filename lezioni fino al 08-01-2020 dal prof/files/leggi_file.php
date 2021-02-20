<?php
$file = fopen('divina_commedia.txt', 'r');
while(!feof($file))
{
  $line = fgets($file);
  echo $line. "<br />";
}
fclose($file);


echo "<br><br><br>";

$contenuto = file_get_contents('divina_commedia.txt');

$array = explode(PHP_EOL, $contenuto);

foreach($array as $riga) {
	echo $riga . "<br>";
	
}


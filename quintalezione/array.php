
<?php

$giorniSettimana=["lunedì", "martedì", "mercoledì","giovedì", "venerdì","sabato","domenica"];
//$giornisettimana=array("lunedì", "martedì", "mercoledì","giovedì", "venerdì","sabato","domenica");
//$giorniSettimana[0]="lunedì";

print_r($giorniSettimana);

var_dump($giorniSettimana);

echo "<br>";
echo $giorniSettimana[2];

$giorniSettimana[cont($giorniSettimana)]= "unaltradomenica";

$giorniSettimana[]="una terza domenica";

print_r($giorniSettimana);
?>

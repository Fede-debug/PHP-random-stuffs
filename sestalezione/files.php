<?php
$nomeFile = 'prova.txt';
$fp = fopen($nomeFile, 'a+'); 
$stringaDaScrivere = 'Hello, World! ';
fwrite($fp, $stringaDaScrivere); 
fclose($fp);

?>
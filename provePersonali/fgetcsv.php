<?php
setlocale(LC_ALL, 'it_IT'); //doesn't work for delimiter

$filename = 'test.csv';
$dataString = '1;2;3;4;5;6';
file_put_contents($filename, $dataString);
$handle = fopen($filename, 'r');
$myData = fgetcsv($handle,0,";");
echo gettype($myData) . PHP_EOL ; // array
echo count($myData) . PHP_EOL; // 5

print_r($myData);
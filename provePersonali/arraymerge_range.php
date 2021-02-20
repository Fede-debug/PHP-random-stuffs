<?php
$keys = range(1, 10, 2);

$value = "PHP";
$value=range(5,250,4.2);
print_r(array_fill_keys($keys, $value));

$string='@yyyyyyyyyyy@yyyyyyyyyyyyyyyy';

if(strpos($string,'@') !== false )
	
	echo "trovato @";
else
	echo "non trovato";
	
echo PHP_EOL;
	
$arrOne = [
// integer
0 => 'One 0',
// string
'a' => 'One a',
// non-empty in One, but empty in Two
'Overwrite' => 'Not empty',
];
$arrTwo = [
0 => 'Two 0',
1 => 'Two 1',
'b' => 'Two b',
'Overwrite' => '',
];

print_r($arrOne + $arrTwo);
print_r(array_merge($arrOne, $arrTwo));


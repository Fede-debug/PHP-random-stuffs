
<?php
$arr = [
'a' => 'apple',
'b' => 'banana',
'c' => 'cherry'
];
while (list($var, $val) = each($arr)) {
echo "$var is $val" . PHP_EOL;
}
//each returns key => values from array and move array curson to next position
// you can loop on arrays with cursors with more modern functions


reset($arr);  // moves cursor back at the beginning

list($var, $val) = each($arr);
echo "$var is $val" . PHP_EOL;

list($var, $val) = each($arr);
echo "$var is $val" . PHP_EOL;
<?php
$arr = [
'a' => 'apple',
'b' => 'banana',
'c' => 'cherry'
];
array_walk($arr, function(&$value, $key) {  //passed by reference to change the original array
$value = strtoupper($value);   // used a lambda/anonymous as callable
});
print_r($arr);  // turned to uppercase

foreach($arr as &$item){		//passed by reference to change the original array
   $item=strtolower($item);
}

//original array
print_r($arr);  // back to lowercase


array_walk($arr, strtoupper($value, $key));  //doesn't work 

print_r($arr);
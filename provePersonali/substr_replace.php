<?php
$myString = "It was the best of times, it was the worst of times, ";
echo substr_replace( $myString, "bananas", 11 ) . PHP_EOL;
echo substr_replace( $myString, "bananas", 19, 5 ) . PHP_EOL;

<?php

function callFunc1(Closure $closure) {
    $closure();
}

function callFunc2(Callable $callback) {
    $callback();
}

function xy() {
    echo 'Hello, World!';
}

//callFunc1("xy"); // Catchable fatal error: Argument 1 passed to callFunc1() must be an instance of Closure, string given
callFunc2("xy"); // Hello, World!
echo PHP_EOL;

//So if you only want to type hint anonymous function use: 
//Closure and if you want also to allow normal functions use callable as type hint.

/*
So why use a closure over callable?
Strictness because a closure is an object that has some additional methods: call(), bind() and bindto(). 
They allow you to use a function declared outside of a class and execute it as if it was inside a class.
*/

?>



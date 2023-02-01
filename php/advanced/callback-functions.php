<?php

// A callback function (often referred to as just "callback") is a function which is passed as an argument into another function.


// array_map
function my_callback($item) {
    return strlen($item);
}

$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map("my_callback", $strings); // array_map - вызывает колбэк на каждый элемент массива
print_r($lengths);

// more callbacks
function exclaim($str){
    return $str . "! ";
}
function ask($str) {
    return $str . "? ";
}
function printFormatted($str, $format) {
    // Calling the $format callback function
    echo $format($str);
}
// Pass "exclaim" and "ask" as callback functions to printFormatted()
printFormatted("Hello world", "exclaim");
printFormatted("Hello world", "ask");









?>
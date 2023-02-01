<?php

// Exception - an object that describes an error or unexpected behaviour of a PHP script.

function divide($dividend, $divisor) {
    if($divisor == 0) {
        throw new Exception("Division by zero");
    }
    return $dividend / $divisor;
}
// to avoid the error from the example above use "try...catch"
try {
    echo divide(5,0);
} catch (Exception $e){
    echo 'Unable to divide';
}
































?>
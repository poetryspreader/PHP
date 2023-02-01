<?php

// json_encode()

$age = array('Peter' => 35, 'Ben' => 37, 'Joe' => 43);

echo json_encode($age) . "<br>";

$cars = array("Volvo", "BMW", "Toyota");

echo json_encode($cars) . "<br>";

// var_dump() - returns the data type and value

$jsonobj = '{"Peter": 35, "Ben":37, "Joe":43}';

var_dump(json_decode($jsonobj)) . "<br>"; // object
var_dump(json_decode($jsonobj, true)) . "<br>";// associative array

$obj = json_decode($jsonobj, true); // associative array
$obj1 = json_decode($jsonobj); // object

echo $obj['Peter'] . '<br>';
echo $obj1->Peter . '<br>';

// foreach()

foreach($obj as $key => $value){ // associative array
    echo $key . "=>" . $value . "<br>";
}
foreach($obj as $key => $value){ // object
    echo $key . "=>" . $value . "<br>";
}












?>
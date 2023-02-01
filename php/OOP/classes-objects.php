<?php


class Fruit {
    // Note: In a class, variables are called properties and functions are called methods!

    // Properties
    public $name;
//    public $color;

    //Methods
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
}

$apple = new Fruit();
$banana = new Fruit();

$apple->set_name('Apple');
$banana->set_name('Banana');
echo $apple->get_name() . '<br>';
echo $banana->get_name() . '<br>';

class Car {
    public $name;
    public $color;

    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }

    function set_color($color){
        $this->color = $color;
    }
    function get_color(){
        return $this->color;
    }
}
$bmw = new Car;
$bmw->set_color('Black');
echo $bmw->color . '<br>';
echo $bmw->get_color() . '<br>';

$bmw->name = 'BMW';
echo $bmw->name;

// instanceof - check if an object belongs to a specific class:
var_dump($bmw instanceof Car);



















?>
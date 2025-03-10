<?php

require 'functions.php';

//require "route.php";


// class objects in php

class Person {
    public $name;
    public $age;

    public function greets() {
        echo "Hello, ". $this->name. "!";
    }
}

$person = new Person();
$person->name = 'Hasan';
$person->age = 20;

//dd($person);
//dd($person->name);
$person->greets();



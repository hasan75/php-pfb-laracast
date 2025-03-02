<?php

require 'functions.php';

//require "route.php";

class Person {
    public $name;
    public $age;

    public function breathe() {
        echo $this->name . ' is breathing';
    }
}

$person = new Person();
$person->name = 'Hasan Ahmed';
$person->age = 26;

$person->breathe();

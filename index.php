<?php

require 'functions.php';

//require "route.php";


// connect to our MySQL database and execute a query

//let's create a class

class Database {

    public $connection;

    public function __construct() {
        $dsn = 'mysql:host=mysql;port=3306;dbname=demo;charset=utf8mb4';

        $this->connection = new PDO($dsn, 'root', 'root');
    }
    public function query($query) {

        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement;
    }
}

$posts = (new Database())->query("SELECT * FROM Posts where postId = 2")->fetchAll(PDO::FETCH_ASSOC);


dd($posts['title']);
//foreach ($posts as $post) {
//    echo '<li>'. $post['title'] . ' - by ' . $post['author'] .'</li>';
//}


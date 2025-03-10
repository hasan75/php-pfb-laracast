<?php

require 'functions.php';

//require "route.php";


// connect to our MySQL database and execute a query

//let's create a class

class Database {
    public function query() {
        $dsn = 'mysql:host=mysql;port=3306;dbname=demo;charset=utf8mb4';

        $pdo = new PDO($dsn, 'root', 'root');

        $statement = $pdo->prepare("SELECT * FROM Posts");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

$posts = (new Database())->query();
foreach ($posts as $post) {
    echo '<li>'. $post['title'] . ' - by ' . $post['author'] .'</li>';
}


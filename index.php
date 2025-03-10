<?php

require 'functions.php';

//require "route.php";


// connect to our MySQL database
$dsn = 'mysql:host=mysql;port=3306;dbname=demo;charset=utf8mb4';

$pdo = new PDO($dsn, 'root', 'root');

$statement = $pdo->prepare("SELECT * FROM Posts");
$statement->execute();
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo '<li>'. $post['title'] . ' - by ' . $post['author'] .'</li>';
}


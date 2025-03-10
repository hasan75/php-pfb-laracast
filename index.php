<?php

require 'functions.php';

//require "route.php";


// connect to our MySQL database and execute a query
require 'Database.php';

$posts = (new Database())->query("SELECT * FROM Posts where postId >= 2")->fetchAll(PDO::FETCH_ASSOC);


foreach ($posts as $post) {
    echo '<li>'. $post['title'] . ' - by ' . $post['author'] .'</li>';
}


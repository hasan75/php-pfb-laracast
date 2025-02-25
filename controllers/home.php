<?php

$books = [
    [
        "name" => "Do Android Dream",
        "author" => "Kuddus Mia",
        "purchaseUrl" => "https://google.com",
        "releaseYear" => 1995
    ],
    [
        "name" => "Anda Manda",
        "author" => "Kader Hamid",
        "purchaseUrl" => "https://google.com",
        "releaseYear" => 1980
    ],
    [
        "name" => "Project Hail Mary",
        "author" => "Jabbar Mia",
        "purchaseUrl" => "https://google.com",
        "releaseYear" => 2000
    ],
    [
        "name" => "Do the work",
        "author" => "Abir Hasan",
        "purchaseUrl" => "https://google.com",
        "releaseYear" => 2010
    ],
    [
        "name" => "Afternoon",
        "author" => "Abir Hasan",
        "purchaseUrl" => "https://google.com",
        "releaseYear" => 2010
    ],
];
//function filteredBooks ($books, $author)
//{
//    $filteredBooks = [];
//    foreach ($books as $book) {
//        if ($book["author"] === $author) {
//            $filteredBooks[] = $book;
//        }
//    }
//    return $filteredBooks;
//};

//function filter($items, $fn): array
//{
//    $filteredArray = [];
//    foreach ($items as $item) {
//        if($fn($item)) {
//            $filteredArray[] = $item;
//        }
//    }
//    return $filteredArray;
//}

$filteredBooks = array_filter($books, function ($book) {
    return ($book["releaseYear"] > 1985 && $book["releaseYear"] <= 2010);
});

$header = 'Home';


require "views/index.view.php";
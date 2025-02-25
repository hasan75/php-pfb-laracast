<?php

require 'functions.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

//dd($uri)
//
//$routes = [
//    '/' => 'controllers/home.php',
//    '/contact' => 'controllers/contact.php',
//    '/about' => 'controllers/about.php',
//];
//
//
if ($uri === '/') {
    require 'controllers/home.php';
} else if ($uri === '/about') {
    require 'controllers/about.php';
}
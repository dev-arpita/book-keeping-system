<?php

$uri = $_SERVER['REQUEST_URI'];

$routes = [
    "/" => 'controllers/index.php', //'routes' => 'uri'
    "/about" => 'controllers/about.php',
    "/contact" => 'controllers/contact.php',
    "/books" => 'controllers/book.php'
];

function routeToController($routes, $uri) {
    if($_SERVER['REQUEST_URI'] === $uri) {
        return $routes;
    }
}
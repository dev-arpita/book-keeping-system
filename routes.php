<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    "/" => 'controllers/index.php', //'routes' => 'uri'
    "/about" => 'controllers/about.php',
    "/contact" => 'controllers/contact.php',
    "/books" => 'controllers/book.php'
];

function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require_once "{$routes[$uri]}";
    } else{
        failToLoadRouter();// error msg
    }
}

function failToLoadRouter($statusCode = 404){
    if(http_response_code($statusCode)) {
        require_once "view/{$statuscode}.php";

        die();
    }
}
routeToController($uri, $routes); // call the router to load the view
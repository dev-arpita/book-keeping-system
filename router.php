<?php
require_once 'functions.php';


$routes = require_once "routes.php";

function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require_once "{$routes[$uri]}";
    } else{
        abort();// error msg
    }
}

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
routeToController($uri, $routes); // call the router to load the view
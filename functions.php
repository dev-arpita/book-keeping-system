<?php

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}
function active(){
    return "bg-gray-900 text-white";
}
function isUrlActive ($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}

function authorized($condition) {
    if(!$condition){
        abort(Response::FORBIDDEN);
    }
}

function abort($statusCode = 404){
    if(http_response_code($statusCode)) {
        require_once "views/{$statusCode}.php";

        die();
    }
}

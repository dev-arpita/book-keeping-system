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
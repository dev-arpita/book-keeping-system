<?php
$heading = "Home";
//while clicking the design will update
// to know the where the url currently located on server
//$_SERVER : superglobals
//echo expects string and for array / objects use var_dump()..
//to get strutural view use <pre>

//encapsulated above code into a function called dd() - die&dump()
function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    //use die() to die later code
    die();
}
// dd($_SERVER["REQUEST_URI"]);
require_once "./view/index.view.php";
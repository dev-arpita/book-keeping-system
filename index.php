<?php
 require_once 'functions.php';
//  require_once 'routes.php';

$config = require_once 'config.php';

require_once "Database.php";


$db = new Database($config['database']);
$books = $db->query("SELECT * FROM books")->fetchAll();
dd($books);
foreach($books as $book){
    echo "<li>". $book['names']."</li>";
 }


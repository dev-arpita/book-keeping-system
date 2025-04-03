<?php
 require_once 'functions.php';
//  require_once 'routes.php';

require_once "Database.php";
$config = require_once 'config.php';


// $id = $_GET['id'];
// dd($id);
$db = new Database($config['database']);

dd($_GET);
$books = $db->query("SELECT * FROM books")->fetch();
foreach($books as $book){
    echo "<li>". $book['names']."</li>";
 }


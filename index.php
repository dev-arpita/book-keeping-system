<?php
 require_once 'functions.php';
//  require_once 'routes.php';
require_once "Database.php";

$db = new Database();
$books = $db->query("SELECT * FROM books where id = 2")->fetchAll(PDO::FETCH_ASSOC);

// $books = $statement->fetchAll(PDO::FETCH_ASSOC); #all books has been fetched

foreach($books as $book){
    echo "<li>". $book['names']."</li>";
 }

#"SELECT * FROM books"

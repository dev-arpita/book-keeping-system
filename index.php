<?php
 require_once 'functions.php';
//  require_once 'routes.php';

 //connect with the database
 // PDO class

 //dsn- connection string that connects to the dtabase
$dsn = 'mysql;host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4';
$pdo = new PDO($dsn);
$statement = $pdo->prepare('select * from books');

$statement->execute();

$books = $statement->fetchAll(PDO::FETCH_ASSOC); #all books has been fetched

dd($books);

foreach($books as $book){
    echo "<li>". $book['names']."</li>";
 }




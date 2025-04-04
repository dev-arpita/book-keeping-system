<?php
 require_once 'functions.php';
//  require_once 'routes.php';

require_once "Database.php";
$config = require_once 'config.php';


$db = new Database($config['database']);

$id = $_GET['id'];
$query = " SELECT * FROM books where id = :id ";


$books = $db->query($query, [':id' => $id ])->fetch();

dd($books);
foreach($books as $book){
    echo "<li>". $book['names']."</li>";
 }


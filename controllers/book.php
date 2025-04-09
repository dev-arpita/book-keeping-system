<?php


$config = require_once 'config.php';
require_once "Database.php";

$heading = 'Books details';
$db = new Database($config['database']);

$book = $db->query('select * from books where id = :id' , ['id' => $_GET['id']])->fetch();


require_once "./views/book.view.php";
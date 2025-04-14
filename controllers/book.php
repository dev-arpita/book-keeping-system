<?php
require_once 'functions.php';

$config = require_once 'config.php';
require_once "Database.php";

$heading = 'Books details';
$currentUserId = 1;
$db = new Database($config['database']);

$book = $db->query('select * from books where id = :id' , ['id' => $_GET['id']])->fetch();

    if(!$book){
        abort();
    }
    if($book['user_id'] !== $currentUserId){
        abort(403);
    }

require_once "./views/book.view.php";
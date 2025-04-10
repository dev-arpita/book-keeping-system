<?php
require_once 'functions.php';

$config = require_once 'config.php';
require_once "Database.php";

$heading = 'Books details';
$db = new Database($config['database']);

$book = $db->query('select * from books where user_id = :user and id = :id' , [
    'id' => $_GET['id'],
    ])->fetch();

    if(!$book){
        abort();
    }
    if($book['user_id'] !== 1){
        abort(403);
    }

require_once "./views/book.view.php";
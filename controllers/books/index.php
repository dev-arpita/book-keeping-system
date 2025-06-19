<?php

$config = require_once base_path('config.php');
$db = new Database($config['database']);

$books = $db->query("SELECT * FROM books where user_id = 1")->getAll();

view("books/index.view.php", [
    'heading' => 'My Books List',
    'books' => 'books'
]);
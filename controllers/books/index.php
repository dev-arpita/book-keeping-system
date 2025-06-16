<?php

$config = require_once base_path('config.php');
require_once base_path("Database.php");

$db = new Database($config['database']);

$books = $db->query("SELECT * FROM books where user_id = 1")->getAll();

require_once view("books/index.view.php",[
    $heading = 'My Books List',
]);
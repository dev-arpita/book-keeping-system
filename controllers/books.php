<?php

$heading = 'Books List';

$config = require_once 'config.php';
require_once "Database.php";

$db = new Database($config['database']);

$books = $db->query("SELECT * FROM books where user_id = 1")->getAll();

require_once "./views/books.view.php";
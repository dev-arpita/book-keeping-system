<?php
require_once 'functions.php';
require_once 'Response.php';

$config = require_once 'config.php';
require_once "Database.php";

$heading = 'Books details';
$currentUserId = 1;

$db = new Database($config['database']);

$book = $db->query('select * from books where id = :id' , ['id' => $_GET['id']])->findOrFail();

    authorized($book['user_id'] == $currentUserId);

require_once "./views/books/show.view.php";
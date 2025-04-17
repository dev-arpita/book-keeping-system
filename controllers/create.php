<?php
$heading = 'Create New';

$config = require_once 'config.php';
require_once "Database.php";

$db = new Database($config['database']);

if($_SERVER["REQUEST_METHOD"] === 'POST'){
    $db->query('INSERT INTO books( names, category, ) VALUES(:names, :category, :user_id)', [
        'names' => $_POST['names'],
        'category' => $_POST['category'],
        'user_id' => 1,
    ]);
}


require_once "./views/create.view.php";
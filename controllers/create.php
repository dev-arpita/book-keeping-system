<?php
$heading = 'Create New';

$config = require_once 'config.php';
$db = new Database($config['database']);


if($_SERVER["REQUEST_METHOD"] === 'POST'){
    $errors = [];
    
    if(strlen($_POST['names'] === 0)){
        $errors['names'] = "The name is required";
        $errors['category'] = "The category is required";

    }
    if(empty($errors)){
        $db->query('INSERT INTO books( names, category, user_id ) VALUES(:names, :category, :user_id)', [
            'names' => $_POST['names'],
            'category' => $_POST['category'],
            'user_id' => 1,
        ]);
    }
}
require_once "./views/create.view.php";
<?php
$heading = 'Create New';

$config = require_once 'config.php';
$db = new Database($config['database']);


$errors = [];

if($_SERVER["REQUEST_METHOD"] === 'POST'){
    
    if (strlen($_POST['names']) === 0) {
        $errors['names'] = "The name is required";
    }
    
    if (strlen($_POST['category']) === 0) {
        $errors['category'] = "The category is required";
    }

    if (strlen($_POST['names']) > 100) {
        $errors['names'] = "The name is not more than 100 charecters";
    }
    
    if (strlen($_POST['category']) > 50) {
        $errors['category'] = "The category is not more than 50 charecters";
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
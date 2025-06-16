<?php

require_once 'Validator.php';
$config = require_once base_path('config.php');
$db = new Database($config['database']);


$errors = [];

if($_SERVER["REQUEST_METHOD"] === 'POST'){
   

    if (! Validator::string($_POST['names'] > 1 && $_POST['names'] > 100)) {
        $errors['names'] = "The name should be less that 100 charecters";
    }
    
    if (! Validator::string($_POST['category'] > 1 && $_POST['category'] > 50)) {
        $errors['category'] = "The category should be less that 50 charecters is required";
    }
    
    if(empty($errors)){
        $db->query('INSERT INTO books( names, category, user_id ) VALUES(:names, :category, :user_id)', [
            'names' => $_POST['names'],
            'category' => $_POST['category'],
            'user_id' => 1,
        ]);
    }
}
require_once view("books/create.view.php", [
    $heading = 'Create New',
]);
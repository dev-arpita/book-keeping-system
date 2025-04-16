<?php
$heading = 'Create New';
require_once 'Response.php';

$config = require_once 'config.php';
require_once "Database.php";

$db = new Database($config['database']);

if($_SERVER["REQUEST_METHOD"] == 'POST'){
    dd($_SERVER);
}
require_once "./views/create.view.php";
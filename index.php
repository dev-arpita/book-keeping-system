<?php
 require_once 'functions.php';
 require_once 'routes.php';

 //connect with the database
 // PDO class

 //dsn- connection string that connects to the dtabase 
 $dsn= 'mysql;host:localhost;port:3306;dbname:myapp;charset:utf8mb4';
$pdo = new PDO($dsn);

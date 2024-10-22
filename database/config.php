
<?php

$host = 'localhost';
$database = 'feelback_db';
$username = 'root';
$password = 'root';

$dsn = "mysql:host=$host;dbname=$database;charset=UTF8";
$pdo = new PDO($dsn, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
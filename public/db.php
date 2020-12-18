<?php

function connectDB()
{
    $host = 'localhost';  
    $db = 'todolist';  
    $user = 'root';
    $pass = 'root';
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]; 

    try {
        $pdo = new PDO($dsn, $user, $pass, $options); 
        return $pdo;
    } catch (PDOException $e) { 
        throw new PDOException($e->getMessage(), $e->getCode()); 
    }
}

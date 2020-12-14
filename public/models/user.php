<?php

// Model - (datan för en user hämtat datan från tabellen - blir ett model object
// CRUD - Create/Insert Read Update Delete

include(__DIR__ . '/../db.php');


$pdo = connectDB();

// INSERT into users tabellen
function createUser($username, $email) 
{
    $pdo = connectDB();
// $sql = "INSERT INTO users (username, email) VALUES (:username, :email)"; // ? blir en placeholder för vår data
// $stmt = $pdo->prepare($sql); // prepare funktion returnerar ett statement som man sen kan
// $stmt->execute(['username' => $name', 'email' => '$email']);

}





?>
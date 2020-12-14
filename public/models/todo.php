<?php

// Model - (datan för en user hämtat datan från tabellen - blir ett model object
// CRUD - Create/Insert Read Update Delete



include(__DIR__ . '/../db.php');


// INSERT into todo

function createTodo($user_id, $text)
{
    $pdo = connectDB();
// $sql = "INSERT INTO todos (user_id, text) VALUES (:user_id, :text)";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['user_id' => $user_id, 'text' => $text);

}


?>
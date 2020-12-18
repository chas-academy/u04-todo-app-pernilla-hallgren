<?php

// Kollar att alla input fält är ifyllda
function emptyInput($username, $email)
{
    $result;
    // om dessa rutor är tomma..
    if (empty($username) || empty($email)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

// Kollar att användarnamnet är korrekt
function invalidUsername($username)
{
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true; 
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email)
{
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function createUser($username, $email)
{
    $pdo = connectDB();
    $sql = "INSERT INTO users (username, email) VALUES (:username, :email)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['username' => $username, 'email' => $email]);
}

function createTodo($user_id, $text)
{
    $pdo = connectDB();
    $sql = "INSERT INTO todos (user_id, text) VALUES (:user_id, :text)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['user_id' => $user_id, 'text' => $text]);
}


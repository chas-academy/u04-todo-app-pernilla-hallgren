<?php

// include 'create-todo.php';

session_start();

if (isset($_POST['submit'])) {    // $user_id = $_SESSION['user_id'];
    $user_id = $_SESSION['id'];
    $text = $_POST['text'];

    require_once 'db.php';
    // require_once 'functions.php';

    $pdo = connectDB();
    $sql = "INSERT INTO todos (user_id, text) VALUES (:user_id, :text)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['user_id' => $user_id, 'text' => $text]);
    
    header("location: create-todo.php");



} else {
    header("location: create-todo.php");
}


// include "db.php";
// include "create-todo.php";

// $errors = "";

// if (isset($_POST['submit'])) {
//     if (empty($_POST['text'])) {
//         $errors = "You must fill in a task!";
//     } else {
//         $pdo = connectDB();
//         $sql = "INSERT INTO todos (user_id, text, done) VALUES (:user_id, :text, :done)";
//         $stmt = $pdo->prepare($sql);
//         $stmt->execute(['user_id' => $user_id, 'text' => $text, 'done' => 0]);
//         header("location: create-todo.php");
//     }

<?php

// include 'create-todo.php';

session_start();

if (isset($_POST['submit'])) {    // $user_id = $_SESSION['user_id'];
    $user_id = $_SESSION['id'];
    $text = $_POST['text'];

    require_once 'db.php';
    require_once 'functions.php';

    createTodo($user_id, $text);

    header("location: create-todo.php");

} else {
    header("location: create-todo.php");
}

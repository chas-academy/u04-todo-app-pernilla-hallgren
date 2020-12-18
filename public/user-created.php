<?php

// VALIDATION 
if (isset($_POST['submit'])) {
    $username = ($_POST['username']);
    $email = ($_POST['email']);
               
    require_once 'db.php';
    require_once 'functions.php';
    
    // IF EMPTY INPUT FIELDS
    if (emptyInput($username, $email) !== false) {
        header("location: create-user.php?error=emptyinput");
        exit();
    }
    // IF INVALID USERNAME
    if (invalidUsername($username) !== false) {
        header("location: create-user.php?error=invalidusername");
        exit();
    }
    // IF INVALID EMAIL
    if (invalidEmail($email) !== false) {
        header("location: create-user.php?error=invalidemail");
        exit();
    }

    createUser($username, $email);
    
    // CREATE AND START A SESSION 
    session_start();

    $pdo = connectDB();
    $queryId = "SELECT * FROM users WHERE username = :username";
    $stmt = $pdo->prepare($queryId);
    $stmt->execute(['username' => $username]);
    $_SESSION['id'] = $stmt->fetch()['id'];  
    $_SESSION['username'] = $stmt->fetch()['username'];  
    
    header("location: create-todo.php");
   
} else {
    header("location: create-user.php");
}

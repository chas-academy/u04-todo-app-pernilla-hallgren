<?php


include 'create-todo.php';

// VALIDATION om användare har fyll i rätt i formuläret
if (isset($_POST['submit'])) {
    // echo "it works";
    $username = ($_POST['username']);
    $email = ($_POST['email']);

    require_once 'db.php';
    require_once 'functions.php';
    
    // ERROR handlers
    // Tomma inputs?
    if (emptyInput($username, $email) !== false) {
        header("location: create-user.php?error=emptyinput");
        exit();
    }
    // Ogiltigt användarnamn?
    if (invalidUsername($username) !== false) {
        header("location: create-user.php?error=invalidusername");
        exit();
    }
    // ogiltigt email ex utan @ symbol etc?
    if (invalidEmail($email) !== false) {
        header("location: create-user.php?error=invalidemail");
        exit();
    }

    createUser($username, $email);

    // SKAPA OCH STARTA EN SESSION
    
    // hitta id på i databasen om använaren finns för att skapa en SESSION
    $pdo = connectDB();
    $queryId = "SELECT * FROM users WHERE username = :username";
    $stmt = $pdo->prepare($queryId);
    $stmt->execute(['username' => $username]);
    $_SESSION['id'] = $stmt->fetch()['id'];    



} else {
    header("location: create-user.php");
}

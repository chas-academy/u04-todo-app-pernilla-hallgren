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

    // kolla om username eller email finns redan
    // if(usernameExists($pdo, $username, $email) !== false) {
    //     header("location: create-user.php?error?=usernametaken");
    //     exit()
    // }

    createUser($username, $email);

    // starta en session
    session_start();
    // hitta id på i databasen om använaren finns för att skapa en SESSION
    $pdo = connectDB();
    $queryId = "SELECT * FROM users WHERE username = :username";
    $stmt = $pdo->prepare($queryId);
    $stmt->execute(['username' => $username]);
    $_SESSION['id'] = $stmt->fetch()['id'];    

} else {
    header("location: create-user.php");
}

// // kolla om det finns någon data i formuläret när vi skickar det till databasen
// if (isset($_POST['submit'])) {
//     // nu vill vi plocka ut datan och kolla på skärmen
//     echo htmlspecialchars($_POST['username']);
//     echo htmlspecialchars($_POST['email']);

//     // vill kolla att alla input fält är ifyllda (ej tomma)
// // VALIDATION CHECK USERNAME
//     if(empty($_POST['username'])) { // om den är tom ska följande kod skriva ut
//         echo 'Username i required <br />';
//     } else {
//         echo htmlspecialchars($_POST['username']); // om det inte är tomt skriver vi bara ut vad användaren skrev in
//         // htmlspecialchars gör att inte användaren kan skriva in konstiga grejer i input

//     }
//     // // VALIDATION CHECK EMAIL
//     if (empty($_POST['email'])) { // om den är tom ska följande kod skriva ut
//         echo 'Email i required <br />';
//     } else {
//         echo htmlspecialchars($_POST['email']); // om det inte är tomt skriver vi bara ut vad användaren skrev in
//     }
// }

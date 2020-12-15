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
    // preg_match inbyggd funktion som kolla om username innehåller någon av dessa bokstäver eller siffror
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true; // true = menas att det var ett error
    } else {
        $result = false;
    }
    return $result;
}

// Kollar att email adressen är korrekt
function invalidEmail($email)
{
    $result;
    // filter_var inbyggd funktion för att validera email som användare använder sig av om den
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

// Kolla så att användarnamnet eller email inte redan existerar i databasen
// function usernameExists($pdo, $username, $email)
// {
//    $sql = "SELECT * FROM users WHERE username = ? OR email = ?;";
//    // första ; stänger sql statement andra för att stänga php koden
// //    $stmt = mysqli_stmt_init($pdo); // enl intruktionen från tutorialen
//    $stmt = $pdo->prepare($sql);
//    $stmt->execute()
    
// }

// skapa en användare när användaren signar in
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


function printTodoItems()
{

}

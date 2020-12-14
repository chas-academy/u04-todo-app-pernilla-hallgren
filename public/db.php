<?php

// Här skapar vi en funktion med datbas kopplingen som vi sedan kan kalla på i index.php/todolist.php

function connectDB()
{
    // koppla upp oss till db: todolist med PDO
    $host = 'localhost';  // vart på internet ligger datan (eller 127.0.0.1 vilket är localhost)
    $db = 'todolist';  // namnet på databasen
    $user = 'root';
    $pass = 'root';
    $charset = 'utf8';

    // dsn = datasource name. vart finns källan till våran data det är det vi ska få in här
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    // hur PDO ska hämta datan vilket format vill vi få tillbaka datan från databasen array eller objekt
    $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]; // vi har bestämt hur vi vill få tillbaka datan associated array

    // try catch för att se om det fungerar att göra ovankod felmeddelande ska skrivas ut om det inte fungerar
    try {
        // $pdo variabel ska vi senare använda för att göra våra anrpot till databasen
        $pdo = new PDO($dsn, $user, $pass, $options); //nu ska vi koppla upp oss mot databasen skapar ett pdo objecty
        return $pdo;
    } catch (PDOException $e) { // PDOException är felmeddelande
        throw new PDOException($e->getMessage(), $e->getCode()); // detta avslutar programmet och skriver ut ett felmeddelande som är kopplat till PDO Exceptions
    }
    // var_dump($pdo); // för att se att objektet är korrekt
    // echo 'ok'; // för att se att connection funkar
}

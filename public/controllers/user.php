<?php

// Controller - det är där själva logiken för det man vill göra ligger (spindeln i nätet) ex jag vill registerar mig på denna sida
// då är controller den som antopar modeln och sedan skicak tillbaka ett svar till användaren
// Controllen använder funktionerna vi skapde i Models & Views

include_once(__DIR__ . '/../models/user.php')
include_once(__DIR__ . '/../views/create-user.php')
include(__DIR__ . '/../header.php');
include(__DIR__ . '/../footer.php');


function handleCreateUser() 
{
    // plockar ut data från när användaren registrear sig
    $username = $_POST['username'];
    $email = $_POST['email'];

    createUser($name, $email);
    showTodoList();
    showFooter();
    showHeader();


}
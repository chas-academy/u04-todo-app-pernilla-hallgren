<?php

include('header.php');
include('footer.php');

// kolla om det finns någon data i formuläret när vi skickar det till databasen
if(isset($_POST['submit'])) {
   // nu vill vi plocka ut datan och kolla på skärmen
//    echo htmlspecialchars($_POST['username']); // htmlspecialchars gör att inte användaren kan skriva in konstiga grejer i input
//    echo htmlspecialchars($_POST['email']); 

// vill kolla att alla input fält är ifyllda (ej tomma)
// VALIDATION CHECK USERNAME
    if(empty($_POST['username'])) { // om den är tom ska följande kod skriva ut
        echo 'Username i required <br />';
    } else {
        echo htmlspecialchars($_POST['username']); // om det inte är tomt skriver vi bara ut vad användaren skrev in

    }
    // VALIDATION CHECK EMAIL
    if (empty($_POST['email'])) { // om den är tom ska följande kod skriva ut
        echo 'Email i required <br />';
    } else {
        echo htmlspecialchars($_POST['email']); // om det inte är tomt skriver vi bara ut vad användaren skrev in
    }

} // end of post 


?>

<html lang="en">
    <main>
        <div class="new-user">
            <h3>Create new user</h2>
            <form class="createUser"action="create-user.php" method="POST">
                <label>Username:</label>
                <input type="text" name="username">
                <label>Email:</label>
                <input type="text" name="email">
                <input type="submit" value="submit" name="submit">
            </form>
        </div>
    </main>

</html>
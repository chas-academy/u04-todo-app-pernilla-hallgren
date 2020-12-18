<?php
include_once 'header.php';


?> 

<html lang="en">
    <main>
        <div class="new-user">
            <h3>Create new user</h2>
            <form class="createUser"action="user-created.php" method="POST">
                <label>Username:</label>
                <input type="text" name="username">
                <label>Email:</label>
                <input type="text" name="email">
                <input type="submit" value="submit" name="submit">
            </form>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Fill in all fields!</p>";
                } elseif ($_GET["error"] == "invalidusername") {
                    echo "<p>Choose a proper username!</p>";
                } elseif ($_GET["error"] == "invalidemail") {
                    echo "<p>Choose a proper email!</p>";
                } elseif ($_GET["error"] == "none") {
                    echo "<p>You have created a user!</p>";
                }
            }
            ?> 
        </div>

    </main>
</html>

<?php

include_once 'footer.php';
?> 



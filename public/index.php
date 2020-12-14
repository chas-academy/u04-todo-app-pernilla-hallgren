<?php
include 'create-user.php';


?>

<!-- <?php

include_once 'header.php';

?>

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

<?php

include_once 'footer.php';

?>
<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">    
    <script src="https://kit.fontawesome.com/9b32fd242e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>ToDo App</title>
</head>
<body>  
    <header class="text-header">
        <h1>GET SH#T DONE!</h1>
        <h2>Time to get organized!</h2>
    </header>
    <main>

        <div class="new-user">
            <h3>Create new user</h2>
            <form class="createUser"action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

                <label>Username:</label>
                <input type="text" name="username">

                <label>Email:</label>
                <input type="text" name="email">

                <input type="submit" value="submit" name="submit">
            </form>
        </div>
    </main>
    <footer>
        <div class="footer">
            <h4>u04 TO-DO-APP Chasacademy Fullstack 2020</h4>
            <h5>By Pernilla Hällgren</h5>
        </div>
    </footer>
</body>
</html> --> -->

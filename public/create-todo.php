<?php

include_once 'header.php';
require_once 'db.php';

session_start();

$pdo = connectDB();

if (!isset($_SESSION['username'])) {
    echo "<h2>Welcome to your TO-DO List!</h2>";
} else {
    $username = $_SESSION['username'];
    echo "<h2><strong>$username</strong>'s TO-DO LIST!</h2>";
}

// DELETE FROM DATABASE TODOS TABEL
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $deleteQuery = "DELETE FROM todos WHERE id = :id";
    $stmt = $pdo->prepare($deleteQuery);
    $stmt->execute(['id' => $id]);
}

// UPDATE DATABASE TODOS TABEL, DONE = 1
if (isset($_POST['done'])) {
    $id = $_POST['done'];
    $updateQuery = "UPDATE todos SET done = 1 WHERE id = :id";
    $stmt = $pdo->prepare($updateQuery);
    if ($stmt->execute(['id' => $id])) {
        echo "<h4>Task $id is done! <br></h4>";
    }
}

if (!isset($_SESSION['id'])) {
    header("create-user.php");
}

// SELECT TEXT FROM TODOS TABEL
$sql = "SELECT * FROM todos WHERE user_id = :user_id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['user_id' => $_SESSION['id']]);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<main>
    <div class="newUser">
        <a href="create-user.php">CREATE NEW USER</a>   
    </div>

    <section class="form-container">
        <form class="form" action="todo-created.php" method="POST">
            <input id="add-task" type="text" name="text" placeholder="Add task" autocomplete="off" required>
            <input type="submit" value="&#8853" class="addBtn" name="submit">
        </form>
    </section>

    <section class="container">
        <div class="todos">
            <ul class="myList">
                <!-- TODO ITEMS PRINTED OUT ON WEBPAGE -->
                <?php if (isset($results)) {
    foreach ($results as $row) {
        $checkSymbol = ($row['done'] == "1") ? "<i class='fas fa-check'></i>" : ""; ?>
                    <li> 
                        <form action="" method="POST">
                            <button id="done" value="submit" class="circleBtn" type="submit" name="done">
                                <?php echo $checkSymbol ?>
                            </button>
                                <?php echo("<input type='hidden' name='done' value='".$row['id']."'/>"); ?>
                        </form>
                        
                        <label id="labelText" >
                            <?php echo htmlentities($row['text']) . "<br>"; ?>
                        </label>

                        <form action="create-todo.php" method="POST">
                            <button value="submit" class="trashBtn" type="submit" name="delete">
                                <i class="far fa-trash-alt"></i>
                            </button>
                            <?php echo("<input type='hidden' name='id' value='".$row['id']."'/>"); ?>
                        </form>
                    </li>    
                <?php
    }
} ?>            
            </ul>
        </div>
    </section>
    
<?php

include_once 'footer.php';

?>
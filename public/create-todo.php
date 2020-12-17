<?php

include_once 'header.php';
require_once 'db.php';
session_start();

$pdo = connectDB();

// // DELETE FROM TODOLIST when click on button
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $deleteQuery = "DELETE FROM todos WHERE id = :id";
    $stmt = $pdo->prepare($deleteQuery);
    $stmt->execute(['id' => $id]);
}

// UPDATE DATABASE DONE = 1
if (isset($_POST['done'])) {
    $id = $_POST['done'];
    $updateQuery = "UPDATE todos SET done = 1 WHERE id = :id";
    $stmt = $pdo->prepare($updateQuery);
    if ($stmt->execute(['id' => $id])) {
        echo "Task $id is done! <br>";
    }
}

// SELECT TEXT FROM TODO-list user-session and print out
$sql = "SELECT * FROM todos WHERE user_id = '".$_SESSION['id']."'";
$stmt = $pdo->prepare($sql);
$stmt->execute(['user_id' => $_SESSION['id']]);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>   
<main>
    <section class="form-container">
        <form class="form" action="todo-created.php" method="POST">
            <input id="add-task" type="text" name="text" placeholder="Add task" autocomplete="off" required>
            <input type="submit" value="&#8853" class="addBtn" name="submit">
        </form>
    </section>
    
    <section class="container">
        <div class="todos">
            <ul class="myList">
                <!-- ITEMS TODO PRINTED OUT ON WEBPAGE -->
                <?php foreach ($results as $row) { ?>
                        <li> 
                            <form action="" method="POST">
                                <button id="done" value="submit" class="circleBtn" type="submit" name="done"><i class="fas fa-check"></i></button>
                                <?php echo("<input type='hidden' name='done' value='".$row['id']."'/>"); ?>
                            </form>
                                    
                <!-- <span>&#10003;</span> -->
                
                            <!-- <input type="checkbox" id="do1"> -->
                            <label id="labelText" ><?php echo htmlentities($row['text']) . "<br>"; ?></label>

                            <form action="create-todo.php" method="POST">
                                <button value="submit" class="trashBtn" type="submit" name="delete"><i class="far fa-trash-alt"></i></button>
                                <?php echo("<input type='hidden' name='id' value='".$row['id']."'/>"); ?>
                            </form>
                        </li>    
                    <?php } ?>            
            </ul>
        </div>
    </section>
    
<?php

include_once 'footer.php';

?>
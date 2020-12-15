<?php

include_once 'header.php';
require_once 'db.php';
session_start();
// KOlla om SESSION är set
// if(isset($_SESSION['id'])) {
//     echo $_SESSION['id'];
// }
$pdo = connectDB();

// // DELETE FROM TODOLIST
if (isset($_POST['id'])) {
    // var_dump($_POST);
    $id = $_POST['id'];
    $deleteQuery = "DELETE FROM todos WHERE id = :id";
    $stmt = $pdo->prepare($deleteQuery);
    if ($stmt->execute(['id' => $id])) {
        echo "It worked!";
    }
}

// SELECT TEXT FROM TODO-list
$sql = "SELECT * FROM todos WHERE user_id = '".$_SESSION['id']."'";
$stmt = $pdo->prepare($sql);
$stmt->execute(['user_id' => $_SESSION['id']]);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>   
<main>
    <section class="form-container">
        <form class="form" action="todo-created.php" method="POST">
            <input id="add-task" type="text" name="text" placeholder="Add task" autocomplete="off" required>
            <!-- <input id="add-task" type="text" name="text" placeholder="Add task" autocomplete="off" required>
            <input id="add-task" type="text" name="text" placeholder="Add task" autocomplete="off" required> -->

            <!-- <button class="addBtn">&#8853;</button> -->
            <input type="submit" value="&#8853" class="addBtn" name="submit">
            <!-- <span>&#8853;</span> -->
        </form>
    </section>
    
    <section class="container">
        <div class="todos">
            <ul class="myList">
                    <!-- query for all the tasks -->
                    <?php foreach ($results as $row) { ?>
                            <li> 
                                <input type="checkbox" id="one"/>
                                <label for="one" ><?php echo htmlentities($row['text']) . "<br>"; ?></label>
                                <form action="#" method="POST">
                                    <button value="submit" class="trashBtn" type="submit" name="delete"><i class="far fa-trash-alt"></i></button>
                                    <?php echo("<input type='hidden' name='id' value='".$row['id']."'/>"); ?>

                                </form>
                            </li>    
                        <?php } ?>
                        
             
                    <!-- <li>       
                        <input type="checkbox" id="one"/>
                        <label for="one" class="checked">By new sweatshirt</label>
                        <button class="trashBtn"><i class="far fa-trash-alt"></i></button>
                    </li>" -->
                        
                     
                <!-- <li>
                    <input type="checkbox" id="two"/>
                    <label for="two">Begin promotional phase</label>
                    <button class="trashBtn"><i class="far fa-trash-alt"></i></button>
                </li>
                <li>
                    <input type="checkbox" id="three"/>
                    <label for="three">Read an article</label>
                    <button class="trashBtn"><i class="far fa-trash-alt"></i></button> 

                </li> -->
            </ul>
        </div>
    </section>
    
<?php

include_once 'footer.php';

?>
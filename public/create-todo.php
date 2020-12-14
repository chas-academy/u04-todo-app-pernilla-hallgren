<?php

include_once 'header.php';

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
                
                    <?php
if(isset($_POST['submit'])) {
  echo ($_POST['text']);
}
?>               
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
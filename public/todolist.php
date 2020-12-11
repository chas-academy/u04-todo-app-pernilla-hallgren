

<html lang="en">
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
        <h2>My To Do List!</h2>
    </header>
    <main>
        <section class="form-container">
            <form class="form" action="" method="POST">
                <input id="add-task" type="text" name="task" placeholder="Add task" autocomplete="off" required>
                <!-- <button class="addBtn">&#8853;</button> -->
                <input type="submit" value="" class="addBtn" name="add task">
            </form>


            <!-- <form action="" method="POST">
                <input id="add-tasks" type="text" name="task" placeholder="Add task" aria-label="new task">
                <span class="addBtn" id="add_button">&#8853;</span> -->
                 <!-- <button class="addBtn">&#8853;</button> -->
                <!-- <span class="checkedBtn" id="checkedBtn">&#10003;</span>


                
                <input type="submit" value="submit" name="submit"> -->
                <!-- <input type="checkbox" id="checkbox-circle" name="circle"> -->
                <!-- <button>&#8853;</button> -->
                <!-- <span>&#9900;</span> -->
                <!-- <span>&#10003;</span> -->
                <!-- <span>&#10004;</span> -->
                <!-- <div class="checkbox-wrapper">
                    <input type="checkbox" id="checkbox-circle" name="circle">
                    <label for="checkbox-circle"></label>
                </div> -->
                <!-- <i class="fas fa-plus-circle"></i> -->
            <!-- </form>
        </section> -->
        </section>

        <!-- <div class="list-wrapper">
            <ul class="todos">
                <li>
                    <input type="checkbox" id="do1">
                    <label for="do1">
                        <i class="fas fa-check"></i>
                        <span class="label">Wash Car</span>
                        <span class="bin"><i class="far fa-trash-alt"></i></span>
                    </label>
                </li>
            </ul>
        </div> -->


        
        <section class="todolist">
            <div class="do">
                <input type="checkbox" id="do1">
                <label for="do1">
                    <i class="fas fa-check"></i>
                    <span class="label">Go do the grocery shopping</span>
                    <span class="bin"><i class="far fa-trash-alt"></i></span>
                </label>
            </div>

            <div class="do">
                <input type="checkbox" id="do2">
                <label for="do2">
                    <i class="fas fa-check"></i>
                    <span class="label">Laundry</span>
                    <span class="bin"><i class="far fa-trash-alt"></i></span>
                </label>
            </div>


            <div class="do">
                <input type="checkbox" id="do3">
                <label for="do3">
                    <i class="fas fa-check"></i>
                    <span class="label">Shopping</span>
                    <span class="bin"><i class="far fa-trash-alt"></i></span>
                </label>
            </div>
        </section>

        
        <!-- <div class="todos">
            <ul id="myList">
                <li>
                    <input type="checkbox" name="task" class="checked">
                    <label class="checked" for="checkbox">
                        <span>Wash the car</span>
                    </label>
                    <i class="far fa-trash-alt"></i> 
                </li>
                <li>
                    <input type="checkbox" name="task" class="checked">
                    <label class="checked" for="checkbox">Laundry</label>
                    <i class="far fa-trash-alt"></i> 
                </li>
                 <li>
                    Wash the car!<input type="checkbox" class="checked">
                </li>
                
                <li class="checked" data-id="0">Laundry</li>
                <li class="checked" data-id="0">Wash the car!</li>
                <li class="checked" data-id="0">Laundry</li> -->

            </ul>
        </div> 
    </main>
    <footer>
        <div class="footer">
            <h4>u04 TO-DO-APP Chasacademy Fullstack 2020</h4>
            <h5>By Pernilla Hällgren</h5>
        </div>
    </footer>
    <!-- <script src="script.js"></script> -->
</body>
</html>


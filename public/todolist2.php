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
                <input type="submit" value="&#8853" class="addBtn" name="add task">
                <!-- <span>&#8853;</span> -->
            </form>
        </section>
        
        <section class="container">
            <div class="todos">
                <ul class="myList">
                    <li>
                        <input type="checkbox" id="one"/>
                        <label for="one" class="checked">By new sweatshirt</label>
                        <button class="trashBtn"><i class="far fa-trash-alt"></i></button>
                    </li>
                    <li>
                        <input type="checkbox" id="two"/>
                        <label for="two">Begin promotional phase</label>
                        <button class="trashBtn"><i class="far fa-trash-alt"></i></button>
                    </li>
                    <li>
                        <input type="checkbox" id="three"/>
                        <label for="three">Read an article</label>
                        <button class="trashBtn"><i class="far fa-trash-alt"></i></button> 

                    </li>
                </ul>
            </div>
        </section>
        <!-- <section class="todos">
            <ul id="myList">
                <li>
                    <form action="" method="">
                        <input type="checkbox" name="task" class="checked">
                        <label class="checked" for="checkbox">Wash the car</label>
                        <i class="far fa-trash-alt"></i> 
                    </form>
                </li>
                <li>
                    <form action="" method="">
                        <input type="checkbox" name="task" class="checked">
                        <label class="checked" for="checkbox">Laundry</label>
                        <i class="far fa-trash-alt"></i> 
                    </form>
                </li>
            </ul>
        </section>  -->




    </main>
    <footer>
        <div class="footer">
            <h4>u04 TO-DO-APP Chasacademy Fullstack 2020</h4>
            <h5>By Pernilla Hällgren</h5>
        </div>
    </footer>
</body>
</html>

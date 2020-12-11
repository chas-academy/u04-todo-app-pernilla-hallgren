
<?php

// model fil todo
// vill alla dessa i denna fil CRUD - Create, Read, Update, Delete - från vår html sida

include('db.php');


$pdo = connectDB();
var_dump($pdo);

// INSERT
$sql = "INSERT INTO todos (user_id, text, done) VALUES (?,?,?)";
$stmt = $pdo->prepare($sql); // prepare funktion returnerar ett statement som man sen kan
$stmt->execute([2, 'laga mat', 0]);
// $stmt->execute(['user_id' => $user_id, 'text' => $text, 'done' => 0]);


// UPDATE



?>

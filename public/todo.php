
<?php

// model fil todo
// vill alla dessa i denna fil CRUD - Create, Read, Update, Delete - från vår html sida




include('db.php');


$pdo = connectDB();
var_dump($pdo);

// INSERT todos funkar!!
// $sql = "INSERT INTO todos (user_id, text, done) VALUES (?,?,?)";
// $stmt = $pdo->prepare($sql); // prepare funktion returnerar ett statement som man sen kan
// $stmt->execute([1, 'run', 0]);
// $stmt->execute(['user_id' => $user_id, 'text' => $text, 'done' => 0]);

// INSERT users funkar!!
// $sql = "INSERT INTO users (username, email) VALUES (:name, :email)"; // ? blir en placeholder för vår data
// $stmt = $pdo->prepare($sql); // prepare funktion returnerar ett statement som man sen kan
// $stmt->execute(['name' => 'Chris', 'email' => 'pass@456.com']);

// UPDATE  todos Funkar!!!
// $updateQuery = <<<SQL
//     UPDATE todos
//     SET text = :text, done = :done
//     WHERE user_id = :user_id
// SQL;

// $statement = $pdo->prepare($updateQuery);
// $updateValues = [
//     'text' => 'Wash the car',
//     'done' => 0,
//     'user_id' => 2
// ];

// $result = $statement->execute($updateValues);
// print_r($result);

// UPDATE users funkar!!!
// $updateQuery = <<<SQL
//     UPDATE users
//     SET username = :name, email = :email
//     WHERE id = :id
// SQL;

// $statement = $pdo->prepare($updateQuery);
// $updateValues = [
//     'name' => 'Pernilla',
//     'email' => 'pernilla@123.com',
//     'id' => 3
// ];

// $result = $statement->execute($updateValues);
// print_r($result);


// DELETE - funkar från båda tabellerna!!
// $deleteQuery = <<<SQL
//     DELETE FROM users
//     WHERE username = :name
// SQL;

// $statement = $pdo->prepare($deleteQuery);
// $result = $statement->execute(['name' => 'Chris']);
   
?>
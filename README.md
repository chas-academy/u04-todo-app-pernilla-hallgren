# u04-todo-app-pernilla-hallgren

- Skapa ett webbprojekt som är en att-göra-lista där listan sparas och läses in från en databas. 


#### Funktionalitet:
- PHP, HTML och CSS med koppling till en MySQL-databas med en tabell för uppgifter varje uppgift ska ha: 
1. ett unikt id
2. en titel
3. en uppgiftstext

- Användaren ska kunna:
1. visa alla uppgifter
2. lägga till en uppgift
3. ändra en uppgift
4. ta bort en uppgift
5. markera en uppgift som klar

- Alla ändringar ska sparas i databasen grundläggande design av formulär och uppgiftslista med CSS (Obs design är ej fokus för uppgiften, viktigast är att den är användbar och fungerar) minst ett HTML-formulär som med hjälp av PHP kan hantera uppgifterna och uppdateringen av dem.


#### Mål:
- En webbplats skriven med PHP, HTML och CSS samt en databas i MySQL (JS får användas men är inte ett krav, JS får dock ej användas på serversidan)
- En MySQL databas med tabeller och data
- Hantera uppgifter:
1. Skapa (Create)
2. Läsa (Read)
3. Uppdatera (Update)
4. Ta bort (Delete)
5. Markera uppgift som klar

- Minst ett formulär som hanterar CRUD (se ovan) för uppgifterna
- Design är inte en prioriterad del av uppgiften men grundläggande design av formulär och uppgiftslista är önskvärt
- Versionshantering med Git (inte en commit på slutet av uppgiften, utan regelbundna commits med kommentarer kring vad som implementerats)

#### ROAD MAP

##### SQL
- skapa databas todolist

Todos

- skapa tabell för todos:

  CREATE TABLE todos (
  id INT UNSIGNED NOT NULL PRIMARY KEY AUTO INCREMENT, 
  user_id INT NOT NULL FOREIGN KEY,
  titel VARCHAR(255) NOT NULL,
  text VARCHAR(255) NOT NULL,
  done BIT(1) NOT NULL DEAFAULT 0
)

Users

- skapa usertabell

  CREATE TABLE users (
  id INT UNSIGNED NOT NULL AUTO INCREMENT, 
  username VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
) 

- Add Foreign key:
ALTER TABLE todos ADD FOREIGN KEY (user_id) REFERENCES users(id);

##### HTML, CSS & PHP
- skapa ett sign-in/create user formulär HTML & CSS (action htmlspecialchars($_SERVER['PHP_SELF'])
- skapa en todo-lista HTML & CSS
- skapa en funktion som connectar till databasen
- koppla databas med pdo
- CRUD testa databas-connection 
- CREATE - INSERT
- READ - SELECT
- UPDATE - UPDATE
- DELETE - DELETE

- INSERTA I DATASEN:
$query = "INSERT INTO tabellen (titel, text) VALUES (:titel, :text)"";
$stmnt = $pdo->prepare($query);
$stmnt->execute(["titel"=>$titel, "text"=>$text]);
if ($stmnt->execute(["titel"=>$titel, "text"=>$text])) {
    ...code
};

- HÄMTA ALLA UPPGIFTER FRÅN DATABASEN OCH SKRIVA UT ALLA I BODY
- lägg i body
- använd echo
- $query = "SELECT * FROM tabellen";
- $result = pdo->query($query)->fetchAll()
- var_dump($result) // för att se vad du får ut
- foreach någonstans i en lista eller div
- visa todos som lista eller form, med text som default value i input, id som gömt value med save & delete button
- save & delete button är submit buttons
- funktion för att ta bort todos från databas



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
- skapa databas som heter todolist som har två tabeller todos och users

Todos

- skapa tabell för todos:
CREATE TABLE `todos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  `done` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `todos_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) 

Users

- skapa users tabell:
CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) 
##### HTML & CSS 
- designa och skapa ett sign-in/create user formulär och ett todolist formulär med HTML & CSS 
##### JavaScript
- skapa en funktion som lyssnar på knapptryck på uppgiftstexten och stryker över den (ej kopplad till databasen)
##### PHP
- skapa en funktion som kopplar till databasen med PDO
- skapa funktioner för databas kopplingen med CRUD: 
- CREATE (insert) - lägg till uppgift i databasen när användaren skriver in i formuläret
- READ (select) - hämta uppgift från databasen när användaren sparat och skriv ut så användaren ser
- UPDATE - uppdatera databasen när användaren markerar att en uppgift är klar 
- DELETE - delete:a en uppgift från databasen när användaren trycker på delete-knappen 




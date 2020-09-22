<?php
$db_loc = 'localhost';
$db_name = 'toolsforever';
$db_user = 'root';
$db_pw = '';

$db_conn = new PDO("mysql:host=$db_loc;dbname=$db_name", $db_user, $db_pw);

$sql = "SELECT * FROM users";
$statement = $db_conn->prepare($sql); //haal alle gebruikers op uit de database toolsforever
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

$firstName = $_POST['form_firstname'];
$lastName = $_POST['form_lastname'];

// !! De onderstaande code voegt gebruikers toe en geen producten. Pas de code aan.!!
$sql = "INSERT INTO users (firstname, lastname) VALUES (Tarik , Unal)" ;//sql query
//een ID slaan we niet op, deze wordt automatisch aangemaakt door MySQL
$stmt = $db_conn->prepare($sql); //stuur naar mysql.
$stmt->bindParam("Tarik", $firstName ); //verbind de waardes
$stmt->bindParam("Unal", $lastName ); //verbind de waardes
$stmt->execute();

?>
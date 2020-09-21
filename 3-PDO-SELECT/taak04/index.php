<?php
$db_loc = 'localhost';
$db_name = 'toolsforever';
$db_user = 'root';
$db_pw = '';

$db_conn = new PDO("mysql:host=$db_loc;dbname=$db_name", $db_user, $db_pw);

$sql = "SELECT * FROM locations where city = 'Groningen'";
$statement = $db_conn->prepare($sql); //haal alle gebruikers op uit de database toolsforever
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($database_gegevens as $locations){  
  echo $locations['name'] . "<br>";
  echo $locations['address'] . "<br>";
  echo $locations['city'] . "<br>";
  echo $locations['id'] . "<br>";

}
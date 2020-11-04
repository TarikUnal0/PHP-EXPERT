<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style> 
table,tr,td{
    border: solid black 1px;  
}

</style>
<div class="menu">
  <a href="index.php">Home</a>
  <a href="leden.php">Leden</a>
  <a href="teams.php">Teams</a>
  <a href="#">Link 3</a>
  <a href="#">Link 4</a>
</div>
<table>
<?php
include "dbconn.php";

$sql = "SELECT * FROM gebruikers";
$statement = $db_conn->prepare($sql); //haal alle gebruikers op uit de database toolsforever
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($database_gegevens as $rows){$idname = $rows['id'];       
echo "<tr>". "<td> ID: ".$rows['id'] . 
"</td><td> <a href='speler.php?subject=$idname'>Voornaam = </a>".$rows['voornaam'] . 
"</td><td> achternaam = " . $rows['achternaam'] . "</td><td>
email = " . $rows['email'] ."</td><td>".
"<a href='delete.php?subject=$idname'>delete row</a>"."<br>"."</td>"."</td><td>" .
"<a href='enkeleTeam.php?subject=$idname'>Team = </a>".$rows['team'] . "<br>"."</td>"."</tr>";     
}





?>
</table>
</body>
</html>


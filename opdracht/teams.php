<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style> *{
    font-family: arial;
}
table,tr,td{
    border: solid black 1px;
    border-collapse: collapse;
}
li{
    list-style: none;
}
</style>
<div class="menu">
  <a href="db.conn.php" class="active">Home</a>
  <a href="leden.php">Leden</a>
  <a href="teams.php">Teams</a>
  <a href="#">Link 3</a>
  <a href="#">Link 4</a>
</div>
<table>
<?php
$db_loc = 'localhost';
$db_name = 'voetbalclubasd';
$db_user = 'root';
$db_pw = '';

$db_conn = new PDO("mysql:host=$db_loc;dbname=$db_name", $db_user, $db_pw);

$sql = "SELECT * FROM teams";
$statement = $db_conn->prepare($sql); //haal alle gebruikers op uit de database toolsforever
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($database_gegevens as $rows){$idname = $rows['id'];       
echo "<tr>". "<td> ID: ".$rows['id'] . "</td><td>
naam = " . $rows['naam'];
}





?>
</table>
</body>
</html>

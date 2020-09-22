<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="menu">
  <a href="db.conn.php">Home</a>
  <a href="leden.php">Leden</a>
  <a href="teams.php">Teams</a>
  <a href="#">Link 3</a>
  <a href="#">Link 4</a>
</div>


<?php
$db_loc = 'localhost';
$db_name = 'voetbalclubasd';
$db_user = 'root';
$db_pw = '';

$db_conn = new PDO("mysql:host=$db_loc;dbname=$db_name", $db_user, $db_pw);


?>
</body>
</html>


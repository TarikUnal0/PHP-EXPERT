<?php 
include "dbconn.php";
include "index.php";

$uid = ($_GET['subject']);

$stmt = $db_conn->prepare("DELETE FROM gebruikers where id = '$uid'");
$stmt->execute();
?>
<?php
include "dbconn.php";
include "index.php";


echo "<br>";
$uid = ($_GET['subject']);

$stmt = $db_conn->prepare("SELECT * FROM gebruikers WHERE id = '$uid'");

$stmt->execute();
while($row = $stmt->fetch()){
    $voornaam = $row['voornaam'];
    $id = $row['id'];
    $achternaam = $row['achternaam'];
    $email = $row['email'];
    $team = $row['team'];
    $wachtwoord = $row['wachtwoord'];
    $contributie = $row['contributie'];


    echo "<form name='form' method='get'>";
    echo "id:"."<input type='number' name='subject' id='subject' value='$id'>"."<br>";
    echo  "Naam:"."<input type='text' name='subject1' id='subject1' value='$voornaam'>". "<br>";
    echo  "Achternaam:" . "<input type='text' name='subject2' id='subject2' value='$achternaam'>". "<br>";
    echo  "email:" . "<input type='text' name='subject3' id='subject3' value='$email'>". "<br>";
    echo  "team:" . "<input type='text' name='subject4' id='subject4' value='$team'>". "<br>";
    echo  "wachtwoord:" . "<input type='text' name='subject5' id='subject5' value='$wachtwoord'>". "<br>";
    echo  "contributie:" . "<input type='text' name='subject6' id='subject6' value='$contributie'>". "<br>";
    echo " <input type='submit'>";
}

$uid = ($_GET['subject']);
$uvoornaam = ($_GET['subject1']);
$uachternaam = ($_GET['subject2']);
$uemail = ($_GET['subject3']); 
$uteam = ($_GET['subject4']);
$uwachtwoord = ($_GET['subject5']);
$ucontributie = ($_GET['subject6']);

$stmt0 = $db_conn->prepare("UPDATE gebruikers SET voornaam = '$uvoornaam' WHERE id = '$uid'");
$stmt1 = $db_conn->prepare("UPDATE gebruikers SET achternaam = '$uachternaam' WHERE id = '$uid'");
$stmt2 = $db_conn->prepare("UPDATE gebruikers SET email = '$uemail' WHERE id = '$uid'");
$stmt3 = $db_conn->prepare("UPDATE gebruikers SET team = '$uteam' WHERE id = '$uid'");
$stmt4 = $db_conn->prepare("UPDATE gebruikers SET wachtwoord = '$uwachtwoord' WHERE id = '$uid'");
$stmt5 = $db_conn->prepare("UPDATE gebruikers SET contributie = '$ucontributie' WHERE id = '$uid'");
$stmt0->execute();
$stmt1->execute();
$stmt2->execute();
$stmt3->execute();
$stmt4->execute();
$stmt5->execute();


?>

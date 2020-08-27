<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$getallen = [45,6546,676,234,8765];
$namen = ['bart', 'david', 'emiel'];

$medewerker = [
  'voornaam' => 'Willem',
  'achternaam' => 'van Oranje',
  'functie'  => 'koning'
];

$frisdrank = [
  'naam' => 'Cola',
  'merk' => 'Coca Cola',
  'hoeveelheid'  => '1 liter'
];

$medewerkers = [
  [
    'voornaam' => 'Willem',
    'achternaam' => 'van Oranje',
    'functie'  => 'koning'
  ],
  [
    'voornaam' => 'Donald',
    'achternaam' => 'Trump',
    'functie'  => 'president'
  ]
];


echo $medewerkers[0]['voornaam'] . " " . $medewerkers[0]['achternaam'] . " " . "is" . " " . $medewerkers[0]['functie'];
echo "<br>";
echo $medewerkers[1]['voornaam']. " " . $medewerkers[1]['achternaam'] . " " . "is" . " " . $medewerkers[1]['functie'];

?> 

</body>
</html>

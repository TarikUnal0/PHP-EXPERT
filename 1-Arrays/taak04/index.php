<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $speelgoed = [

    [
        'naam' => 'bal',
        'soort' => 'sport',
        'prijs' => '5.00'
    ],
    [
        'naam' => 'knuffelbeer',
        'soort' => 'knuffels',
        'prijs' => '9.50'
    ],
    [
        'naam' => 'Catan',
        'soort' => 'bordspel',
        'prijs' => '39.00'
    ],
];


$games = [
    'sport' => [
        'naam' => 'Fifa',
        'uitgever' => 'EA',
        'prijs' => '60.00'
    ],
    'action' => [
        'naam' => 'Doom',
        'uitgever' => 'Bethesda',
        'prijs' => '60.00'
    ],
    'fps' => [
        'naam' => 'Left for dead 2',
        'uitgever' => 'Valve',
        'prijs' => '40.00'
    ]
];


echo "Speelgoed" . " " . $speelgoed[0]['naam'] . " " . "uit de categorie" . " " . $speelgoed[0]['soort'] . " " . "is" . " " . $speelgoed[0]['prijs'] . "<br>";
echo "Speelgoed" . " " . $speelgoed[1]['naam'] . " " . "uit de categorie" . " " . $speelgoed[1]['soort'] . " " . "is" . " " . $speelgoed[1]['prijs'] . "<br>";
echo "Speelgoed" . " " . $speelgoed[2]['naam'] . " " . "uit de categorie" . " " . $speelgoed[2]['soort'] . " " . "is" . " " . $speelgoed[2]['prijs'] . "<br>";
echo "Speelgoed" . " " . $games['sport']['naam'] . " " . "van uitgever" . " " . $games['sport']['uitgever'] . " " . "is" . " " . $games['sport']['prijs'] . "<br>";
echo "Speelgoed" . " " . $games['action']['naam'] . " " . "van uitgever" . " " . $games['action']['uitgever'] . " " . "is" . " " . $games['action']['prijs'] . "<br>";
echo "Speelgoed" . " " . $games['fps']['naam'] . " " . "van uitgever" . " " . $games['fps']['uitgever'] . " " . "is" . " " . $games['fps']['prijs'] . "<br>";


?>
</body>
</html>



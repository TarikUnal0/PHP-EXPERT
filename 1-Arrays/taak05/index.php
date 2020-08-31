<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
                //     0                  1
$multi_array_1 = [ [ 456,98,4,124,56,0 ], [ 'a','b','c','d' ] ];
//waarbij de eerste array met cijfers in $multi_array_1 op plek 0 staat en de tweede array met letters op plek 1 (let op de komma's)

$multi_array_1[0] // dit is de array met cijfers [456,98,4,124,56,0]
echo $multi_array_1[0][4] // het getal 56 komt op het scherm

$multi_array_1[1] // dit is de array met letters ['a','b','c','d']
echo $multi_array_1[1][3] // de letter d komt op het scherm

$multi_array_2 =  [
                'cijfers'  => [ 5,4,3,2,1 ]
                'letters' => [ 'a','b','c','d' ]
                ];
//hier staat de array met cijfers op de plek 'cijfers' en de tweede array met letters staat op de plek 'letters'

$multi_array_2['cijfers'] // dit is de array met cijfers
echo $multi_array_2['cijfers'][4] // het getal 1 komt op het scherm

$multi_array_2['letters'] // dit is de array met letters
echo $multi_array_2['letters'][2] // de letter c komt op het scherm


?>


</body>
</html>
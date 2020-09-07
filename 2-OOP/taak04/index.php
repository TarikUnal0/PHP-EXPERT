<?php
class scooter{
    public $kleur;
    public $merk;
    public $inhoudTank;
    
function checkInhoud(){ 
    if($this->inhoudTank == 100){
        echo 'De emmer is vol!';    
        }
    else{
        echo 'de emmer is niet vol';
    }
}
}  

$piaggio = new scooter;
$piaggio->kleur = 'rood';
$piaggio->merk = 'piaggio';
$piaggio->inhoudTank = '6';


$peugeot = new scooter;
$peugeot->kleur = 'zwart';
$peugeot->merk = 'peugeot';
$peugeot->inhoudTank = '7';

$peugeot->checkInhoud();
echo "<br>";
$piaggio->checkInhoud();



?>
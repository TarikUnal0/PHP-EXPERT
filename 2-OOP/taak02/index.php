
<?php 

class Auto{
    public $merk;
    public $kleur;
    public $type;
    public $uitvoering;
    public $brandstof;
  }

$nieuweAuto = new Auto();
$nieuweAuto->merk = 'Tesla';
$nieuweAuto->kleur = 'rood';
$nieuweAuto->type = 'model 3';
$nieuweAuto->uitvoering = 'cabrio';
$nieuweAuto->brandstof = 'elektrisch';
echo $nieuweAuto->merk;



?>

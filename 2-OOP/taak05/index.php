<?php
class lamp{
    public $kleur;
    public $helderheid;
    public $isAan;

    function setStatus($status){
        $this->isAan = $status;
    }
}

$woonkamerLamp = new lamp;
$woonkamerLamp->kleur = 'geel';
$woonkamerLamp->helderheid = 'zacht';
$woonkamerLamp->setStatus(false);
$woonkamerLamp->isAan = true;
echo $woonkamerLamp->isAan;

$keukenLamp = new lamp;
$keukenLamp->kleur = 'wit';
$keukenLamp->helderheid = 'vel';
$keukenLamp->isAan = false;

?>
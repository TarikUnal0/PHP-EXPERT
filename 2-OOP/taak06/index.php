<?php
class robot{
    public $naam;
    public $geluid;
    public $voorstuwing;

    function getSound(){
        return $this->geluid;    
    }
}

$wally = new robot;
$wally->naam = 'wal-e';
$wally->geluid = 'beepboop';
$wally->voorstuwing = 'rollend';
$wally->getSound("beepboop");
echo $wally->getSound();
echo "<br>";

$wolly = new robot;
$wolly->naam = 'wol-e';
$wolly->geluid = 'boopbeep';
$wolly->voorstuwing = 'lopend';
$wolly->getSound("boopbeep");
echo $wolly->getSound();

?>
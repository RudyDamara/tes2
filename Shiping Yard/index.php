<?php

abstract class Kapal {

    public $kode_kapal = "tipe", $denah_long = "long", $denah_lat = "lat";
    
    abstract function getKapal();

    public function getInfo(){
        return $this->kode_kapal;
    }
}

class PerahuMotor extends Kapal {

    function getKapal(){
        return "koordinat latitude: ".$this->denah_lat." logitude: ".$this->denah_long."<br>";
    }
    
}

$PerahuMotor = new Kapal();
$PerahuLayar = new Kapal();
$KapalPesiar = new Kapal();

$PerahuMotor->tipe = "Perahu Motor";
$PerahuMotor->denah_long = "+21212000";
$PerahuMotor->denah_lat = "-21212000";

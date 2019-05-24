<?php

namespace Fahrtenbuch\BL;
use Fahrtenbuch\BL\Kosten;
use Fahrtenbuch\BL\Fahrer;

class Fahrt{

    private $Fahrtkosten;
    private $Kilometer;
    private $Fahrer=null;

    public function __construct(){

        $Fahrtkosten = array();
    }


    public function setFahrt(Fahrer $f, int $km, Kosten $k){
        $this->Fahrer = $f;
        
        $this->Fahrtkosten = $k;
        $this->Kilometer = $km;

    }

    public function getPrice(): float
    {
        return $this->Kilometer * $this->Fahrtkosten->getPreis();
    }

}
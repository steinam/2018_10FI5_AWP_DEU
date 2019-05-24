<?php

namespace Fahrtenbuch\BL;

use Fahrtenbuch\BL\Kosten;

abstract class Fahrzeug implements Kosten {

    protected $KilometerSatz;

    public function __construct(float $Satz) {
        $this->KilometerSatz = $Satz;
    }


    public function getPreis2(): float
    {
        return $this->KilometerSatz;
    }

   
}
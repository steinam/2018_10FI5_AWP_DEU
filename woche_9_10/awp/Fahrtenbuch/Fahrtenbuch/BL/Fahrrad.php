<?php

namespace Fahrtenbuch\BL;

use Fahrtenbuch\BL\Fahrzeug;

class Fahrrad extends Fahrzeug{

    public function __construct(float $Satz)
    {
        parent::__construct($Satz);
       
    }

    public function getPreis(): float
    {
        return $this->KilometerSatz;
    }

}
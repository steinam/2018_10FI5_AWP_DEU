<?php

namespace Fahrtenbuch\BL;
use Fahrtenbuch\BL\Fahrt;

class Fahrtenbuch{

    private $Fahrten;
    private $Umsatz;

    public function __construct()
    {
        $this->Fahrten = array();
        $this->Umsatz = 0;
    }

    public function setFahrten(Fahrt $f){
        $this->Fahrten[] = $f;
    }

    public function getUmsatz() : float{

        foreach($this->Fahrten as $f)
        {
            $this->Umsatz += $f->getPrice();
        }

        return $this->Umsatz;
    }

}
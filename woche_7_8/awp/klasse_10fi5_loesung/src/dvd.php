<?php

class dvd extends items{

    public $description;

    public function __construct(string $d, string $t, int $p, bool $g, string $c  )
    {
        $this->description = $d;
        parent::__construct($t, $p, $c, $g);
    }

    public function print():string
    {
        return parent::print() . ", " . $this->description;

    }

    function play():string
    {

        return"Ich spiele die DVD";

    }


}
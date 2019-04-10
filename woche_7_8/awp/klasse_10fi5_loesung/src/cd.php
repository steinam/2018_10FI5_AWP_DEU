<?php

class cd extends items
{
    private $artist;
    private $numberOfTracks;


    public function __construct(string $a, int $n, string $t, int $p, bool $g, string $c  )
    {
        $this->artist = $a;
        $this->numberOfTracks = $n;
        parent::__construct($t, $p, $c, $g);
    }

    public function setComment2(string $c)
    {
        $this->comment = $c;

    }


    public function print():string
    {
        return parent::print() . ", " . $this->artist . ", " . $this->numberOfTracks;

    }

    function play():string
    {

        return"Ich spiele die CD";

    }


}
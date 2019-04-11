<?php

//implements zwingt alle Klassen, eine Methode zu implementieren
//ansonsten kann kein Objekt erzeugt werden
//wenn die Klasse items dies nicht umsetzt, müssen es halt die Unterklassen tun
abstract class items implements iprintable{

    protected $title;
    protected $playingTime;
    protected $comment;
    protected $gotIt;

    public function __construct(string $t, int $p, string $c, bool $g)
    {
        $this->title = $t;
        $this->playingTime = $p;
        $this->comment = $c;
        $this->gotIt = $g;
    }

    public function print2():string
    {

            return $this->title . ", " . $this->comment;

    }
}




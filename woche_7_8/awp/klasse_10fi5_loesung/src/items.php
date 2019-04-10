<?php

                     //astract class doesn*t know the subclasses will be played
abstract class items implements ipayable {

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

    public function getTitle():string
    {
        return $this->title;
    }

    public function setComment(string $c)
    {
        $this->comment = $c;
    }

    //Überschreiben einer Methode der Oberklasse
    //public abstract function print():string
    //{
     //   //return $this->getTitle() . ", " . $this->comment;

    //}

    public abstract function print():string;
    
}
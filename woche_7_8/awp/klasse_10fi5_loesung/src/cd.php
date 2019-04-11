<?php

//hier muss jetzt nicht da sInterface implementiert werden, weil es
//die Oberklasse items schon getan hat
class cd extends items
{
    private $artist;
    private $numberOfTracks;

    public function __construct(string $a, int $n, string $title,  int $playTime, bool $got, string $comment)
    {
        $this->artist = $a;
        $this->numberOfTracks = $n;
        parent::__construct($title, $playTime, $comment, $got);
    }

    public function getTitle():string
    {
        return $this->title;
    }


    public function print():string
    {
        //das war in der Schule der Fehler, da parent eine Methode ansprach
        //die es in der Oberklasse nicht gab
        return parent::print2() . ", " . $this->artist . ", " . $this->numberOfTracks;
    }

}

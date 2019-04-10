<?php

abstract class items{

    private $title;
    private $playingTime;
    private $comment;
    private $gotIt;



    public function __construct(string $t, int $p, string $c, bool $g)
    {
        $this->title = $t;
        $this->playingTime = $p;
        $this->comment = $c;
        $this->gotIt = $g;
    }


}
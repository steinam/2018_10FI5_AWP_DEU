<?php

    //mensch ist nicht über die Vererbungshierarchie von items am Interface
    //gebunden, sondern macht das direkt
    class mensch implements iprintable{

        public function print():string
        {
            return "I am humanoid";
        }

    }
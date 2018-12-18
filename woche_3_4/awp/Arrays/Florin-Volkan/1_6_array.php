<?php 

$liste=array('Volkan','Florin','Hans-Günter');

var_dump($liste);



?> <br>
<?php 

unset($liste[2]);

var_dump($liste);

?> <br>
<?php 

$liste[3]='Uschi';

var_dump($liste);

?> <br>
<?php 

$liste2=array(1020,923,780,890);
$erg=0;

$z = count($liste2);

for($i=0;$i<$z;$i++) {

   $erg=$erg+$liste2[$i];

};

$erg=$erg/$z;

echo($erg);

?> <br>
<?php

$erg2=70/$erg*100;

echo($erg2);

?> <br>
<?php

$reihe=array(0,1,2,3,4,5,6,7,8,9);
$ureihe=$reihe;
var_dump($reihe);

?> <br>
<?php

rsort($ureihe);

var_dump($ureihe);

?> <br>
<?php

$noten=array(1,3,4,3,2,1,2,3,4,5,2,1,2,3,3,2,1,4,4);

var_dump($noten);

?> <br>
<?php

$durch = array_sum($noten) / count($noten);
var_dump($durch);

?> <br>
<?php
$schlecht = max($noten);
echo "Die schlechteste Note ist {$schlecht}";

?> <br>
<?php

$beste = min($noten);
echo "Die beste Note ist {$beste}";

?> <br>
<?php

$gleich = array_count_values($noten);

var_dump($gleich);

?> <br>
<?php

$string = "flo und volkan";
$string_lower = strtolower($string);
$assoc_array = array(
    "a"=>".-",
    "b"=>"-...", 
    "c"=>"-.-.", 
    "d"=>"-..", 
    "e"=>".", 
    "f"=>"..-.", 
    "g"=>"--.", 
    "h"=>"....", 
    "i"=>"..", 
    "j"=>".---", 
    "k"=>"-.-", 
    "l"=>".-..", 
    "m"=>"--", 
    "n"=>"-.", 
    "o"=>"---", 
    "p"=>".--.", 
    "q"=>"--.-", 
    "r"=>".-.", 
    "s"=>"...", 
    "t"=>"-", 
    "u"=>"..-", 
    "v"=>"...-", 
    "w"=>".--", 
    "x"=>"-..-", 
    "y"=>"-.--", 
    "z"=>"--..", 
    "0"=>"-----",
    "1"=>".----", 
    "2"=>"..---", 
    "3"=>"...--", 
    "4"=>"....-", 
    "5"=>".....", 
    "6"=>"-....", 
    "7"=>"--...", 
    "8"=>"---..", 
    "9"=>"----.",
    "."=>".-.-.-",
    ","=>"--..--",
    "?"=>"..--..",
    "/"=>"-..-.",
    " "=>" ");
    for($i=0;$i<strlen($string_lower);$i++){
        echo (isset($assoc_array[$string_lower[$i]])) ? $assoc_array[$string_lower[$i]] . '<br />' : 'ERROR';       
    } 

?> <br>
<?php






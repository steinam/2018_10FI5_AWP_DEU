<?php
// Übungsaufgabe zu Arrrays 
// Volkan Bozanoglu & Joachim Hügel & Florin Iancu 

// Aufgabe Arrays anlegen

$liste = array('Florin','Volkan','Joachim');
$liste2 = ['Florin','Volkan','Joachim'];

$liste3 = array(
    "so" => "Sonntag",
    "mo" => "Montag",
    "di" => "Dienstag"    
);

$liste4 = [
    "so" => "Sonntag",
    "mo" => "Montag",
    "di" => "Dienstag"
];

// Aufgabe Arrays füllen

$liste5 = [];

$liste5[0] = "sehr gut";
$liste5[1] = "gut";
$liste5[2] = "befriedigend";
$liste5[3] = "ausreichend";
$liste5[4] = "mangelhaft";

// Aufgabe Arrays ausgeben mit Hilfe einer Schleife

$z = count($liste5);

for($i=1;$i<=$z;$i++) {

   echo($i);
   echo($liste5[$i]);

};

// empty und isset im Zusammenhang mit Arrays

$leer = empty($liste5);

echo($leer);

$gesetzt = isset($liste5);

echo($gesetzt);

// Suchen in einem Array

$search = "gut"

if(in_array($search,$liste5) {
    echo ("Die Schulnote $search ist in dem Array enthalten");
};

// Löschen von Array-Elementen

unset($liste5['mangehaft']);

// Aufgabe Arrays sortieren

$namen = array("Florin", "Volkan", "Joachim");

sort($namen);

echo($namen);




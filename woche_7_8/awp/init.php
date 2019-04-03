<?php
require_once("Auto.php");
require_once("Mitarbeiter.php");

//Instanziierung
$Sandero = new Auto();

//public-Attribute sind schreibbar
$Sandero->hersteller = "Dacia";

$Steinam = new Mitarbeiter();

$Sandero->fahren(700, $Steinam);
$Sandero->fahren(500, $Steinam);

var_dump($Sandero);
echo($Sandero->getKilometer());
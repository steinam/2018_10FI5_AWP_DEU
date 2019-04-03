<?php
require_once("Mitarbeiter.php");

class Auto
{
    public $hersteller;
    private $Modell;
    private $Leistung;
    private $KmStand;
    private $LetzterFahrer;

    //Konstruktor




    //Übergabeparamter können Typen voraussetzen
    public function fahren($km, Mitarbeiter $Driver)
    {
        $this->Fahrer = $Driver;
        $this->KmStand = $this->KmStand + $km;
    }


    //Funktionen in PHP könnenn auch den Datentyp des Rückgabewertes bestimmen
    public function getKilometer():string
    {
        return $this->KmStand;
    }

    public function starten()
    {

    }
}
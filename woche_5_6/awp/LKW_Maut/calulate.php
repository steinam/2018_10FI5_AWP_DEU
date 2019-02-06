<?php

function calcTaxes($Schadstoffklasse="A", $km=0,  $Achsen=3): float
{

    if($Achsen <=3)
    {


    }

    $Taxes = array(
        "A" => array(3=>12.50, 4=>13.10),
        "B" => array(3=>14.60, 4=>15.20),
        "C" => array(3=>15.70, 4=>16.30),
        "D" => array(3=>18.80, 4=>19.40),
        "E" => array(3=>19.80, 4=>20.40),
        "F" => array(3=>20.80, 4=>21.40)
    );

  // echo $Taxes["A"][3];

   // echo json_encode($Taxes);



  $price_for_km = $Taxes[$Schadstoffklasse][$Achsen];

    return ($price_for_km * $km);

}

echo(calcTaxes("A", 13, 3));
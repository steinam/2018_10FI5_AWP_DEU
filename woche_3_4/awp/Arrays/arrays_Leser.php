<?php

$breakline = "<br>";

echo("<h1>2.</h1>");
$kilometer = [1020, 923, 780, 890];
$i = 0;
foreach($kilometer as $key => $values) {
    $i = $i+$key;
}
echo("Durschnittlicher Kilometerreichweite : ".$i/count($kilometer)." km");
echo("<br>");

foreach($kilometer as $key => $values) {
    echo("Verbrauch auf 100 km : ".(70/$kilometer[$key]*100)." l");
    echo("<br>");
}

echo("<h1>3.</h1>");

$Zahlen = [0,1,2,3,4,5,6,7,8,9];
var_dump($Zahlen);

echo("<br>");
krsort($Zahlen);
var_dump($Zahlen);

echo("<h1>4.</h1>");

$html = '
<form action="arrays.php" id="Lottozahlen">
    
</form>
';
echo($html);


echo("<h1>5.</h1>");
$Noten = [1,3,4,3,2,1,2,3,4,5,2,1,2,3,3,2,1,4,4];
$NotenAnzahl = [0,0,0,0,0,0];

echo("Durschnitt : ".(array_sum($Noten)/count($Noten)).$breakline);
echo("Beste Note : ".min($Noten). " | Schlechteste Note : ".max($Noten).$breakline);
foreach($Noten as $key => $values) {
    $NotenAnzahl[$values-1]++;
}
$text = "";
foreach($NotenAnzahl as $key => $values) {
    $text = $text."Note ".($key+1)." : ".$values;
    if ($key != 5) {
        $text = $text." | ";
    }
}
echo ($text.$breakline);

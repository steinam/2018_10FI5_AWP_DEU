<?php
$werte = array(1020, 923,780, 890);

$holder = 0;

for($i=0 ; $i<count($werte); $i++){
$holder += $werte[$i];
}
$res = $holder / count($werte);
echo "<h3>a) Durchschnitt:</h3>";
echo "$res";

//"Ermitteln Sie den durchschnittlichen Kraftstoffverbrauch je 100 km unter der Annahme, dass Sie einen 70 Liter Tank haben."
$resb = (70 / ($res / 100));

echo "<h3>b) durchschnittlichen Kraftstoffverbrauch je 100 km:</h3>";


echo "$resb";



?>
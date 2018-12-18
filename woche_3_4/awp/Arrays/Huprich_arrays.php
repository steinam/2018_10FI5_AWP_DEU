<?php

//Aufgabe 1a 
//<?php

$freunde = ['Fabian', 'Lukas', 'Elrond']; 
print_r ($freunde); 
echo '<br>';

//Aufgabe 1b
unset($freunde[1] ); 
print_r ($freunde); 
echo '<br>'; 

//Aufgabe 1c 
array_push($freunde, 'Uschi');
print_r ($freunde);
echo '<br>';  

//Aufgabe 2a 
$values = [1020, 923, 780, 890]; 
echo '<br>', 'Summer der Tankfüllungen: ',  array_sum( $values), ' Liter'; 
echo '<br>' ,'Anzahl der Tankfüllungen: ' ,( count($values) );

echo '<br>', '<b>' , array_sum( $values) / count($values) , '</b> <br>';

//Aufgabe 2b 
echo '<br> Gesucht ist der Durchschnittsverbrauch pro 100km bei 70 Liter Tankvolumen:';
$tankfuellung = 70; 
echo '<br> <b> ', ($tankfuellung * 100 ) / (array_sum($values) / count($values) ), '</b>' ; 

$zahlen = [0,1,2,3,4,5,6,7,8,9];
echo count($zahlen); 




//Aufgabe 3 
$zahlen_auf = [0,1,2,3,4,5,6,7,8,9];
echo '<br>' ;  
rsort($zahlen_auf); 
print_r($zahlen_auf); 
echo '<br>' ; 

//Aufgabe 3 Lösungsansatz 2
$zahlen_ab = [0,1,2,3,4,5,6,7,8,9]; 

for ($i = count($zahlen_auf) - 1; $i = 0 ; $i - 1 )
{ 
    for ($p = 0; $p < count($zahlen_auf); $p++) {

        $zahlen_auf[$i] = $zahlen_ab[$p]; 
    }
}

print_r ($zahlen_ab); 




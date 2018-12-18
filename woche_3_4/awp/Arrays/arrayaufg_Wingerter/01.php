<?php 
echo "<h3>Best Friends </h3><br>";
$friends = array("Dick", "Trick", "Track");

foreach( $friends as $friend){

    echo "$friend <br>";
}

$nametoDel = "Trick";

for($i = 0; $i< count($friends); $i++){
    if($friends[$i] != $nametoDel ){

        $friends[$i] = $friends[$i];
        
    }
    else continue;
}

foreach( $friends as $friend){
    echo "$friend <br>";
}



?>
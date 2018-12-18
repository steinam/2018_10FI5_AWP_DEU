<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset='utf-8'>
    <title>cool titel</title>
</head>

<body>

<?php

// $array = [1020, 923, 780, 890];

// $average = array_sum($array)/count($array);


// $new_array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
// $desc_new_array = $new_array;
// rsort($desc_new_array);

//var_dump(array_values($new_array));

//-----------------------------

function cleanRow($array) {
    $text = "";
    foreach($array as $number){
        $text .= $number." ";
    }
    print($text);
    echo('<br>');
}


$rnd_array = [];
for($i = 0; $i < 6; $i++){
    $rnd_array[] = rand(5, 15);
}

if(isset($_POST['submit'])){
    if(isset($_POST['user_wahl_1']) && isset($_POST['user_wahl_2']) 
    && isset($_POST['user_wahl_3']) && isset($_POST['user_wahl_4']) 
    && isset($_POST['user_wahl_5']) && isset($_POST['user_wahl_6'])){
        echo('Ergebnis:');
        $user_array = [];
        $user_array[] = $_POST['user_wahl_1'];
        $user_array[] = $_POST['user_wahl_2'];
        $user_array[] = $_POST['user_wahl_3'];
        $user_array[] = $_POST['user_wahl_4'];
        $user_array[] = $_POST['user_wahl_5'];
        $user_array[] = $_POST['user_wahl_6'];

        var_dump(array_values($user_array));
        var_dump(array_values($rnd_array));

        cleanRow($user_array);
        cleanRow($rnd_array);

        $matching = array_intersect($user_array, $rnd_array);
        var_dump(array_values($matching));
    }
} else {

?>


    Sechs mal Zahlen im Bereich von 1 - 49 eingeben: <br>
    <form action="array.php" method="POST">
        <input type="number" name="user_wahl_1" min="1" max="49"/>
        <input type="number" name="user_wahl_2" min="1" max="49"/>
        <input type="number" name="user_wahl_3" min="1" max="49"/>
        <input type="number" name="user_wahl_4" min="1" max="49"/>
        <input type="number" name="user_wahl_5" min="1" max="49"/>
        <input type="number" name="user_wahl_6" min="1" max="49"/> <br>
        <input type="submit" name="submit"/>
    </form>

<?php } ?>

</body>
</html>
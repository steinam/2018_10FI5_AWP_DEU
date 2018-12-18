<?php

$arr = array(0,1,2,3,4,5,6,7,8,9);
$arr2 = array();

foreach($arr as $_arr) {
    echo "$_arr"; 
}

for($i = count($arr); $i>= 0; $i--) {
    $arr2[count($arr) - $i] = $arr[$i];
}

echo "<br>";

foreach($arr2 as $_arr) {

    echo "$_arr"; 

}

?>
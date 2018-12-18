<?php
// Simon Baumgärtner
$arr = array(
    "yoaoda",
    "asda",
    "sadad"
);
for ($i = 0; $i < 3; $i++) {
    var_dump($arr[$i]. "\n");
}
var_dump(isset($arr[2]));

$searchKey = "yoaoda";

for ( $i = 0; $i < $arr.length(); $i++) {
    if ($arr[$i] == $searchKey) {
        echo($i);
    }
}

?>
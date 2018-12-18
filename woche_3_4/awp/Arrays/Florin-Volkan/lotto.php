
<?php

$zahlen=array();

for($i=0;$i<6;$i++) {
    $zahlen[$i] = rand(1,49);
}
?>
<?php
if(isset($_POST["submit"])){
    
$zahl1=$_POST["zahl1"];
$zahl2=$_POST["zahl2"];
$zahl3=$_POST["zahl3"];
$zahl4=$_POST["zahl4"];
$zahl5=$_POST["zahl5"];
$zahl6=$_POST["zahl6"];

$erg=array($zahl1,$zahl2,$zahl3,$zahl4,$zahl5,$zahl6);

$result = array_diff($zahlen,$erg);

var_dump($result);
?> <br>
<?php
var_dump($erg);
?> <br>
<?php

$z=1;

for($i=0;$i<6;$i++) {
   if (in_array($erg[$i],$zahlen)) {
        echo "{$z} Zahl ist richtig";
        ?> <br>
        <?php
   }
   else {
        echo "{$z} Zahl ist falsch";
        ?> <br>
        <?php
   }
   $z++;
}

}
else {
?>
<form action="lotto.php" method="POST">
    <label>Zahl 1:</label><br>
    <input type="number" min="1" max="49" name="zahl1"><br><br>
    <label>Zahl 2:</label><br>
    <input type="number" min="1" max="49" name="zahl2"><br><br>
    <label>Zahl 3:</label><br>
    <input type="number" min="1" max="49" name="zahl3"><br><br>
    <label>Zahl 4:</label><br>
    <input type="number" min="1" max="49" name="zahl4"><br><br>
    <label>Zahl 5:</label><br>
    <input type="number" min="1" max="49" name="zahl5"><br><br>
    <label>Zahl 6:</label><br>
    <input type="number" min="1" max="49" name="zahl6"><br><br>
    <button type="submit" name="submit" >Absenden</button>

</form>
<?php
}



<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
   
    <title>Arrays</title>
  </head>

   <body>
   <pre>
<?php

$friends = array("Hermine","Ron","Harry");
unset($friends['1']);
array_push($friends, "Uschi");
print_r($friends);
print("\n \n");



$tank = (1020 + 923 + 780 + 890) / 4;
print ("Durchschnittsreichweite:  " . $tank);
$tank2 = 70 / ($tank/100);
print("\n");
print ("Durchschnittsverbrauch:   " . $tank2);


print("\n \n");

$arr = [1,2,3,4,5,6,7,8,9];
$arr2 = [];
for($i=0; $i < count($arr); $i++) {
array_push($arr2, $arr[(count($arr) - 1 -$i)]);
}  
var_dump($arr2);



?> 
</pre>

    <h1>Ziehung der Lottozahlen</h1>

<form action="Verarbeitung.Php" method="POST">
    
        <label for="Lotto1">Lottozahl 1: <br>
           <input type='number' name="t">   <br>
        </label>
        <label for="Lotto2">Lottozahl 2: <br>
           <input type='number' name="t">   <br>
        </label>
        
        <label for="Lotto3">Lottozahl 3: <br>
           <input type='number' name="t">   <br>
        </label>
        <label for="Lotto4">Lottozahl 4: <br>
           <input type='number' name="t">   <br>
        </label>
        <label for="Lotto5">Lottozahl 5: <br>
           <input type='number' name="t">   <br>
        </label>      
        <label for="Lotto6">Lottozahl 6: <br>
           <input type='number' name="t">   <br>
</label>
        
        
        
          <button type="submit"> Absenden</button>  
          <button type="reset"> Reset</button>     
                  

</form>



  </body>
</html>
<html>
<head>
 <title>PHP-Test</title>
</head>
<body>
    <pre>
<?php
if(isset($_POST["submit"])) {
    var_dump(Lotto1); 
}

// $names = ['Harry', 'Ron', 'Hermione'];
// var_dump($names); 
// unset($names[1]);
// var_dump($names); 
// array_push($names, "Ushi");
// var_dump($names); 

// print("\n \n");

// $number = (1020 + 923 + 780 + 890) / 4;

// var_dump($number);
// $number2 = 70 / ($number/100);
// var_dump($number2);

// $arr = [0,1,2,3,4,5,6,7,8,9];
// $arr2 = [];
// for($i=0; $i < count($arr); $i++) {
//     array_push($arr2, $arr[count($arr) - 1 - $i]);
//  }
// var_dump($arr2);
?>
 </pre>

<h1 style = "text-align:left; color:darkgoldenrod"> Ziehung der Lottozahlen </h1>
    <form action = "test.php" method="POST">
        
        Lottzahl 1: <input type="int" name ="Lotto1"> <br>
        Lottzahl 2: <input type="int" name ="Lotto2"> <br>
        Lottzahl 3: <input type="int" name ="Lotto3"> <br>
        Lottzahl 4: <input type="int" name ="Lotto4"> <br>
        Lottzahl 5: <input type="int" name ="Lotto5"> <br>
        Lottzahl 6: <input type="int" name ="Lotto6"> <br>

        <input type="submit" /> 

    </form>
</body>



</html>
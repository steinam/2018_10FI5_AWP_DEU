<?php


    function autoload($className){

        $className = str_replace("\\","/", $className);

        if(file_exists("./src/{$className}.php"))
        {
            require "./src/{$className}.php";
        }
    }

    spl_autoload_register("autoload");

$direstraits = new cd("Dire", 10, "Mountain of Swings", 60, true, "Coole Musik");
$steinam = new mensch();


//wir erwarten ein Objekt, dass die Anforderungen des iprintable-Interfaces erfüllt
//wir können uns deshalb darauf verlassen, dass das Obejkt eine print()-Methode hat
//im Beispiek akzeptiert es deshalb cd und mensch-Objekte
function printDetails(iprintable $thing)
{
    return $thing->print();

}

//printDetails nimmt eine cd
var_dump(printDetails($direstraits));

//printDetails nimmt auch gerne Menschen
var_dump(printDetails($steinam));



//var_dump($direstraits);

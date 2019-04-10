<?php


    //require_once(__DIR__ . '/src/cd.php');
    //require_once(__DIR__ . '/src/dvd.php');


    function autoload($className){

        $className = str_replace("\\","/", $className);

        if(file_exists("./src/{$className}.php"))
        {
            require "./src/{$className}.php";
        }
    }


    spl_autoload_register("autoload");

    $dire = new cd("Pink Floyd", 10, "Wish you were here", 50, false, "cool");
    $f = new cd("sss",3, "jdjdjd", 5, true,"hfdhfh");
    $f->setComment2("helll");
    //var_dump($f->getTitle());
    //$f->comment = "geht nicht";


    $terminator = new dvd("One to kill them all", "Terminator", 200, true, "best film ever");
    var_dump($terminator->print());

    function printMedia(items $media)
    {
        var_dump($media->print());


    }

    printMedia($dire);
    printMedia($terminator);

    $f->play();

    var_dump($terminator->play());



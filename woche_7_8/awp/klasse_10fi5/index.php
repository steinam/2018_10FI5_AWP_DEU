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




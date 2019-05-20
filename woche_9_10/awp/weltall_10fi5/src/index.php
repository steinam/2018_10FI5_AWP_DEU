<?php

use logic\liveform\Mensch;

function meinAutoloader($class)
{
    $split = explode('\\', $class);
    $classPath = implode('/', $split);
    $path = "$classPath.php";

    $filename = __DIR__ . '/'.  $path;
    include_once $filename;
}

spl_autoload_register('meinAutoloader');


$ste = new Mensch();
$ste->drive();
var_dump($ste);


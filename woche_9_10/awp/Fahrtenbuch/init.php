<?php

    use Fahrtenbuch\BL\Fahrrad;
    use Fahrtenbuch\BL\Fahrt;
    use Fahrtenbuch\BL\Fahrer;
    use Fahrtenbuch\BL\Fahrtenbuch;

  

    function autoloader($classname) {
        $lastSlash = strpos($classname, '\\')+1;
        $classname = substr($classname, $lastSlash);
        $directory = str_replace('\\', '/', $classname);
        $filename = __DIR__ .'/Fahrtenbuch/' . $directory . '.php';
        require_once($filename);
      }
      
      spl_autoload_register('autoloader');


      $sachs = new Fahrrad(2.45,20);
      $dreirad = new Fahrrad(3, 5);

      $fahrer = new Fahrer("steinam");
      
      
      $fahrt1 = new Fahrt();
      $fahrt1->setFahrt($fahrer, 10, $sachs);

      $fahrt2 = new Fahrt();
      $fahrt2->setFahrt($fahrer, 10, $dreirad);

      $fbuch = new Fahrtenbuch();
      $fbuch->setFahrten($fahrt1);
      $fbuch->setFahrten($fahrt2);

      echo($fbuch->getUmsatz());

      var_dump($sachs);

      var_dump($fbuch);
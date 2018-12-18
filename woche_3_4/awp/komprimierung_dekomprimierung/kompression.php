<html>
    <head>
    <style>
        .schalter {
            border-radius: 8px;
            background-color: blue;
            color: white;
            font-size: 25px;
            border: none;
        }

        p {
            font-size: 25px;
        }

    </style>
    </head>

    <body>

    </body>
</html>

<?php
    if(isset($_POST["kompression"]) or isset($_POST["dekompression"])){
        $orginal=$_POST["orgkomp"];
        $kompress=$_POST["kompr"];
          
        if(isset($_POST["kompression"])) {
            $split_length=1;
            
            $org=array();
            $org=str_split ($orginal,$split_length);
            $array_size=count($org); 
            $komp=array();

            // var_dump($org);
            //echo($array_size);
            
           /* $org_value=array();
            //$org_keys=array();
            $org_value=array_count_values($org);
            //$org_keys=array_keys($org);

            echo implode ($org_value);
            //echo implode ($org_keys);
            */
        
           $j=1;
           $z=0;
           array_push($org, 0); // eine 0 ans ende einfügen, um Fehler bei $i+1 zu vermeiden
            
            for($i=0;$i<$array_size;$i++) {  // Array durchsuchen

                if ($org[$i] === $org[$i+1]){ // Vergleiche nächsten Array-Eintrag
                    $j=$j+1;     
                }else{

                    if($j>9){ // Abfrage, falls $j größer 9 ist
                        $komp[$z] = strval(9).$org[$i];
                        $z=$z+1;
                        $komp[$z] = strval($j-9).$org[$i];
                        $z=$z+1;
                    }else{
                        $komp[$z] = strval($j).$org[$i];
                        $z=$z+1;    
                    }

                    // var_dump($komp);
                    $j=1;
                }
                
            } 
            
            $ausgabe=implode($komp); // Array --> String
            
        }

        if(isset($_POST["dekompression"])) {
            $back = $_POST["kompr"];
            $back_array = array();
            $back_array = str_split($back,1);
            $lang = count($back_array);
            $dekomp = "";

            for ($k=1;$k<$lang;$k=$k+2) {
                $dekomp .= (str_repeat($back_array[$k],(int)$back_array[$k-1]));
            }
        } 
        
        
    }  
?>
<form action="kompression.php" method="POST">
    <p>Original</p>
    <input type="text" name="orgkomp" value="<?php echo (isset($orginal))?$orginal:'';?>"><br><br>
    <button class="schalter" type="submit" name="kompression" >Kompression</button>
    <p>Kompression</p>
    <input type="text" name="kompr" value="<?php echo (isset($ausgabe))?$ausgabe:'';?>"><br><br>
    <button class="schalter" type="submit" name="dekompression" >Dekompression</button>
</form>
<p>Original-Ergebnis</p>
<input type="text" name="kompr" value="<?php echo (isset($dekomp))?$dekomp:'';?>"><br><br>

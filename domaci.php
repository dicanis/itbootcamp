<?php

echo "<br>"."<br>"."zadatak1"."<br>";
        $a = 29;
        $b = 297;
        $c = 367;
        $max = max ($a, $b, $c );
        $min = min ($a, $b, $c );
        if ($max == $a or $max == $b && $min == $a or $min == $b){
           $mid=$c;
           }
        elseif ($max == $b or $max == $c && $min == $b or $min == $c){
            $mid=$a;
        }
        else {
            $mid=$b;
        }
        
        echo "Maks = $max , Sredina= $mid , Min = $min";


        ?>
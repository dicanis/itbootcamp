<?php

    function digitron ($a, $b, $c){
        if($c== "*") {
            $rez=$a*$b;
        }
        elseif ($c == "/") {
            $rez=$a/$b;
        }
        elseif ($c == "-"){
            $rez=$a-$b;
        }
        elseif ($c == "+"){
            $rez=$a+$b;
        }
        else {
            echo "Vrednost za treci parametar mora da bude + - * ili/";
        }

        echo $rez;
    }
    $a= 5;
    $b=10;
    $c="*";
    digitron ($a,$b,$c);
?>
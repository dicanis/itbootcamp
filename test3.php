<?php

$god = date ('Y');
$ungod= 1994;
$brgod = $god - $ungod;
$pol = "z";
$kg = 80;
$cm = 182;
$m = $cm / 100;
$bmi= $kg/($m * $m);
if ( $pol == "m" && $bmi < 18.5) {
    echo " <img src='images/m1.png'> Osoba ima $brgod godina, muskog je pola, pothranjena je ";
}
elseif ( $pol == "m" && $bmi < 24.9) {
    echo " <img src='images/m2.png'> Osoba ima $brgod godina, muskog je pola, normalne je tezine ";
}
elseif ( $pol == "m" && $bmi < 29.9) {
    echo " <img src='images/m3.png'> Osoba ima $brgod godina, muskog je pola, povisene je tezine ";
}
elseif ( $pol == "m" && $bmi >= 30) {
    echo " <img src='images/m4.png'> Osoba ima $brgod godina, muskog je pola i gojazna ";
}

elseif ( $pol == "z" && $bmi < 18.5) {
    echo " <img src='images/zena1.png'> Osoba ima $brgod godina, zenskog je pola, pothranjena je ";
}
elseif ( $pol== "z" && $bmi < 24.9){
    echo " <img src='images/zena2.png'> Osoba ima $brgod godina, zenskog je pola, normalne je tezine ";
}
elseif ( $pol == "z" && $bmi < 29.9){
    echo " <img src='images/zena3.png'> Osoba ima $brgod godina, zenskog je pola, povisene je tezine ";
}
else {
    echo " <img src='images/zena4.png'> Osoba ima $brgod godina, zenskog je pola i gojazna ";
}


?>
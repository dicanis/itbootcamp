<html>
    <head>
        <style>
            img {
                width: 150px;
            }
        </style>
    </head>

    <body>

   <?php

    echo "<br>"."<br>"."Zadatak br. 1". "<br>"."<br>";
    $temp = 0;
    if ($temp >= 100) {
        echo "Voda kljuca";
    }
    elseif ($temp <= 0) {
        echo "Voda se ledi";
    }
    else {
        echo "Voda je u tecnom stanju";
    }

    echo "<br>"."<br>"."<br>"."<br>"."Zadatak br. 2". "<br>"."<br>";
    $tip="kolerik";
    if ($tip=="melanholik") {
        echo "<img src='images/melanholik.png'>";
    }
    elseif ($tip=="sangvinik") {
        echo "<img src='images/sangvinik.png'>";
    }
    elseif ($tip=="flegmatik") {
        echo "<img src='images/flegmatik.png'>";
    }
    elseif ($tip=="kolerik") {
        echo "<img src='images/kolerik.png'>";
    }


    echo "<br>"."<br>"."<br>"."<br>"."Zadatak br. 3". "<br>"."<br>";
    $kcal = 3000;
    $kj = $kcal * 4.1868;
    if ($kj < 2000) {
        echo "povecajte dnevni unos";
    }
    elseif ($kj > 4000) {
        echo "smanjite dnevni unos";
    }
    else {
        echo "dnevni unos je u redu";
    }






    ?>
    </body>
</html>
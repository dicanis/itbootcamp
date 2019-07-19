<html>
    <head>
        <style>
            #red {
                color: red;
            }
            #green {
                color: green;
            }
            #blue {
                color: blue;
            }
        </style>
    </head>

    <body>
    


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

        echo "<br>"."<br>"."zadatak2"."<br>";
        $a = 98;
        $b = 133;
        if ($a>$b) {
            if ($a % 2 == 0){
                    echo "Veci broj je prvi broj ($a) koji je paran";
                }
                else {
                    echo "Veci broj je prvi broj ($a) i nije paran";
                }
        }
        else {
            if ( $b % 2 == 0){
                echo "Drugi broj ( $b) je veci i on je paran";
            }
            else {
                echo "Drugi broj ($b) je veci i neparan";
            }    
            }

        echo "<br>"."<br>"."zadatak3"."<br>";
        $vreme = date ('G');
        $dan = date ('N');
        if ( $dan < 6 && $vreme >= 9 && $vreme <= 20) {
            echo "Butik je otvoren";
        }
        elseif ( $dan >= 6 && $vreme >= 10 && $vreme <= 18){
            echo "Butik je otvoren";
        }
        else {
            echo "Butik je zatvoren";
        }
        
        echo "<br>"."<br>"."zadatak4"."<br>";
        $color = "blue";
        switch ($color) {
            case "red":
                echo "<p id='red'> Paragraf obojen na osnovu unete boje </p>";
                break;
            case "green":
                echo "<p id='green'> Paragraf obojen na osnovu unete boje </p>";
                break;
            case "blue":
                echo "<p id='blue'> Paragraf obojen na osnovu unete boje </p>";
                break;
            default:
                echo "<p> Niste odabrali ni crvenu ni zelenu ni plavu </p>";
        }

        ?>
    </body>
</html>
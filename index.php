<html>
    <head>
        <style>
            
           
        </style>
    </head>

    <body>
    

        <?php

        echo "<br>"."<br>"."Zadatak 1"."<hr>"."<br>";
        function suma($n, $m){
            $suma=0;
            for ($n; $n <= $m; $n++){
                if ($n % 3 == 0 and $n % 7 != 0){
                    $suma += $n;   
                }
            }
            return $suma;
        }
        $rez= suma(15, 21);
        echo $rez;
        echo $rez;


        echo "<br>"."<br>"."Zadatak 2"."<hr>"."<br>";
        function ispis($color, $font, $n){
            $i=1;
            while ($i <= $n) {
                echo "$i<p style='color:$color;font-size:${font}px' >Paragraf drugog zadatka.</p>";
                echo "<br>" ;
                $i++;
            }
        }
        ispis("red", 25, 2);

        echo "<br>"."<br>"."Zadatak 3"."<hr>"."<br>";
        function krvnaGrupa ($tip){
            switch($tip){
                case "A+": 
                    echo "Mozes primiti krv od sledecih krvnih grupa: A+, 0+."."<br>";
                    echo "Mozes dati krv sledecim krvnim grupama: A+, AB+";
                    break;
                
                case "0+": 
                    echo "Mozes primiti krv samo od 0+ krvne grupe."."<br>";
                    echo "Mozes dati krv sledecim krvnim grupama: A+, AB+, 0+, B+";
                    break;
                
                case "B+": 
                    echo "Mozes primiti krv od sledecih krvnih grupa: B+, 0+."."<br>";
                    echo "Mozes dati krv sledecim krvnim grupama: AB+, B+";
                    break;
                
                case "AB+": 
                    echo "Mozes primiti krv od svih krvnih grupa."."<br>";
                    echo "Mozes dati krv samo AB+ krvnoj grupi";
                    break;
                
                default:
                    echo "Molimo unesite krvnu grupu u formatu (A+, 0+, B+ ili AB+).";
                
            }
        }
        krvnaGrupa("0+");









        ?>

        

    </body>
</html>
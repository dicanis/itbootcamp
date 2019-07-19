<html>

    <head>

    </head>



    <body>
        <?php


        echo "<br>"."<br>"."zadatak 1"."<br>";
        $n = 1;
        $m = 1;
        $s = 0;
        for ($i = $n; $i <= 20; $i++) {
            $m *= $i;
        }

        for ($i = $n; $i <=30; $i++) {
            $s += $i;
        }
        $f= $m - $s;
        echo "$f";

        echo "<br>"."<br>"."zadatak 1 nacin 2"."<br>";
        $n = 1;
        $m = 1;
        $s = 0;
        while ($n <=20) {
            $m *= $n;
            $n++;
        }

        $n = 1;

    
        while ($n <= 30) {
            $s += $n;
            $n++;
        }
        $f = $m - $s;
        echo "$f";  

        echo "<br>"."<br>"."zadatak 2 nacin 1"."<br>";
        $n = 1;
        $m = 5;
        $zbir= 0;
        for ($i= $n; $i<$m; $i++){
            $zbir = $zbir + $i ** 3;
        }
        echo "$zbir";

        echo "<br>"."<br>"."zadatak 2 nacin 2"."<br>";
        $n = 1;
        $m = 5;
        $zbir= 0;
        $i= $n;
        while ($i < $m){
            $zbir= $zbir + $i ** 3;
            $i++;
        }
        echo "$zbir";
        ?>


    </body>

</html>
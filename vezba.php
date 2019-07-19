<html>
    <head>
        <style>
            
            .red {
                color: red;
            }
            .yellow {
                color: yellow;
            }
            .blue {
                color: blue;
            }
            img {
                width: 124px;
                height: 124px;
            }
            
             {
                width: 150px;
            }
        </style>
    </head>

    <body>
    

        <?php
            /*data je slika sa putanjom i imenom. Prikazati sliku na web stranici. */

            $putanja = "images/html1.png";
            echo "<img src='$putanja'>";

            /* Za radnika je poznato:
                broj radnih sati u mesecu
                cena rada po satu
                procenat odbijanja na osnovu doprinosa

            Odrediti bruto i neto dohodak radnika. */

        $sat = 160;
        $cena = 5;
        $procenat = 65;

        $bruto = $sat * $cena;
        $neto = $bruto - $bruto * $procenat / 100;
        echo "<p> Bruto zarada: $bruto &euro;,
        Neto zarada: $neto &euro; </p>";


        echo "<br>"."<br>"."<br>";

        /* Broj minuta pretvoriti u sate i minute */

        $brojMinuta = 63;
        $sati = (int)($brojMinuta / 60);
        $min = $brojMinuta % 60;
        echo "<p>Broj sati: $sati, broj minuta: $min </p>";

        /* AKo je vrednost neke robe x dinara, odrediti najmanju kolicinu novcanica od 500din, 100din, 10 din i 1 din kojima se moze
        platiti data roba */

        $x = 2399;
        $petsto= (int)($x / 500);
        $x= $x  % 500;
        $sto= (int) ($x / 100);
        $x= $x % 100;
        $deset= (int)($x/10);
        $x= $x % 10;
        $jedan= $x / 1;
        echo "<p> Za kupovinu je potrebno $petsto novcanica od 500din, $sto novcanica od 100din, $deset novcanica od 10 din i $jedan kovanica od 1 din </p>";

        echo "<br>"."<br>";
        /* Ako je $a vece od $b ispisati: "a je vece od b" */
        $a=15;
        $b=9;
        if ($a > $b){
            echo "$a je vece od $b";
        }

        echo "<br>"."<br>";
        /* Ako je $a jednako $b ispisati "a i b su jednaki" */
        $a=17;
        $b=17;
        if ($a==$b){
            echo "Vrednost a i vrednost b su jednake";
        }

        echo "<br>"."<br>";
        /* Ako $a nije jednako $b ispisati "a i b nisu jednaki" */
        $a=17;
        $b=19;
        if ($a<>$b){
            echo "Vrednost a i vrednost b nisu jednake";
        }

        echo "<br>"."<br>";
        $a=29;
        $b=18;
        if ($a==$b){
            echo "vrednosti su jednake";
        }
        else {
            echo "vrednosti nisu jednake";
        }

        echo "<br>"."<br>";
        $a=8;
        $b=13;
        if ($a>$b) {
            echo "Vrednost a je veca od b";
        }
        else {
            echo "Vrednost a nije veca od vrednosti b";
        }
        /* ispitati da li je a=b a>b ili a<b */
        echo "<br>"."<br>";
        $a=29;
        $b=24;
        if($a>$b){
            echo "a je vece od b";
        }
        elseif ($a<$b){
            echo "a je manje od b";
        }
        else {
            echo "vrednost a je jednaka vrednosti b";
        }

        /* zadatak 2 */
        echo "<br>"."<br>";
        $temp=-123;
        if ($temp<0) {
            echo "Temp je u minusu";
        }
        else {
            echo "Temp je u plusu";
        }
 
        /* zadatak 3 */
        echo "<br>"."<br>"."zadatak3"."<br>";        
        $pol="m";
        if ($pol=="m"){
            echo "<img src='images/male.png'";
        }     
        else {
            echo "<img src='images/female.png'";
        }

        /* zadatak 4 */
        echo "<br>"."<br>"."zadatak4"."<br>";
        $vreme = date("A");
        if ($vreme="PM") {
            echo "popodne";
        }
        else {
            echo "prepodne  ";
        }

        /* zadatak 5 */
        echo "<br>"."<br>"."zadatak5"."<br>";
        $godina = date("Y");
        $unetoGodiste = 1994;
        if (($godina - $unetoGodiste)>=18) {
            echo "osoba je punoletna";
        }
        else {
            echo "osoba nije punoletna";
        }

        /* zadatak 6 */
        echo "<br>"."<br>"."zadatak6"."<br>";
        $a = 1114;
        $b = 235;
        $c = 146;
        if ($a > $b & $a > $c) {
            echo "A=$a je najveci broj";
        }
        elseif ($b > $a & $b > $c){
           echo " B=$b je najveci broj";
        }
        else {
            echo "C=$c je najveci broj";
        }

        /* zadatak 6 */
        echo "<br>"."<br>"."zadatak6"."<br>";
        $a = 1114;
        $b = 235;
        $c = 146;
        echo max ($a, $b, $c);

        /* zadatak 7 */
        echo "<br>"."<br>"."zadatak7"."<br>";
        $poen = 78;
        if ($poen <= 50){
            echo "vise srece drugi put";
        }
        elseif ($poen<=60) {
            echo "ocena je 6";
        }
        elseif ($poen<=70) {
            echo "ocena je 7";
        }
        elseif ($poen<=80) {
            echo "ocena je 8";
        }
        elseif ($poen<=90) {
            echo "ocena je 9";
        }
        else {
            echo "ocena je 10";
        }

        /* zadatak 8 */
        echo "<br>"."<br>"."zadatak8"."<br>";
        $dan = date('N');
        if($dan < 6) {
            echo "radni dan";
        }
        else {
            echo "zivooot";
        }

        echo "<br>"."<br>"."zadatak9"."<br>";
        $vreme =  date ('H');
        if ($vreme < 12) {
            echo "Dobro jutro";
        }
        elseif ($vreme < 18) {
            echo "Dobar dan";
        }
        else {
            echo "Dobro vece";
        }

        echo "<br>"."<br>"."zadatak10"."<br>";
        $dan1 = 12;
        $mesec1 = 12;
        $godina1 = 1995;
        $dan2 = 19;
        $mesec2 = 07;
        $godina2 = 1995;
        if ( $godina2 > $godina1) {
            echo "Raniji je $dan1 . $mesec1. $godina1";
        }
        elseif ( $godina2 < $godina1 ) {
            echo "Raniji je $dan2 . $mesec2. $godina2";
        }
        elseif ($mesec2 > $mesec1) {
            echo "Raniji je $dan1 . $mesec1. $godina1";
        }
        elseif ( $mesec2 < $mesec1) {
            echo "Raniji je $dan2 . $mesec2. $godina2";
        }
        elseif ( $dan2 < $dan1) {
            echo "Raniji je $dan1 . $mesec1. $godina1";
        }
        elseif ( $dan2 > $dan1) {
            echo "Raniji je $dan2 . $mesec2. $godina2";        }
        else { 
            echo "Isti dan";
        }

        echo "<br>"."<br>"."zadatak11"."<br>";
        $vreme = date ('H');
        if (9 < $vreme && $vreme < 18) {
            echo "Firma radi";  
        }
        else {
            echo "Firma ne radi";
        }


        echo "<br>"."<br>"."zadatak12"."<br>";
        $pocetak1 = 9;
        $kraj1 = 12;
        $pocetak2 = 12;
        $kraj2 = 20;
        if ($pocetak1 < $pocetak2) {
            if ($pocetak2 <= $kraj1) {
                echo "Preklapaju se";
            }
            else {
                echo "Ne preklapaju se";
            }}
        if ($pocetak2 < $pocetak1) {
            if ($pocetak1 <= $kraj2) {
                echo "Preklapaju se";
            }
            else {
                echo "Ne preklapaju se";
            }}


        echo "<br>"."<br>"."zadatak13"."<br>";
        $broj = 19;
        $ost = $broj % 2;
        if ($ost>0) {
            echo "Broj je neparan";
        }
        else {
            echo "Broj je paran";
        }


        echo "<br>"."<br>"."zadatak14"."<br>";
        $broj = 9;
        $ost = $broj % 3;
        if ($ost>0) {
            echo "Broj nije deljiv sa 3";
        }
        else {
            echo "Broj je deljiv sa 3";
        }

        echo "<br>"."<br>"."zadatak15"."<br>";
        $a = 29;
        $b = 19;
        if ($a>$b) {
            echo $a - $b;
        }
        else {
            echo $b - $a;
        }

        echo "<br>"."<br>"."zadatak16"."<br>";
        $a = -18;
        if ($a <= 0){
            echo $a-1;
        }
        else {
            echo $a+1;
        }

        echo "<br>"."<br>"."zadatak17"."<br>";
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

       
        


        echo "<br>"."<br>"."zadatak18"."<br>";
        $broj=7.2;
        if ((int) ($broj)==$broj) {
            echo "ceo broj";
        }
        else {
            echo "decimalni br";
        }

        echo "<br>"."<br>"."zadatak dat na casu"."<br>";

        $pol = "z";
        $god = 24 ;
        if ($pol == "z") {
            if ($god >= 18){
                echo "Punoletna zena";
            }
            else {
                echo "Maloletna zena";
            }
        }
        else {
            if ($god >= 18){
                echo "Punoletni muskarac";
            }
            else {
                echo "Maloletni muskarac";
            }
        }

        echo "<br>"."<br>"."zadatak21"."<br>";
        $a= 31;
        $b = 43;
        $c = 54;
        $max= max ($a, $b, $c);
        echo $max;

        echo "<br>"."<br>"."zad 22"."<br>";
        $temp = 23;
        if ($temp < -15 or $temp>40) {
            echo "ekstremna temperatura";
        }
        else {
            echo "temp je ok";
        }

        echo "<br>"."<br>"."zad 22"."<br>";
        $god = date ('Y');
        $ost = $god / 4;
        $ost2 = $god / 100;
        $ost3 = $god / 400;
        if ($ost=0 or $ost2>0 or  $ost3=0) {
            echo "Godina je prestupna";
        }
        else {
            echo "Godina nije prestupna";
        }


        echo "<br>"."<br>"."switch naredba"."<br>";
        $broj= 14;
        switch ($broj){
            case 4:
            echo "Odabrali ste broj 4";
            break;
            case 3:
            echo "Odabrali ste broj 3";
            break;
            case 2:
            echo "Odabrali ste broj 2";
            break;
            case 1:
            echo "Odabrali ste broj 1";
            break;
            default:
            echo "Niste odabrali broj od 1 do 4";
        }

        echo "<br>"."<br>"."switch 1"."<br>";
        $dan = date ('N');
        switch ($dan) {
            case 1:
            echo "1. dan je ponedeljak";
            break;
            case 2:
            echo "2. dan je utorak";
            break;
            case 3:
            echo "3. dan je sreda";
            break;
            case 4:
            echo "4. dan je cetvrtak";
            break;
            case 5:
            echo "5. dan je petak";
            break;
            case 6:
            echo "6. dan je subota";
            break;
            case 7:
            echo "7. dan je nedelja";
            break;
            default:
            echo "Los unos";
        }

        echo "<br>"."<br>"."switch 2"."<br>";
        $ocena = 4;
        switch ($ocena) {
            case $ocena < 2:
            echo "Nedovoljan";
            break;
            case $ocena < 2.5:
            echo "Dovoljan";
            break;
            case $ocena < 3.5:
            echo "Dobar";
            break;
            case $ocena < 4.5:
            echo "Vrlo dobar";
            break;
            case $ocena >= 4.5:
            echo "Odlican";
            break;
            default:
            echo "Prevario si sistem";
        }

        echo "<br>"."<br>"."switch 3"."<br>";
        $broj = 2;
        switch ($broj) {
            case 0:
            echo "Broj je nula";
            break;
            case 2:
            echo "Broj je dva";
            break;
            case 4:
            echo "Broj je cetiri";
            break;
            case 6:
            echo "Broj je sest";
            break;
            case 8:
            echo "Broj je osam";
            break;
            default:
            echo "Pogresan unos";
        }

        echo "<br>"."<br>"."switch 4"."<br>";

        $br1 = 15;
        $br2 = 25;
        $kar = "d";
        switch ($kar) {
            case "m":
            echo "Izabrana je operacija mnozenje broja $br1 i $br2 rezultat je = " . ($br1*$br2);
            break;
            case "d":
            echo "Izabrana je operacija deljenja broja $br1 i $br2 rezultat je = " . ($br1/$br2);
            break;
            case "s":
            echo "Izabrana je operacija sabiranje broja $br1 i $br2 rezultat je = " . ($br1+$br2);
            break;
            case "o":
            echo "Izabrana je operacija oduzimanje broja $br1 i $br2 rezultat je = " . ($br1 - $br2);
            break;
            default:
            echo "Greska";

        }

        echo "<br>"."<br>"."switch 4"."<br>";

        $dan = date ('N');
        switch ($dan) {
            case 5:
            echo "Ostao je jos jedan dan do vikenda";
            break;
            case 4:
            echo "Ostlo je jos dva dana do vikenda";
            break;
            case 3:
            echo "Ostalo je jos tri dana do vikenda";
            break;
            case 2:
            echo "Ostalo je jos cetiri dana do vikenda";
            break;
            case 1:
            echo "Ostao je jos pet dana do vikenda";
            break;
            default:
            echo "Greska pri unosu";
        }


        echo "<br>"."<br>"."switch 5"."<br>";
        $mesec = date ('n');
        switch ($mesec) {
            case 1:
            echo "Prvi mesec";
            break;
            case 2:
            echo "Drugi mesec";
            break;
            case 3:
            echo "Trecii mesec";
            break;
            case 4:
            echo "Cetvrti mesec";
            break;
            case 5:
            echo "Peti mesec";
            break;
            case 6:
            echo "Sesti mesec";
            break;
            case 7:
            echo "Sedmi mesec";
            break;
            case 8:
            echo "Osmi mesec";
            break;
            case 9:
            echo "Deveti mesec";
            break;
            case 10:
            echo "Deseti mesec";
            break;
            case 11:
            echo "Jedanaesti mesec";
            break;
            case 12:
            echo "Dvanaesti mesec";
            break;
            default:
            echo "Greska pri unosu";

        }

        echo "<br>"."<br>"."while petlja"."<br>";
        $i=1;
        while ($i <=10) {
            echo $i;
            echo "<br>";
            $i++;
        }

        echo "<br>"."<br>"."while petlja "."<br>";
        $i=1;
        while ($i < 10) {
            $i++;
            echo $i;
            echo "<br>";
           
        }

        echo "<br>"."<br>"."while petlja zad 1 "."<br>";
        $i = 0;
        while ($i <= 20){
            echo $i;
            echo "<br>";
            $i++;
        }

        echo "<br>"."<br>"."while petlja zad 2 "."<br>";
        $i = 20;
        while ($i >= 1){
            echo $i;
            echo "<br>";
            $i--;

        }

        echo "<br>"."<br>"."while petlja zad 3 "."<br>";
        $i = 2;
        while ($i <=20){
            echo $i;
            echo "<br>";
            $i+=2;
        }

        echo "<br>"."<br>"."while petlja zad 3 "."<br>";
        $i = 1;
        while ($i <= 20) { 
            if ($i % 2 == 0) {
                echo $i;
                echo "<br>";
            }
            $i++;
        }


        
        echo "<br>"."<br>"."while petlja zad 4 "."<br>";
        $a = 82;
        $b = 8;
        $kol = 0;
        $ost = $a;
        while ($ost > $b) {
            $ost = $ost - $b;
            $kol++;
        }
        echo "$a = $kol * $b + $ost";
        echo "<br>";

        echo "<br>"."<br>"."while petlja zad 4 nacin 2"."<br>";
        $a = 82;
        $b = 8;
        $zbir=0;
        $ceoDeo= 0;
        while ($zbir +$b <= $a ){
            //if($zbir + $b < $a) {
                $zbir = $zbir + $b;
                $ceoDeo = $ceoDeo + 1;
                $ost = $a - $zbir;
            //}
        }
        echo "Kolicnik je $ceoDeo Ostatak je $ost";

        echo "<br>"."<br>"."while petlja zad 5"."<br>";
        $i = 1;
        while ($i <= 6) { 
            if ($i % 3 == 1) {
                echo "<p class='yellow'> Some text balsald </p>";
            }
            elseif ($i % 3 == 2) {
                echo "<p class='red'> Some text balsald </p>";
            }
            else {
                echo "<p class='blue'> Some text balsald </p>";

            }
            $i++;
        }

        echo "<br>"."<br>"."zadatak6"."<br>";
        $a=1;
        $zbir = 0;
        while ($a <= 100) {
            $zbir = $zbir + $a;
            $a++;
        }
        echo "suma prvih 100 brojeva iznosi = $zbir";


        echo "<br>"."<br>"."zadatak7"."<br>";
        $i = 1;
        $n = 156;
        $zbir = 0;
        while ($i <= $n) {
            $zbir += $a;
            $i++;
        }
        echo "$zbir";

        echo "<br>"."<br>"."zadatak7"."<br>";
        $n = 154;
        $m = 255;
        $zbir = 0;
        while ($n <= $m) {
            $zbir += $n;
            $n++;
        }
        echo "$zbir";

        echo "<br>"."<br>"."zadatak7"."<br>";
        $n = 1;
        $m = 10;
        $proizvod = 1;
        while ($n <= $m) {
            $proizvod = $proizvod * $n;
            $n++;
        }
        echo "$proizvod";

        echo "<br>"."<br>"."zadatak8"."<br>";
        $n = 1;
        $m = 3;
        $suma = 0;
        while ($n <= $m) {
            $suma = $suma + $n ** 2;
            $n++;
        }
        echo "$suma";

        echo "<br>"."<br>"."FOR petlja zad 1"."<br>";
        for ($i = 1 ; $i < 20 ; $i++) {
            echo "Na redu je broj $i";
            echo "<br>";
        }

        echo "<br>"."<br>"."FOR petlja zad 2"."<br>";
        for ($i>20 ; $i >= 0; $i--) {
            echo "Na redu je broj $i";
            echo "<br>";
        }

        echo "<br>"."<br>"."FOR petlja zad 3"."<br>";
        for ($i =1  ; $i <= 20; $i++) {
            if ($i % 2 == 0) {
            echo " $i";
            echo "<br>";
        }
        }


        echo "<br>"."<br>"."FOR petlja zad 4"."<br>";
        for ($i = 5; $i <= 15; $i++) {
            $c=$i*2;
            echo "Dvostruka vrednost broja je $c";
            echo "<br>";
        }

        echo "<br>"."<br>"."FOR petlja zad 5"."<br>";
        $i=1 ;
        $zbir=0;
        for ($i=1; $i <=100; $i++ ) {
            $zbir= $zbir + $i;
        }
        echo " Zbir je $zbir";

        echo "<br>"."<br>"."FOR petlja zad 6"."<br>";
        $n = 3 ;
        $zbir= 0;
        for ($i=1; $i <= $n; $i++){ 
            $zbir= $zbir + $i;
        }
        echo "Zbir je $zbir";


        echo "<br>"."<br>"."FOR petlja zad 7"."<br>";
        $n = 15;
        $m = 35 ;
        $zbir= 0;
        for ($n; $n <= $m; $n++){ 
            $zbir= $zbir + $n;
        }
        echo "Zbir je $zbir";


        echo "<br>"."<br>"."FOR petlja zad 8"."<br>";
        $n = 1;
        $m = 3 ;
        $proizvod= 1;
        for ($n; $n <= $m; $n++){ 
            $proizvod= $proizvod * $n;
        }
        echo "Proizvod je $proizvod";

//suma kvadrata brojeva od n do m
        echo "<br>"."<br>"."FOR petlja zad 9"."<br>";
        $n = 1;
        $m = 5;
        $zbir=0;
        for ($i=$n; $i <= $m; $i++){
            $zbir = $zbir + $i ** 2;
        }
        echo "Suma kvadrata je $zbir";

        echo "<br>"."<br>"."FOR petlja zad 10"."<br>";
        $i = 1;
        for ($i; $i <= 3; $i++)
        {
            if ($i == 1) 
            {
                echo "<img src='images/1.png'>";
            }
            elseif ($i == 2)
            {
                echo "<img src='images/2.png'>";
            }
            else 
            {
                echo "<img src='images/3.png'>";
            }
        }

        echo "<br>"."<br>"."FOR petlja zad 11"."<br>";
        $s=0;
        for ($i; $i <= 30; $i++){
            if ($i % 9 == 0) {
                $s += $i;
            }
        }
        echo $s;

        echo "<br>"."<br>"."FOR petlja zad 12"."<br>";
        $p=1;
        for ($i=20; $i <= 100; $i++){
            if ($i % 11 == 0) {
                $p *= $i;
            }
        }
        echo $p;

        echo "<br>"."<br>"."FOR petlja zad 12"."<br>";
        for ($i=1; $i<=3; $i++){
            echo "<img src='images/$i.png'>";
            echo "<br>";
        }

        echo "<br>"."<br>"."FOR petlja zad 13"."<br>";

        $br = 0;
        for ($i =5 ; $i < 20; $i++){
            if ($d = $i % 13 == 0) {
                $br += 1;    
            }
            }
            echo "$br";

        echo "<br>"."<br>"."FOR petlja zad 14"."<br>";

        $n = 5; 
        $m = 15;
        $d= 0;
        $s=0;
        for ($i=$n; $i<=$m; $i++ ){
            $d += 1;
            $s += $i;
        }
        $a = $s / $d;
            echo $a;

        echo "<br>"."<br>"."FOR petlja zad 15"."<br>";
        $n= -2;
        $m= 10;
        $neg=0;
        $p=0;
        for ($i=$n; $i<=$m; $i++ ){
            if ($i < 0){
                $neg += 1; 
            }
           
            elseif ($i >0) {
                $p += 1;
            }
        }
        echo "Ima $neg negatvnih brojeva";
        echo "<br>";
        echo "Ima $p pozitivnih brojeva";

        echo "<br>"."<br>"."FOR petlja zad 16"."<br>";

        $pet= 0;
        $tri= 0;
        $brojDeljivih = 0 ;
        for ($i=5 ; $i<=50; $i++){
            if ($i % 5 == 0 or $i % 3 == 0) {
                $brojDeljivih += 1;
        }
        }
        echo "Ima $brojDeljivih brojeva sa 3 i 5";

        echo "<br>"."<br>"."FOR petlja zad 17"."<br>";

        $n= 10;
        $m = 30;
        $suma= 0;
        $br=0;
        for ($i=$n; $i <= $m; $i++) {
            $pos = $i%10;
            if ($pos==4) {
                $suma += $i;
                $br ++;
            }
        }
        echo "Suma je $suma, broj je $br";

        echo "<br>"."<br>"."FOR petlja zad 18"."<br>";
        $n = 5;
        $m = 10;
        $a = 2;
        for ($i=$n; $i<= $m ; $i++) {
            if ($i % $a == 0) {
                echo $i;
                echo "<br>";
            }
        }

        echo "<br>"."<br>"."FOR petlja zad 19"."<br>";
        $n = 5;
        $m = 10;
        $a = 2;
        for ($i=$n; $i<= $m ; $i++) {
            if ($i % $a != 0) {
                echo $i;
                echo "<br>";
            }
        }

        echo "<br>"."<br>"."FOR petlja zad 20"."<br>";
        $n = 5;
        $m = 10;
        $a = 2;
        $sum= 0;
        for ($i=$n; $i<= $m ; $i++) {
            if ($i % $a != 0) {
               $sum += $i;
            }
        }
        echo "Suma brojeva je $sum ";        

        echo "<br>"."<br>"."FOR petlja zad 20"."<br>";
        $n = 5;
        $m = 10;
        $a = 2;
        $pr= 1;
        for ($i=$n; $i<= $m ; $i++) {
            if ($i % $a == 0) {
              $pr *= $i;
            }
        }
        echo "Proizvod brojeva je $pr ";    









        ?>

        

    </body>
</html>
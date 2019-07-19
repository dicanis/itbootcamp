<html>
    <head>
        <style>
            
            
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
            echo "<br>"."<br>"."Funkcije zadatak 1"."<br>";
            function mojaFunkcija (){
                echo "Zdravo svete"."<br>";
            }
            mojaFunkcija();
            mojaFunkcija();

            echo "<br>"."<br>"."Funkcije zadatak 2"."<br>";
            function fja($tekst){
                echo $tekst;
            }
            $tekst= "Zdravo svete!";
            fja($tekst);

            echo "<br>"."<br>"."Funkcije zadatak 3"."<br>"."<hr>";
            function korisnikIme($ime){
                echo " Korisnikovo ime : $ime";
                echo "<br>";
                echo "<hr>";
            }
            function korisnikPrezime($prezime){
                echo " Korisnikovo prezime: $prezime ";
                echo "<br>";
                echo "<hr>";
            }


            echo "<br>"."<br>"."Funkcije zadatak 4"."<br>"."<hr>";
            function it ($i){
                echo "<hr>"."Broj $i"."<br>";
            }
            for ($i=1; $i<=5; $i++){
                it ($i);
                korisnikIme("Dimitrije");
                korisnikPrezime("Popovic");
            }

            echo "<br>"."<br>"."Funkcije zadatak 5 sa return"."<br>"."<hr>";
            function zbir( $a, $b){
                $rez = $a + $b ;
                return $rez;
            }
            $rezultat = zbir (5,6);
            echo $rezultat;

            echo "<br>"."<br>"."Funkcije zadatak 6 sa return"."<br>"."<hr>";
            $rezultat= zbir(zbir(5,6), zbir(4,5));
            echo $rezultat;

            /*Napisati funkciju pozdrav kojoj se prosleđuje 
            ime i prezime, a funkcija ispisuje pozdrav. 
            Na primer za uneto ime Jelena i prezime Matejić, 
            funkcija ispisuje Zdravo Jelena Matejić. */
            echo "<br>"."<br>"."<br>"."<br>";

            echo "<br>"."<br>"."Funkcije zadatak 1"."<br>"."<hr>";

            function pozdrav($ime, $prezime){
                echo "<br>"."Zdravo $ime $prezime";
            }
            $ime= "Jelena";
            $prezime = "Matejic";
            pozdrav($ime, $prezime);


            /*Napisati funkciju zbir koja računa zbir dva realna broja.
            Šta bi trebalo izmeniti da bi se dobila razlika, proizvod ili količnik dva broja.*/
            echo "<br>"."<br>"."Funkcije zadatak 2"."<br>"."<hr>";

            function zbir1($a, $b) {
                $zbir = $a + $b;
                return $zbir;
            }
            $a=5;
            $b=15;
            $c=zbir1($a, $b);
            echo $c;

            /*Napisati funkciju neparan koja za uneti ceo broj n vraća tačno ukoliko je neparan ili netačno ukoliko nije neparan.*/

            echo "<br>"."<br>"."Funkcije zadatak 3"."<br>"."<hr>";
            function neparan($n){
                if ($n%2 != 0) {
                    echo "tacno";
                }
                else {
                    echo "netacno";
                }
            }
            $n=5;
            neparan($n);

            /*Napisati funkciju maks2 koja vraća veći od dva prosleđena realna broja. Zatim napisati funkciju maks4 koja vraća najveći od četiri prosleđena realna broja.*/

            echo "<br>"."<br>"."Funkcije zadatak 4"."<br>"."<hr>";
            function maks2($a, $b) {
                $maks2= max ($a, $b);
                echo "Najveci broj je $maks2";
            }
            $a = 3;
            $b = 5;
            maks2($a,$b);

            echo "<br>"."<br>"."Funkcije zadatak 5"."<br>"."<hr>";

            function maks4($a, $b, $c, $d) {
                $maks4= max ($a, $b, $c, $d);
                echo "Najveci broj je $maks4";
            }
            $a = 3;
            $b = 5;
            $c= 10;
            $d= 19;
            maks4($a,$b,$c, $d);

            /*Napraviti funkciju koja prikazuje sliku za prosledjenu adresu slike.*/
            echo "<br>"."<br>"."Funkcije zadatak 6"."<br>"."<hr>";
            function slika($a){
                echo "<img src='$a'>";
            }
            $a = "images/1.png";
            slika ($a);


            /*Napraviti funkciju koja za unetu boju na engleskom jeziku boji tekst paragrafa u tu boju.*/
            echo "<br>"."<br>"."Funkcije zadatak 6"."<br>"."<hr>";
            function colorP($color){
                echo "<p style='color:$color'> This paragraph is just for testing </p>";
            }
            $color= "blue";
            colorP($color);

            /*Napraviti funkciju kojoj se prosleđuje ceo broj a ona ispisuje tekst koji ima prosleđenu veličinu fonta.*/

            echo "<br>"."<br>"."Funkcije zadatak 7"."<br>"."<hr>";
            function ceoBroj($a){
                echo "<p style='font-size:" . $a . "px'> Ovaj tekst je ispisan fontom velicine $a</p>";
            }
            $a=45;
            ceoBroj($a);

            /*Napraviti funkciju koja pet puta ispisuje istu rečenicu, a veličina fonta rečenice treba da bude jednaka vrednosti*/
            echo "<br>"."<br>"."Funkcije zadatak 8"."<br>"."<hr>";
            function ispisRecenica($i)
            {
            for ($i=20; $i<=25; $i++){
                echo "<p style='font-size: ${i}px'>Recenica sa fontom velicine date vrednost.<p>";
            }
            }
            ispisRecenica($i);

            /*Napisati program koji sadrži funkciju sedmiDan koja za uneti broj n ispisuje n-ti dan u
            nedjelji (npr. za 1 se ispisuje „Ponedjeljak“, za 7 ispisuje “Nedelja”, a za 8 opet “Ponedeljak”).
            Pitanje: Kako bismo realizovali ovaj zadatak da se tražio n-ti mesec u godini?*/
            echo "<br>"."<br>"."Funkcije zadatak 9"."<br>"."<hr>";
            function sedmiDan($n){
                if ($n % 7 == 1){
                    echo "Ponedeljak";
                }
                elseif ($n % 7 == 2){
                    echo "Utorak";
                }
                elseif ($n % 7 == 3){
                    echo "Sreda";
                }
                elseif ($n % 7 == 4){
                    echo "Cetvrtak";
                }
                elseif ($n % 7 == 5){
                    echo "Petak";
                }
                elseif ($n % 7== 6){
                    echo "Subota";
                }
                elseif ($n % 7 == 0){
                    echo "Nedelja";
                }
            }
            sedmiDan(210);
            
            echo "<br>"."<br>"."Funkcije zadatak 9 nmeseci"."<br>"."<hr>";
            function meseci($m){
                switch($m){
                    case ($m % 12 == 1): {
                        echo "Januar";
                        break;
                    }
                    case ($m % 12 == 2): {
                        echo "Februar";
                        break;
                    }
                    case ($m % 12 == 3): {
                        echo "Mart";
                        break;
                    }
                    case ($m % 12 == 4): {
                        echo "April";
                        break;
                    }
                    case ($m % 12 == 5): {
                        echo "Maj";
                        break;
                    }
                    case ($m % 12 == 6): {
                        echo "Jun";
                        break;
                    }
                    case ($m % 12 == 7): {
                        echo "Jul";
                        break;
                    }
                    case ($m % 12 == 8): {
                        echo "Avgust";
                        break;
                    }
                    case ($m % 12 == 9): {
                        echo "Septembar";
                        break;
                    }
                    case ($m % 12 == 10): {
                        echo "Oktobar";
                        break;
                    }
                    case ($m % 12 ==11): {
                        echo "Novembar";
                        break;
                    }
                    case ($m % 12 == 0): {
                        echo "Decembar";
                        break;
                    }
                }
            }
            meseci(11);


            /*Napraviti funkciju deljivSaTri koja se koristi u ispisivanju brojeva koji su deljivi sa tri u intervalu od n do m.
            Prebrojati koliko ima ovakvih brojeva od n do m.*/
            echo "<br>"."<br>"."Funkcije zadatak 9"."<br>"."<hr>";
            function deljivSaTri($n, $m) {
                $br=0;
                for ($n; $n<=$m; $n++){
                    if ($n % 3 == 0){
                        echo $n."<br>";
                        $br +=1;
                    }
                }
                echo " Postoje $br br. deljiva sa 3 u datom intervalu ";
            }
            deljivSaTri(5, 10);
          



            /*Napisati funkciju kojom se ispisuje brojeve u intervalu od n do m koji su deljivi sa tačno dva od brojeva 2, 3, 5 i 7.*/
            echo "<br>"."<br>"."Funkcije zadatak 10"."<br>"."<hr>";

            function ispis($n, $m){
                for ($i=$n; $i<=$m; $i++) {
                    $br=0;
                    if ($i % 2 == 0){
                        $br++;
                    }
                    if ($i % 3 == 0){
                        $br++;
                    }
                    if ($i % 5 == 0){
                        $br++;
                    }
                    if ($i % 7 == 0){
                        $br++;
                    }
                    if ($br == 2){
                        echo "<p>$i</p>";
                    }
                }
            }
            ispis(5, 15);




            
            




        ?>

        

    </body>
</html>
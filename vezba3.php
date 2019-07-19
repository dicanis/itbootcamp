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

            echo "<br>"."<br>"."Funkcije zadatak 4/2"."<br>"."<hr>";

            function maks4($a, $b, $c, $d) {
                $maks4= max ($a, $b, $c, $d);
                echo "Najveci broj je $maks4";
            }
            $a = 3;
            $b = 5;
            $c= 10;
            $d= 19;
            maks4($a,$b,$c, $d);

            /*Napraviti funkciju koja prikazuje sliku za prosledjenu adresu slike. */

            echo "<br>"."<br>"."Funkcije zadatak 5"."<br>"."<hr>";
            function slika($a){
                echo "<img src='$a'>";
            }
            $a="images/1.png";
            slika($a);

            echo "<br>"."<br>"."Funkcije zadatak 5"."<br>"."<hr>";
            function color($a){
                echo "<p style='color:$a'> Paragraph in input color </p>";
            }
            $a= "red";
            color($a);

            
            



            
            




        ?>

        

    </body>
</html>
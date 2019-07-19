<?php
	$x="crni";
	$y="zuti";
	echo $x."<br>".$y;
	$z=$x;
	$x=$y;
	$y=$z;
	echo "<br>".$x."<br>".$y;

	$x="5";
	$y="3";
	echo "<br>"."<br>"."x=".$x."<br>"."y=".$y;
	$z=$x;
	$x=$y;
	$y=$z;
	echo "<br>"."x=".$x."<br>"."y=".$y;

	echo "<br>"."<br>"."<br>";
	$cena= 546;
	$uplata= 1540;
	$kusur= $uplata - $cena;
	echo "Kusur iznosi: ". $kusur;

	
	echo "<br>"."<br>"."<br>";
	$din=20000;
	$kurs= 117.81;
	$rez= $din / $kurs;
	echo "Iznos u eurima: ".$rez; 	


	echo "<br>"."<br>"."<br>";
	$eur= 250;
	$din= $eur * 117.81;
	$dol= $din / 104.86;
	echo $eur."eura = ".$dol. "dolara";

	echo "<br>"."<br>"."<br>";
	$cel = 32;
	$far = $cel * 9/5 + 32;
	echo $cel."cel =". $far. " far";

	echo "<br>"."<br>"."<br>";
	$far = 89.6;
	$cel = ($far - 32)*5/9 ;
	echo $far. " far = ". $cel. " cel";


	echo "<br>"."<br>"."<br>";
	$sat= 13;
	$min= 49;
	$vreme= $sat*60+$min;
	echo "Od ponoci je proslo ukupno: ". $vreme." minuta.";

	echo "<br>"."<br>"."<br>";
	$sat= date("G");
	$min= date ("i");
	$vreme= $sat*60+$min;
	echo "Od ponoci je proslo ukupno: ". $vreme." minuta.";

	echo "<br>"."<br>"."<br>";


?>

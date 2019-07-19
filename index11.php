<?php

$galon=215;
$litar= $galon / 3.785;
echo $galon."galona = ".$litar." litara.";

echo "<br>"."<br>"."<br>";

$litarn=150;
$galon= $litar*3.785;
echo $litar."litara = ".$galon." galona. ";

echo "<br>"."<br>"."<br>";
echo "<br>"."<br>"."<br>";


$far=69;
$cel=($far-32)*5/9;
$kel=$cel+273.15;
echo "$far Faranhajta = $kel Kelvina";

echo "<br>"."<br>"."<br>";

$kel=299;
$cel=$kel-273.15;
$far=$cel*9/5+32;
echo "$kel Kelvina = $far Faranhajta";  


?>
<?php
function vergelijkMet100($getal) {
    if ($getal > 100) {
        echo "Het getal $getal is groter dan 100.<br>";
    } elseif ($getal < 100) {
        echo "Het getal $getal is kleiner dan 100.<br>";
    } else {
        echo "Het getal is precies 100.<br>";
    }
}

function voedingsLijst($calorieen, $koolhydraten, $eiwit, $vet, $dieetGoed) {
    $status = $dieetGoed ? "Dieet goedgekeurd" : "Dieet afgekeurd";

    echo "
    <ul class='voeding'>
        <li>Calorieën: $calorieen</li>
        <li>Koolhydraten: $koolhydraten</li>
        <li>Eiwit: $eiwit</li>
        <li>Vet: $vet</li>
        <li class='status'>$status</li>
    </ul>
    ";
}

function registratieBericht($leeftijd, $geslacht, $recentBezocht) {
    if ($leeftijd < 18 && strtolower($geslacht) === "vrouw" && $recentBezocht) {
        echo "<p class='waarschuwing'>WAARSCHUWING!!</p>";
        return;
    }

    if ($leeftijd < 18) {
        echo "U bent niet oud genoeg om u te registreren.<br>";
    }
    if (strtolower($geslacht) === "vrouw") {
        echo "Er komt binnenkort een ladies night in de videotheek.<br>";
    }
    if ($recentBezocht) {
        echo "U krijgt korting bij het afrekenen.<br>";
    }
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Opdrachten</title>
    <link rel="stylesheet" href="style/styles.css">
</head>
<body>
<?php

vergelijkMet100(80);
vergelijkMet100(120);
vergelijkMet100(100);

voedingsLijst(500, 50, 30, 20, true);
voedingsLijst(600, 60, 25, 15, false);

registratieBericht(16, "vrouw", true);   
registratieBericht(20, "vrouw", false);  
registratieBericht(25, "man", true);    

?>
</body>
</html>

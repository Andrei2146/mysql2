<?php
function beräknaArea($sida1, $sida2) {
    // Kontrollera om båda argumenten är numeriska
    if (is_numeric($sida1) && is_numeric($sida2)) {
        // Räkna ut arean
        $area = $sida1 * $sida2;
        
        // Avrunda till två decimaler och skriv ut resultatet
        echo "Arean av rektangeln/kvadraten är: " . number_format($area, 2) . " kvadratmeter.";
    } else {
        // Felmeddelande om något av värdena inte är numeriska
        echo "Fel: Båda värdena måste vara siffror.";
    }
}

// Exempel på användning
beräknaArea(5, 10); // Rektangel
beräknaArea(4, 4);  // Kvadrat
beräknaArea("hej", 5); // Fel
?>

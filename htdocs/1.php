<?php
function beräknaArea($sida1, $sida2) {
    if (is_numeric($sida1) && is_numeric($sida2)) {
        $area = $sida1 * $sida2;
    
        echo "Arean av rektangeln/kvadraten är: " . number_format($area, 2) . " kvadratmeter.";
    } else {
        echo "Fel: Båda värdena måste vara siffror.";
    }
}

beräknaArea(5, 10);
beräknaArea(4, 4);
beräknaArea("hej", 5);
?>

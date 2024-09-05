<?php
function räknaMedeltal($tal) {
    $talArray = explode(",", $tal);

    $talArray = array_map('trim', $talArray);

    foreach ($talArray as $nummer) {
        if (!is_numeric($nummer) || intval($nummer) != $nummer) {
            echo "<p>Fel: Alla värden måste vara heltal.</p>";
            return;
        }
    }

    $summa = array_sum($talArray);
    $antal = count($talArray);

    if ($antal > 0) {
        $medeltal = $summa / $antal;
        $medeltalAvrundat = number_format($medeltal, 2);

        echo "<p>Medeltalet är: $medeltalAvrundat</p>";
    } else {
        echo "<p>Fel: Det finns inga siffror att räkna på.</p>";
    }
}

$tal = "3, 24, 80, 9, 1";
räknaMedeltal($tal);
?>

<?php
function räknaMedeltal($tal) {
    // Dela upp strängen med hjälp av explode() för att få en array av tal
    $talArray = explode(",", $tal);

    // Rensa upp arrayen genom att trimma eventuella mellanslag
    $talArray = array_map('trim', $talArray);

    // Kontrollera att alla värden är heltal
    foreach ($talArray as $nummer) {
        if (!is_numeric($nummer) || intval($nummer) != $nummer) {
            echo "<p>Fel: Alla värden måste vara heltal.</p>";
            return;
        }
    }

    // Räkna ut summan och medeltalet
    $summa = array_sum($talArray);
    $antal = count($talArray);

    if ($antal > 0) {
        // Räkna ut medeltalet och avrunda till två decimaler
        $medeltal = $summa / $antal;
        $medeltalAvrundat = number_format($medeltal, 2);

        // Skriv ut resultatet i en HTML-paragraf
        echo "<p>Medeltalet är: $medeltalAvrundat</p>";
    } else {
        echo "<p>Fel: Det finns inga siffror att räkna på.</p>";
    }
}

// Exempel på användning
$tal = "3, 24, 80, 9, 1";
räknaMedeltal($tal);
?>

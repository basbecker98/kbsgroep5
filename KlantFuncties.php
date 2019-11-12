<?php
$gegevens = array("nummer" => 0,
    "naam" => "",
    "woonplaats" => "",
    "melding" => "");

include "DatabaseFuncties.php";
function ToonKlantenOpHetScherm($klanten) {
    foreach ($klanten as $klant) {
        print("<tr>");
        print("<td>".$klant["nummer"]."</td>");
        print("<td>".$klant["naam"]."</td>");
        print("<td>".$klant["woonplaats"]."</td>");
        print("<td><a href=\"BewerkenKlant.php?nummer=".$klant["nummer"]."\">Bewerk</a></td>");
        print("<td><a href=\"VerwijderenKlant.php?nummer=".$klant["nummer"]."\">Verwijder</a></td>");
        print("</tr>");
    }
}
function AlleKlantenOpvragen()
{
    $connection = MaakVerbinding();
    $klanten = SelecteerKlanten($connection);
    SluitVerbinding($connection);
    return $klanten;
}

function KlantGegevensToevoegen($gegevens)
{
    $connection = MaakVerbinding();
    if (VoegKlantToe($connection, $gegevens["naam"], $gegevens["woonplaats"]) == 1)
        $gegevens["melding"] = "De klant is toegevoegd";
    else $gegevens["melding"] = "Het toevoegen is mislukt";
    SluitVerbinding($connection);
    return $gegevens;
}
<?php
include "KlantFuncties.php";
if (isset($_GET["toevoegen"])) {
    $gegevens["naam"] = isset($_GET["naam"]) ? $_GET["naam"] : "";
    $gegevens["woonplaats"] = isset($_GET["woonplaats"]) ? $_GET["woonplaats"] : "";
    $gegevens = KlantGegevensToevoegen($gegevens);
}
?>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous">
<h1>Klant toevoegen</h1><br><br>
<form method="get" action="ToevoegenKlant.php">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Naam</label>
        <input type="text" name="naam" value="<?php print($gegevens["naam"]); ?>"/>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Woonplaats</label>
        <input type="text" name="woonplaats" value="<?php print($gegevens["woonplaats"]); ?>"/>
    </div>
    <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
            <input class="btn btn-primary" type="submit" name="toevoegen" value="Toevoegen"/>
        </div>
    </div>
</form><br><?php print($gegevens["melding"]); ?><br>
<a href="BekijkenOverzicht.php">Terug naar het overzicht</a>


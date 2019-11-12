
<?php
include "KlantFuncties.php";
$klanten = AlleKlantenOpvragen();
?>
<h1>Klanten overzicht</h1>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous">
<br>
<p><a href="ToevoegenKlant.php">Nieuwe klant toevoegen</a></p>
<table class="table">
    <thead class="thead-dark">
    <tr><th>Nr</th><th>Naam</th><th>Woonplaats</th><th></th><th></th></tr>
    </thead>
    <tbody>
    <?php ToonKlantenOpHetScherm($klanten); ?>
    </tbody>
</table>



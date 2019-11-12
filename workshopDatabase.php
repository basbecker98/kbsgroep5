<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$Title$</title>
</head>
<body>
<?php


$host = "localhost";
$databasename = "cursus";
$port = 3306;
$user = "root";
$pass = ""; //eigen password invullen

$connection = mysqli_connect($host, $user, $pass, $databasename, $port);

$nummer = 30;
$sql = "SELECT * FROM medewerker WHERE afd =? AND functie=?";
$statement = mysqli_prepare($connection, "SELECT * FROM medewerker WHERE afd=?");

mysqli_stmt_bind_param($statement, 'i', $nummer);
mysqli_stmt_execute($statement);
$result = mysqli_stmt_get_result($statement);

// loop langs alle rijen
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
    $naam = $row["naam"];
    $functie = $row["functie"];

    print ($naam . $functie );
}

print("</table>");
mysqli_free_result($result);
mysqli_close($connection);
?>
</body>
</html>

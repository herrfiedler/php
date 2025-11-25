<?php
/*
 * Spruchgenerator in PHP
 * Autor: Herr Fiedler
 * Lizenz: MIT License
 * Diese Datei darf frei genutzt, verändert und weitergegeben werden.
 * Vollständiger Lizenztext: https://opensource.org/licenses/MIT
 */
?>


<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Zufallsgenerator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="background-color:#669999;font-family:arial,sans;font-size:3em;color:#FFFFFF;">

<?php
// Personen
$personen = [
    "Frauen",
    "M&auml;nner",
    "Kinder",
    "Polizisten",
    "Lehrer"
];

// Eigenschaften
$eigenschaften = [
    "sch&ouml;n",
    "schlau",
    "gut gekleidet",
    "sehr beliebt",
    "wundervoll"
];

// Indexe auswählen
$zufallsPersonIndex = array_rand($personen);
$zufallsEigenschaftIndex = array_rand($eigenschaften);

// Satz erzeugen
$zufallsSatz = "''" . $personen[$zufallsPersonIndex] . 
               " sind " . $eigenschaften[$zufallsEigenschaftIndex] . "''";
?>

<center>
    <p><b>Zufallsgenerator</b></p>

    <p><?php echo $zufallsSatz; ?></p>

    <p><a href="spruchgenerator.php" style="color:white;">neu laden</a></p>
</center>

</body>
</html>

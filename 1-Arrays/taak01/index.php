<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $PietEen = array(
        "voornaam" => "Piet",
        "achternaam" => "Pat",
        "leeftijd" => "17",
        "klas" => "9A"
    );
    $MuhammadTwee = array(
        "voornaam" => "Muhammad",
        "achternaam" => "Ali",
        "leeftijd" => "17",
        "klas" => "9G"
    );
    $studentDrie = array(
        "voornaam" => "Els",
        "achternaam" => "Verheids",
        "leeftijd" => "16",
        "klas" => "0C"
    );
    echo "Gegevens student:"." ". $studentDrie["voornaam"]." ". $studentDrie["achternaam"]." "."leeftijd,"." ".$studentDrie["leeftijd"].
    " ". "klas,"." ".$studentDrie["klas"];
    ?>
</body>
</html>
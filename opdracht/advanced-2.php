<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        body {
            background-color: <?php echo $_POST["achtergrondkleur"]; ?>;
        }

        table,
        th,
        tr,
        td {
            color: <?php echo $_POST["tekstkleur"] ?>;
            border: <?php echo $_POST["border"] ?> solid;
            padding: <?php echo $_POST["padding"] ?>;
        }
    </style>
    <table>
        <thead>
            <tr>
                <th>Naam</th>
                <th>Leeftijd</th>
                <th>Klas</th>
                <th>Muziek</th>
                <th>Woonplaats</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                $mijnGegevens = array("Naam" => "Alisha", "Leeftijd" => "16", "Klas" => "0A", "Muziek" => "Indie Pop", "Woonplaats" => "Uithoorn");
                foreach ($mijnGegevens as $key => $value) {
                    echo "<td>$value</td>";
                }
                ?>
            </tr>
        </tbody>
    </table>
</body>

</html>
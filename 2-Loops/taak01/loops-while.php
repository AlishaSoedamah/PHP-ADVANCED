<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <li>
        <?php
        $leeftijd = 0;
 
        while($leeftijd < 18) {
        echo "Ik ben: $leeftijd jaar dus ik mag nog niet stemmen <br>";
        $leeftijd++;
        } 
        echo "Ik ben 18 jaar oud dus ik heb stemrecht!"
        ?> 
        </li>
    </ul>
</body>
</html>
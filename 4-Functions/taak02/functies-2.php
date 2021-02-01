<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> functies-2</title>
</head>
<body>
    <?php
        function rekenUit(int $x, int $y){
                $z = $x + $y;
                return $z;
              }
              
              echo "Als ik de getallen 4, 2 en 9 bij elkaar optel, is de uitkomst " . rekenUit(5,10) . "<br>";
              echo "Als ik de getallen 7 en 13 bij elkaar optel, is de uitkomst " . rekenUit(7,13) . "<br>";
              echo "Als ik de getallen 2 en 4 bij elkaar optel, is de uitkomst " . rekenUit(2,4);
              ?>
</body>
</html>
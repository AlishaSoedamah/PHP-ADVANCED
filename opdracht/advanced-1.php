<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="advanced-1.php">
    <label for="klas">Kies een kleur:</label>
    <select id="kleuren" name="">
    <?php
    $kleuren = array("red", "blue", "green", "black", "brown")

    foreach($kleuren as $value){
        echo "<option value='strtolower($value)'>$value</option>";
    }
    ?>
    <input type="submit">
    </form>
</body>
</html>
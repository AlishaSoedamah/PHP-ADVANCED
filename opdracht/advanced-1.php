<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="advanced-2.php" method="post">
        <label for="klas">Kies een kleur:</label>
        <select id="kleuren" name="kleuren">
            <!--kleuren tabel-->
            <?php
            $kleuren = array(
                "red",
                "blue",
                "green",
                "black",
                "brown"
            );
            foreach ($kleuren as $value) {
                echo "<option value='strtolower($value)'>$value</option>";
            ?>
                <option value="<?php echo $value ?>"><?php echo $value ?></option>
            <?php } ?>
            <!--tabel-border dikte-->
            <!--padding in pixels-->
        </select>
        <input type="submit" name="submit" value="verstuur">
    </form>
</body>

</html>
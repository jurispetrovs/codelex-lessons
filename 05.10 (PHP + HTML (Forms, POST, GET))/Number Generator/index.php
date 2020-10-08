<?php

$min = (int)($_POST['min'] ?? 1);
$max = (int)($_POST['max'] ?? 100);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Number Generator</title>
</head>

<body>

<form action="index.php" method="post">
    <label for="min">Min number:</label><br>
    <input type="number" min="1" id="min" name="min" value="<?= $min ?>"><br>
    <label for="max">Max number:</label><br>
    <input type="number" min="1" id="max" name="max" value="<?= $max ?>"><br><br>
    <input type="submit" value="Submit">
</form>

<p>Generated number is: <?= rand($min, $max); ?> </p>

</body>
</html>
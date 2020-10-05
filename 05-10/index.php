<?php

$size = $_GET['size'] ? ($_GET['size'] + ($_GET['size'] / 4)) : 50;
$oldColor = $_GET['color'] ?? null;

$colors = array_filter([
    'red',
    'green',
    'yellow',
    'blue',
    'black',
    'pink'
], function (string $color) use ($oldColor) {
    return $color !== $oldColor;
});

$color = $colors[array_rand($colors)];

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Square</title>
</head>

<body>

<br>
<form action="/" method="get">
    <div style="width: <?= $size; ?>px; height: <?= $size; ?>px; background-color: <?= $color; ?>"></div>

    <input type="hidden" name="size" value="<? $size; ?>">
    <input type="hidden" name="color" value="<? $color; ?>">

    <button type="submit">Go random</button>
</form>


</body>

</html>
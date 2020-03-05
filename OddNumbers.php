<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Odd Numbers</title>
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
    <?php
    echo "<h2>Odd Numbers</h2>";
    $x = 1;
    while ($x <= 100) {
        echo "$x<br />";
        $x += 2;
    }
    ?>
</body>
</html>
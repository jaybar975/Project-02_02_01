<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Is Even</title>
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
    <?php
    echo "<h2>While Logic</h2>";
    
    while ($counter <= 100) {
        $numbers[] = $counter;
        $counter++;
    }
    foreach ($numbers as $counterNum) {
        echo "$counterNum<br>";
    }
    ?>
</body>
</html>
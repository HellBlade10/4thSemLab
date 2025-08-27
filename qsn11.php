<?php
function divisibleByFive($num) {
    return $num % 5 === 0;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for ($i = 0; $i <= 10; $i++) {
        echo "Is " . $i . " divisible by 5? " . (divisibleByFive($i) ? "Yes" : "No") . "<br>";
    }
    ?>
</body>
</html>
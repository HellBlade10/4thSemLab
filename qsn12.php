<?php
function recursiveLength($str) {
    if ($str === "") return 0;
    return 1 + recursiveLength(substr($str, 1));
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
    $string1 = "Hello, World!";
    $string2 = "BCA is good";
    echo "Length of the string \"" . htmlspecialchars($string1) . "\" = " . recursiveLength($string1);
    echo "<br>";
    echo "Length of the string \"" . htmlspecialchars($string2) . "\" = " . recursiveLength($string2);
    ?>
</body>
</html>
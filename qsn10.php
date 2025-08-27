<?php 
function compareStrings($str1, $str2) {
    return strlen($str1) === strlen($str2);
}

$str1 = "Hello";
$str2 = "World";
    $str3 = "String";
    $str4 = "Comparison";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Comparison: </title>
</head>
<body>
    <?php
    echo "Case 1: <br>";
    echo "String 1 = " . htmlspecialchars($str1) . "<br>";
    echo "String 2 = " . htmlspecialchars($str2) . "<br>";
    echo "Are the strings of equal length? " . (compareStrings($str1, $str2) ? "Yes" : "No")."<br><br>";
    
    echo "Case 2: <br>";
    echo "String 1 = " . htmlspecialchars($str3) . "<br>";
    echo "String 2 = " . htmlspecialchars($str4) . "<br>";
    echo "Are the strings of equal length? " . (compareStrings($str3, $str4) ? "Yes" : "No");
    ?></body>
</html>
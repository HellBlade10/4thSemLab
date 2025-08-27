<?php
function calculateArea($base, $height, $shape) {
    if ($shape === "triangle") return 0.5 * $base * $height;
    if ($shape === "parallelogram") return $base * $height;
    return null;
}

$base = 10;
$height = 5;
echo "Triangle Area: " . calculateArea($base, $height, "triangle") . "<br>";
echo "Parallelogram Area: " . calculateArea($base, $height, "parallelogram") . "<br>";
?>
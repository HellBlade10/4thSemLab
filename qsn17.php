<?php
function sumOrTriple($a, $b) {
    if ($a === $b) {
        return 3 * ($a + $b);
    } else {
        return $a + $b;
    }
}
$x = 5;
$y = 5;
echo "Result: " . sumOrTriple($x, $y);
?>

<?php
function diff51($n) {
    $diff = abs($n - 51);
    if ($n > 51) {
        return 3 * $diff;
    } else {
        return $diff;
    }
}
$num = 60;
echo "Result: " . diff51($num);
?>

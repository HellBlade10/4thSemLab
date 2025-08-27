<?php
function getValueAtIndex($arr, $index) {
    return $arr[$index];
}
$numbers = [10, 20, 30, 40, 50];
$index = 2;
echo "Value at index $index: " . getValueAtIndex($numbers, $index);
?>

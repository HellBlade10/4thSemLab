<?php
function findIndex($arr, $str) {
    foreach ($arr as $index => $value) {
        if ($value === $str) return $index;
    }
    return -1;
}

$animals = ["cat", "dog", "pig", "cow"];
echo "Index of pig: " . findIndex($animals, "pig") . "<br>";
echo "Index of horse: " . findIndex($animals, "horse") . "<br>";
?>  
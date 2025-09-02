<?php
function addThreeFrontBack($str) {
    $front = substr($str, 0, 3);
    return $front . $str . $front;
}

echo addThreeFrontBack("Python") . "<br>";
echo addThreeFrontBack("JS") . "<br>";
echo addThreeFrontBack("Code") . "<br>";
?>
